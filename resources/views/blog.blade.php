@extends('layouts.app')
@section('content')


    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        <h1 class="page-name">Blog</h1>
                        <ol class="breadcrumb">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="active">blog</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <div class="page-wrapper">
  @livewire('blog-posts')
    </div>


@endsection
