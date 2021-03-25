@extends('layouts.appalt')
@section('content')
    <!-- Preloader end-->
    <section class="authentication-form">
        <div class="innerpage-decor">
            <div class="innerpage-circle1"><img src="../assets/images/Testimonial2.png" alt=""></div>
            <div class="innerpage-circle2"><img src="../assets/images/Testimonial1.png" alt=""></div>
        </div>
        <div>
            <h2 class="title text-center">Sign Up<span></span></h2>
            <p class="text-center">Welcome to Quantum Series, Please join us with your personal account information.</p>
            <div class="card">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <div class="md-fgrup-margin">
                            <input id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" type="text" placeholder="your name" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <input id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" type="text" placeholder="email" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" type="password" placeholder="password" required autocomplete="new-password" autofocus>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror                    </div>
                    <div class="form-group">
                        <input id="password-confirm" class="form-control" name="password_confirmation" value="" type="password" placeholder="Confirm password" required autocomplete="new-password" autofocus>

                    </div>

                    <div class="form-button text-center">
                        <button class="btn btn-custom theme-color" type="submit">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- facebook chat section start-->
@endsection

