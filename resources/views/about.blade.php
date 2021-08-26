@extends('layouts.app')
@section('content')
    <h1 class="text-center bg-info py-4 shadow rounded">About Us</h1>
    <div class="container">
        <div class="row">
            <div class="col">
                <p>{!! $data->content !!}</p>
            </div>
        </div>
    </div>
@endsection
