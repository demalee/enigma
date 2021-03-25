@extends('layouts.appalt')
@section('content')
    <!-- Preloader end-->
    <section class="authentication-form">
        <div class="innerpage-decor">
            <div class="innerpage-circle1"><img src="../assets/images/Testimonial2.png" alt=""></div>
            <div class="innerpage-circle2"><img src="../assets/images/Testimonial1.png" alt=""></div>
        </div>
        <div>
            <h2 class="title text-center"><span>Login</span></h2>
            <p class="text-center">Welcome to Quantum Series, Please join us with your personal account information.</p>
            <div class="card">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <div class="md-fgrup-margin">
                            <input id="email" type="email" placeholder="username/email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <input id="password" type="password"  placeholder="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <div class="custom-control custom-checkbox col-6">
                            <input class="form-check-input" id="flexCheckDefault" type="checkbox" value="">
                            <label class="form-check-label ps-2" for="flexCheckDefault">Remember me</label>
                        </div><a class="text-end col-6 theme-link" href="{{url('register')}}">Create Account</a>
                    </div>
                   <br>
                    <div class="form-button text-center">
                        <button class="btn btn-custom theme-color" type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- facebook chat section start-->
@endsection
