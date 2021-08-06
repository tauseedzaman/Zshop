@extends('layouts.app')
@section('content')

    <section class="user-dashboard page-wrapper">
        <div class="container">
            <div class="row">
                @include('user_menu')
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="dashboard-wrapper user-dashboard">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Date</th>
                                    <th>Items</th>
                                    <th>Total Price</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>#451231</td>
                                    <td>Mar 25, 2016</td>
                                    <td>2</td>
                                    <td>$99.00</td>
                                    <td><span class="label label-primary">Processing</span></td>
                                    <td><a href="order.html" class="btn btn-default">View</a></td>
                                </tr>
                                <tr>
                                    <td>#451231</td>
                                    <td>Mar 25, 2016</td>
                                    <td>3</td>
                                    <td>$150.00</td>
                                    <td><span class="label label-success">Completed</span></td>
                                    <td><a href="order.html" class="btn btn-default">View</a></td>
                                </tr>
                                <tr>
                                    <td>#451231</td>
                                    <td>Mar 25, 2016</td>
                                    <td>3</td>
                                    <td>$150.00</td>
                                    <td><span class="label label-danger">Canceled</span></td>
                                    <td><a href="order.html" class="btn btn-default">View</a></td>
                                </tr>
                                <tr>
                                    <td>#451231</td>
                                    <td>Mar 25, 2016</td>
                                    <td>2</td>
                                    <td>$99.00</td>
                                    <td><span class="label label-info">On Hold</span></td>
                                    <td><a href="order.html" class="btn btn-default">View</a></td>
                                </tr>
                                <tr>
                                    <td>#451231</td>
                                    <td>Mar 25, 2016</td>
                                    <td>3</td>
                                    <td>$150.00</td>
                                    <td><span class="label label-warning">Pending</span></td>
                                    <td><a href="order.html" class="btn btn-default">View</a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
