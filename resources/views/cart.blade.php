@extends('layouts.app')
@section('content')

    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        <h1 class="page-name">Cart</h1>
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">cart</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <div class="page-wrapper">
        <div class="cart shopping">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="block">
                            <div class="product-list">
                                <form method="post">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th class="">Item Name</th>
                                            <th class="">Item Price</th>
                                            <th class="">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="">
                                            <td class="">
                                                <div class="product-info">
                                                    <img width="80" src="images/shop/cart/cart-1.jpg" alt="" />
                                                    <a href="#!">Sunglass</a>
                                                </div>
                                            </td>
                                            <td class="">$200.00</td>
                                            <td class="">
                                                <a class="product-remove" href="#!">Remove</a>
                                            </td>
                                        </tr>
                                        <tr class="">
                                            <td class="">
                                                <div class="product-info">
                                                    <img width="80" src="images/shop/cart/cart-2.jpg" alt="" />
                                                    <a href="#!">Airspace</a>
                                                </div>
                                            </td>
                                            <td class="">$200.00</td>
                                            <td class="">
                                                <a class="product-remove" href="#!">Remove</a>
                                            </td>
                                        </tr>
                                        <tr class="">
                                            <td class="">
                                                <div class="product-info">
                                                    <img width="80" src="images/shop/cart/cart-3.jpg" alt="" />
                                                    <a href="#!">Bingo</a>
                                                </div>
                                            </td>
                                            <td class="">$200.00</td>
                                            <td class="">
                                                <a class="product-remove" href="#!">Remove</a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <a href="checkout.html" class="btn btn-main pull-right">Checkout</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
