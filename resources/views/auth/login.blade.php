@extends('layouts.app')
@section('title', 'KANYE - LOGIN')
@section('auth_content')
    <div class="row">
        <div class="col-lg-6 d-flex justify-content-center align-items-center">
            <img src="{{ asset('assets/images/logo.png') }}" alt="logo image" width="300px">
        </div>
        <div class="col-lg-6">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                </div>
                <form class="user" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror"
                            id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..."
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password"
                            class="form-control form-control-user @error('password') is-invalid @enderror"
                            id="exampleInputPassword" placeholder="Password" name="password" required
                            autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox small">
                            <input type="checkbox" class="custom-control-input" id="customCheck"
                                {{ old('remember') ? 'checked' : '' }}>
                            <label class="custom-control-label" for="customCheck">Remember
                                Me</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                        Login
                    </button>
                    <hr>
                </form>
                <hr>
                {{-- <div class="text-center">
                    <a class="small" href="{{ route('password.request') }}">Forgot
                        Password?</a>
                </div>
                <div class="text-center">
                    <a class="small" href="{{ route('register') }}">Create an Account!</a>
                </div> --}}
            </div>
        </div>
    </div>
@endsection
