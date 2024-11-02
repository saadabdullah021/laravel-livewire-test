@extends('layouts.app')
@section('title', 'MIA - Register')
@section('auth_content')
    <!-- Nested Row within Card Body -->
    <div class="row">
        <div class="col-lg-6 d-flex justify-content-center align-items-center">
            <img src="{{ asset('assets/images/bg_removed_logo.png') }}" alt="logo image" width="300px">
        </div>
        <div class="col-lg-6">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                </div>
                <form class="user" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror"
                            id="exampleFirstName" placeholder="First Name" name="name" value="{{ old('name') }}"
                            required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror"
                            id="exampleInputEmail" placeholder="Email Address" name="email" value="{{ old('email') }}"
                            required autocomplete="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="password"
                                class="form-control form-control-user @error('password') is-invalid @enderror"
                                id="exampleInputPassword" placeholder="Password" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <input type="password" class="form-control form-control-user" id="exampleRepeatPassword"
                                placeholder="Confirm Password" name="password_confirmation" required
                                autocomplete="new-password">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                        Register Account
                    </button>
                    <hr>
                </form>
                <hr>
                <div class="text-center">
                    <a class="small" href="{{ route('login') }}">Already have an account? Login!</a>
                </div>
            </div>
        </div>
    </div>
@endsection
