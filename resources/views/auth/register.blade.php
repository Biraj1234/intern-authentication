@extends('layouts.credentials')

@section('content')
    <div class="login-logo">
        <a href="../../index2.html"><b>Sign Up</b></a>
    </div>
    <!-- /.login-logo -->

    <div class="card-body login-card-body">


        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!--Name-->
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="name" placeholder="Name" value="{{ old('name') }}">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-user"></span>
                    </div>
                </div>

            </div>
            @error('name')
                <span role="alert">
                    <strong>
                        <p class="text text-danger">{{ $message }}</p>
                    </strong>
                </span>
            @enderror

            <!--Email-->
            <div class="input-group mb-3">
                <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>
            @error('email')
                <span role="alert">
                    <strong>
                        <p class="text text-danger">{{ $message }}</p>
                    </strong>
                </span>
            @enderror

            <!--Password-->
            <div class="input-group mb-3">
                <input type="password" class="form-control" name="password" placeholder="Password"
                    value="{{ old('password') }}">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            @error('password')
                <span role="alert">
                    <strong>
                        <p class="text text-danger">{{ $message }}</p>
                    </strong>
                </span>
            @enderror


            <!--Confirm Password-->
            <div class="input-group mb-3">
                <input type="password" class="form-control" name="cpassword" placeholder="Confirm Password"
                    value="{{ old('cpassword') }}">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            @error('cpassword')
                <span role="alert">
                    <strong>
                        <p class="text text-danger">{{ $message }}</p>
                    </strong>
                </span>
            @enderror

            <!--Confirm Password-->
            <div class="input-group mb-3">

                <select class="form-control" name="role_id" value="{{ old('role_id') }}">
                    <option value="">Select your role</option>
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->title }}</option>
                    @endforeach
                </select>

            </div>
            @error('role_id')
                <span role="alert">
                    <strong>
                        <p class="text text-danger">{{ $message }}</p>
                    </strong>
                </span>
            @enderror

            <div class="row">
                <div class="col-8">

                </div>

            </div>
            <div class="social-auth-links text-center mb-3">


                <button type="submit" class="btn btn-block btn-primary">Signup</button>

            </div>
        </form>


        <!-- /.social-auth-links -->
        <p class="mb-0">
            <a href="{{ route('login') }}" class="text-center">Already have an account? Click here</a>
        </p>
    </div>
    <!-- /.login-card-body -->
@endsection
