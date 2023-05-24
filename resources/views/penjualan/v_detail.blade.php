@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Profile') }}</h1>


    <div class="row">
        <div class="col-lg-12 order-lg-1">

            <div class="card shadow mb-4">

                <div class="card-header py-3 d-flex justify-content-between">
                    <h4 class="my-auto font-weight-bold text-primary">Detail Penjualan</h4>
                </div>
                <div class="card-body">

                    <table class="table">
                        <tr>
                            <th>No Penjualan</th>
                            <td>{{ $penjualan->sales_no }}</td>
                        </tr>
                        <tr>
                            <th>Customer</th>
                            <td>{{ $penjualan->customer_name }}</td>
                        </tr>
                        <tr>
                            <th>Salesman</th>
                            <td>{{ $penjualan->sales_person }}</td>
                        </tr>
                        <tr>
                            <th>Tanggal Input</th>
                            <td>{{ $penjualan->created_at }}</td>
                        </tr>
                    </table>
                </div>

                <div class="card-header py-3 d-flex justify-content-between">
                    <h4 class="my-auto font-weight-bold text-primary">Detail Sub Sales</h4>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Item</th>
                                <th>Quantity</th>
                                <th>Unit Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subSales as $subSale)
                                <tr>
                                    <td>{{ $subSale->name }}</td>
                                    <td>{{ $subSale->qty_sales }}</td>
                                    <td>{{ $subSale->unit_price }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>

        </div>

    </div>
@endsection
