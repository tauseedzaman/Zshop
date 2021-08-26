@extends('admin.layouts.app')
@section('admin-content')
<script src="{{ asset('cke/ckeditor.js') }}"></script>
<div id="layoutSidenav_content">
    <main class="bg-light">
        <div class="container-fluid px-4 ">
            <h1 class="mt-4 bg-info shadow p-2 rounded">{{ config('app.name') . __('About Us ') }}</h1>
            <div class="row">
                <div class="col mx-auto">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>
            </div>
            <form class=" p-2 shadow bg-light rounded my-4 " method="post" action="{{ route('admin.aboutUs') }}">
                @csrf
                <h2 class="text-success shadow p-3 bg-success text-light border border-success text-capatilized">{{ __("Add about us page Details") }}</h2>
                <div class="row mb-3">
                    <div class="col-12 mx-auto my-3">
                        <div class="form-floating">
                            <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="content" cols="30" rows="10" placeholder="Write Some thing in about us page"></textarea>
                            <script>
                                CKEDITOR.replace('content',{
                                    filebrowserUploadUrl: "{{route('ckeditor.image-upload', ['_token' => csrf_token() ])}}",
                                    filebrowserUploadMethod: 'form'
                                });
                                </script>
                        </div>
                        @error('content') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="mt-4 mb-0">
                    <div class="d-grid"><button
                        class="btn btn-success btn-block btn-lg">Submit</button></div>
                    </div>
                </form>


@endsection