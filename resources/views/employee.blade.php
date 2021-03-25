@extends('layouts.appalt')
@section('content')
    <!-- Preloader end-->
    <section class="authentication-form">
        <div class="innerpage-decor">
            <div class="innerpage-circle1"><img src="../assets/images/Testimonial2.png" alt=""></div>
            <div class="innerpage-circle2"><img src="../assets/images/Testimonial1.png" alt=""></div>
        </div>
        <div>
            <h2 class="title text-center">Thanks for <span> Joining US</span></h2>
            <p class="text-center">Welcome to quantum, Fill in the details below.</p>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif

            @if (Session::has('success'))
                <div class="alert alert-success">
                    <p>{{Session::get('success')}}</p>
                </div><br />
            @endif

            <div class="card">
                <form enctype="multipart/form-data" action="{{route('employee.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <div class="md-fgrup-margin">
                            <input class="form-control" type="text" name="username" placeholder="Your name" >
                        </div>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="number" name="phone" placeholder="phone number" >
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="code" placeholder="Organization Code" required="required">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="message" name="message" rows="4" placeholder="message"></textarea>
                    </div>
<br>
                    <div class="form-button text-center">
                        <button class="btn btn-custom theme-color" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- facebook chat section start-->
@endsection
