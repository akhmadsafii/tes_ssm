<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Item;
use App\Models\Sales;
use App\Models\salesman;
use App\Models\SubSales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenjualanController extends Controller
{
    public function index()
    {
        $penjualan = Sales::join('customers', 'sales.customer_id', '=', 'customers.customer_id')
            ->join('salesmen', 'sales.salesman_id', '=', 'salesmen.id')
            ->select('sales.*', 'customers.customer_name', 'salesmen.sales_person')
            ->get();
        // dd($penjualan);
        return view('penjualan.v_index', compact('penjualan'));
    }

    public function sub_penjulan()
    {
        $subSales = SubSales::all();
        return view('penjualan.v_sub_penjulan', compact('subSales'));
    }

    public function create()
    {
        $customers = Customer::all();
        // dd($customers);
        $salesmen = salesman::all();
        $items = Item::all();
        $lastSales = Sales::orderBy('created_at', 'desc')->first();
        if ($lastSales) {
            // Mendapatkan angka urutan dari sales_no terakhir
            $lastSalesNumber = substr($lastSales->sales_no, 4);
            $salesNumber = (int)$lastSalesNumber + 1;
        } else {
            // Jika tidak ada data terakhir, mulai dari angka 1
            $salesNumber = 1;
        }
        $salesNo = 'POS-' . str_pad($salesNumber, 5, '0', STR_PAD_LEFT);
        // dd($items);

        return view('penjualan.v_create', compact('customers', 'salesmen', 'items', 'salesNo'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'sales_no' => 'required',
            'customer_id' => 'required',
            'salesman_id' => 'required',
            'items.*.item_id' => 'required',
            'items.*.qty_sales' => 'required|numeric',
            'items.*.unit_price' => 'required|numeric',
        ]);

        $sales = new Sales();
        $sales->sales_no = $request->sales_no;
        $sales->customer_id = $request->customer_id;
        $sales->salesman_id = $request->salesman_id;
        $sales->create_by = auth()->user()->id;
        $sales->created_at = now();

        $year = date('Y');
        $month = date('m');
        $counter = Sales::whereYear('created_at', $year)->whereMonth('created_at', $month)->count() + 1;
        $counterFormatted = str_pad($counter, 4, '0', STR_PAD_LEFT);
        $sales->id = "INV-$month$year-A0031-$counterFormatted";

        $sales->save();

        // Simpan data sub penjualan ke tabel tx_sub_sales
        foreach ($request->items as $item) {
            $subSales = new SubSales();
            $subSales->sales_id = $sales->id;
            $subSales->item_id = $item['item_id'];
            $subSales->qty_sales = $item['qty_sales'];
            $subSales->unit_price = $item['unit_price'];
            $subSales->save();
        }

        // Redirect atau tampilkan pesan sukses
        return redirect()->route('penjualan')->withSuccess('Penjualan berhasil disimpan.');
    }

    public function show($id)
    {
        $penjualan = DB::table('sales')
            ->join('customers', 'sales.customer_id', '=', 'customers.customer_id')
            ->join('salesmen', 'sales.salesman_id', '=', 'salesmen.id')
            ->select('sales.*', 'customers.customer_name', 'salesmen.sales_person')
            ->where('sales.id', $id)
            ->first();

        $subSales = DB::table('sub_sales')
            ->join('items', 'sub_sales.item_id', '=', 'items.id')
            ->select('sub_sales.*', 'items.name')
            ->where('sub_sales.sales_id', $id)
            ->get();

        return view('penjualan.v_detail', compact('penjualan', 'subSales'));
    }
}
