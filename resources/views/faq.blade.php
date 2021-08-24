@extends('layouts.app')
@section('content')

    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        <h1 class="page-name">{{ __("Frequently Asked Questions") }}</h1>
                        <ol class="breadcrumb">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="active">F.A.Q's</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>{{ __("Frequently Asked Questions") }}</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, repudiandae.</p>
                    <p>{{ env('MY_EMAIL') }}</p>
                </div>
                <div class="col-md-8">
                    @forelse ($faqs as $faq)
                        <h4><i>{{ $faq->question }} ?</i></h4>
                        <p>{{ $faq->answer }}</p>
                    @empty
                        <h1>{{ __("no FAQ yet") }}!</h1>
                    @endforelse
                </div>
            </div>
        </div>
    </section>
@endsection
