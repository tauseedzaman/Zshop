@extends('layouts.app')
@section('content')

<section class="user-dashboard  page-wrapper">
    <div class="container">
        <div class="row">
            @include('user_menu')
        </div>
        <div class="row">
            <div class="col-md-12  ">
                <div class="dashboard-wrapper  dashboard-user-profile shadow-lg rounded">
                    @livewire('customer-profile')
                </div>
            </div>
        </div>
    </div>
</section>    

@endsection
