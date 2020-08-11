@extends('layout.master')
@section('title','Registrasi Page')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/asset/css/login.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
@endsection
@section('content')
    <section id="register-page">
        <div class="card">
            <div class="card-body">
                <div class="login-content mt-4">
                    <form action="index.html">
                        {{-- <img src="/asset/img/avatar.svg"> --}}
                        <h2 class="title">Registrasi</h2>
                            <div class="input-div one">
                                <div class="i">
                                    <i class="fas fa-id-card"></i>
                                </div>
                                <div class="div">
                                    <h5>Nama Lengkap</h5>
                                    <input type="text" class="input">
                                </div>
                            </div>
                            <div class="input-div one">
                                <div class="i">
                                        <i class="fas fa-envelope"></i>
                                </div>
                                <div class="div">
                                      <h5>Email</h5>
                                      <input type="email" class="input">
                                </div>
                             </div>
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
                            <div class="input-div pass">
                                <div class="i"> 
                                    <i class="fas fa-lock"></i>
                                </div>
                                <div class="div">
                                    <h5>Confirm Password</h5>
                                    <input type="password" class="input">
                                </div>
                            </div>
                        <input type="submit" class="btnn" value="Submit">
                        <p class="mt-1">Do Have an Account ? <a href="/login">Sign In Here</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script src="{{ URL::asset('/asset/js/login.js') }}"></script>
@endsection