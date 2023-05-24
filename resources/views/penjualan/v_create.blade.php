@extends('layouts.admin')

@section('main-content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">{{ __('Profile') }}</h1>

@if (session('success'))
<div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if ($errors->any())
<div class="alert alert-danger border-left-danger" role="alert">
    <ul class="pl-4 my-2">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="row">
    <div class="col-lg-12 order-lg-1">

        <div class="card shadow mb-4">

            <div class="card-header py-3">
                <h4 class="my-auto font-weight-bold text-primary">Update Penjualan</h4>
            </div>
            <div class="card-body">

                <form action="{{ route('penjualan.store') }}" method="post">
                    @csrf
                
                    <!-- Input nomor penjualan -->
                    <div class="form-group">
                        <label for="sales_no">Nomor Penjualan</label>
                        <input type="text" name="sales_no" id="sales_no" class="form-control" value="{{ $salesNo }}" readonly>
                    </div>
                
                    <!-- Pilih customer -->
                    <div class="form-group">
                        <label for="customer_id">Customer</label>
                        <select name="customer_id" id="customer_id" class="form-control" required>
                            <option value="">Pilih Customer</option>
                            @foreach ($customers as $customer)
                                <option value="{{ $customer->customer_id }}">{{ $customer->customer_name }}</option>
                            @endforeach
                        </select>
                    </div>
                
                    <!-- Pilih salesman -->
                    <div class="form-group">
                        <label for="salesman_id">Salesman</label>
                        <select name="salesman_id" id="salesman_id" class="form-control" required>
                            <option value="">Pilih Salesman</option>
                            @foreach ($salesmen as $salesman)
                                <option value="{{ $salesman->id }}">{{ $salesman->sales_person }}</option>
                            @endforeach
                        </select>
                    </div>
                
                    <!-- Input detail penjualan -->
                    <div class="form-group">
                        <label for="items">Detail Penjualan</label>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Item</th>
                                    <th>Jumlah</th>
                                    <th>Harga Satuan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $item)
                                    <tr>
                                        <td class="align-middle">{{ $item->name }}</td>
                                        <td>
                                            <input type="number" name="items[{{ $loop->index }}][qty_sales]" class="form-control" required>
                                            <input type="hidden" name="items[{{ $loop->index }}][item_id]" value="{{ $item->id }}">
                                        </td>
                                        <td>
                                            <input type="number" name="items[{{ $loop->index }}][unit_price]" class="form-control" required>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                
                    <!-- Tombol Submit -->
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>

            </div>

        </div>

    </div>

</div>

@endsection