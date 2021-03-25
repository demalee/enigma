@extends('layouts.appalt')
@section('content')
    <!-- Preloader end-->
    <section class="authentication-form">
        <div class="innerpage-decor">
            <div class="innerpage-circle1"><img src="{{asset('assets/images/Testimonial2.png')}}" alt=""></div>
            <div class="innerpage-circle2"><img src="{{asset('assets/images/Testimonial1.png')}}" alt=""></div>
        </div>
        <div>
            <h2 class="title text-center"><span>Login</span></h2>
            <p class="text-center">Welcome to Quantum Series, Please join us with your personal account information.</p>
            <div class="card">
                <form method="#" action="{{ url('back/client_dash') }}">
                    <div class="form-group">
                        <div class="md-fgrup-margin">
                            <input id="email" type="email" placeholder="username" class="form-control " name="email" value=""  autofocus>

{{--                            @error('email')--}}
{{--                            <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                            @enderror--}}
                        </div>
                    </div>
                    <div class="form-group">
                        <input id="password" type="password"  placeholder="password" class="form-control" name="password">
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
