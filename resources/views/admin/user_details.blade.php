@extends('admin.layouts.app')
@section('admin-content')

<div id="layoutSidenav_content">
    <main class="bg-light">
        <div class="container-fluid px-4 ">
            <h1 class="mt-4 bg-info shadow p-2 rounded">{{ config('app.name') . __(' Customer Details') }}</h1>
            <div class="row">
                <div class="col mx-auto">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>
            </div>
            
            <div class="row mt-4 shadow rounded p-3">
                <div class="col mx-auto">
                    <table class="table table-all table-hoverable">
                        <thead>
                        <tr>
                            <th>Key</th>
                            <th>Value</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>User ID</td>
                                <td>{{ $customer->id }}</td>
                            </tr>
                            <tr>
                                <td>User Name</td>
                                <td>{{ $customer->full_name }}</td>
                            </tr>
                            <tr>
                                <td>User Email</td>
                                <td>{{ $customer->email }}</td>
                            </tr>
                            <tr>
                                <td>User Billing Address</td>
                                <td>{{ $customer->billing_address }}</td>
                            </tr>
                            <tr>
                                <td>User Details Shipping Adderess</td>
                                <td>{{ $customer->default_shipping_address }}</td>
                            </tr>
                            <tr>
                                <td>User Phone</td>
                                <td>{{ $customer->phone }}</td>
                            </tr>
                            <tr>
                                <td>
                                    <h1 class="text-success">The user liked these products</h1>

                                </td>
                            </tr>

                            @foreach ($likes as $like)
                            <tr>
                                <td> <span class="bg-info p-1 rounded">Liked</span>  Product id</td>
                                <td><a class="nav-link" title="show this product" href="{{ route('single_product',$like->product_id) }}">{{ $like->product_id }}</a></td>
                            </tr>
                            @endforeach

                            <tr class="">
                                <td>
                                    <h1 class="text-success"> products added to cart </h1>
                                </td>
                            </tr>

                            @foreach ($cartProducts as $product)
                            <tr>
                                <td> <span class="bg-warning p-1 rounded">Cart</span>  Product id</td>
                                <td><a class="nav-link" title="show this product" href="{{ route('single_product',$product->product_id) }}">{{ $product->product_id }}</a></td>
                            </tr>
                            @endforeach

                            {{-- <tr class="">
                                <td>
                                    <h1 class="text-success">the user ordered these product</h1>
                                </td>
                            </tr>

                            @foreach ($orderedProducts as $product)
                            <tr>
                                <td> <span class="bg-warning p-1 rounded">Cart</span>  Product id</td>
                                <td><a class="nav-link" title="show this product" href="{{ route('single_product',$product->product_id) }}">{{ $product->product_id }}</a></td>
                            </tr>
                            @endforeach --}}
                        
                        </tbody>
                    </table>
                </div>
            </div>



@endsection
