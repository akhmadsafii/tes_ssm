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
                    <h4 class="my-auto font-weight-bold text-primary">Penjualan</h4>
                </div>
                <div class="card-body">

                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Sales ID</th>
                                <th>Item ID</th>
                                <th>Qty Sales</th>
                                <th>Unit Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subSales as $subSale)
                                <tr>
                                    <td>{{ $subSale->id }}</td>
                                    <td>{{ $subSale->sales_id }}</td>
                                    <td>{{ $subSale->item_id }}</td>
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
