@extends('layouts.app')

@section('content')

    <section class="signin-page account">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="block text-center">
                        <a class="logo" href="{{ url('/') }}">
                            <h1 class="text-success text-bolder shadow rounded">{{ config('app.name') }} </h1>
                        </a>
                        <h2 class="text-center">Welcome Back</h2>
                        <form class="text-left clearfix"  method="POST" action="{{ route('login') }}" >
                            @csrf
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                            <div class="text-center">
                                <button type="submit" class="btn btn-main text-center" >Login</button>
                            </div>
                        </form>
                        <p class="mt-20">New in this site ?<a href="{{ route('register') }}"> Create New Account</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
