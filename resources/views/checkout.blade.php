@extends('layouts.app')
@section('content')

<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content">
                    <h1 class="page-name">Checkout</h1>
                    <ol class="breadcrumb">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li class="active">{{ __("checkout") }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
@livewire('checkout')
@endsection
