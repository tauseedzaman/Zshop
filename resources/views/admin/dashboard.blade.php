@extends('admin.layouts.app')
@section('admin-content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">{{ __("Dashboard") }}</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">{{ __(("Dashboard")) }}</li>
                </ol>
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body">{{ config('app.name') }} {{ __("Products") }}</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="{{ route('admin.products') }}">{{ __("View") }} {{ App\Models\product::count() }} {{ __("Products") }}</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-warning text-white mb-4">
                            <div class="card-body">{{ config('app.name') }} {{ __("Orders") }}</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="{{ route("admin.orders") }}">{{ __("View") ." ". App\Models\order::count() }} {{ __("Orders") }}</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-success text-white mb-4">
                            <div class="card-body">{{ config('app.name').' '.__("Customers") }}</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="{{ route("admin.users") }}">{{ __("View")." ".App\Models\user::count() }} {{ __("Customers") }}</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
       
@endsection
