@extends('layout.master')
@section('title','Login Page')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/asset/css/login.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
@endsection
@section('content')

    <section id="login-page">
        <div class="card">
            <div class="card-body">
                <a href="/" class="btn btn-secondary"><i class="fas fa-angle-double-left"></i></a>
                <div class="login-content mt-4">                    
                    <form action="index.html">
                        <img src="/asset/img/avatar.svg" style="margin-top: -30px;">
                        <h2 class="title">Welcome</h2>
                           <div class="input-div one">
                              <div class="i">
                                      <i class="fas fa-user"></i>
                              </div>
                              <div class="div">
                                      <h5>Username</h5>
                                      <input type="text" class="input">
                              </div>
                           </div>
                           <div class="input-div pass">
                              <div class="i"> 
                                   <i class="fas fa-lock"></i>
                              </div>
                              <div class="div">
                                   <h5>Password</h5>
                                   <input type="password" class="input">
                           </div>
                        </div>
                        <a href="#" class="sign-in">Forgot Password?</a>
                        <input type="submit" class="btnn" value="Login">
                        <p class="mt-5">Don't Have an Account ? <a href="/registrasi">Sign Up Here</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script src="{{ URL::asset('/asset/js/login.js') }}"></script>
@endsection