<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('username')" required autocomplete="Your username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

       

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

@extends('layouts.guest')
@section('title') 
Register 
@endsection
@section('content')

<?php
$icons = new \Feather\IconManager();
?>

<div class="preeloader">
    
</div>

<div class="main-wrap">

<div class="nav-header bg-transparent shadow-none border-0">
    <div class="nav-top w-100">
        <a href="index.html"><i class="feather-zap text-success display1-size me-2 ms-0"></i><span class="d-inline-block fredoka-font ls-3 fw-600 text-current font-xxl logo-text mb-0">{{config("app.name")}} </span> </a>
        <a href="#" class="mob-menu ms-auto me-2 chat-active-btn"><i class="feather-message-circle text-grey-900 font-sm btn-round-md bg-greylight"></i></a>
        <a href="default-video.html" class="mob-menu me-2"><i class="feather-video text-grey-900 font-sm btn-round-md bg-greylight"></i></a>
        <a href="#" class="me-2 menu-search-icon mob-menu"><i class="feather-search text-grey-900 font-sm btn-round-md bg-greylight"></i></a>
        <button class="nav-menu me-0 ms-2"></button>

        <a href="{{route('login')}}" class="header-btn d-none d-lg-block bg-dark fw-500 text-white font-xsss p-3 ms-auto w100 text-center lh-20 rounded-xl"  data-bs-toggle="modal" data-bs-target="#Modallogin">Login</a>
        <a href="{{route('register')}}" class="header-btn d-none d-lg-block bg-current fw-500 text-white font-xsss p-3 ms-2 w100 text-center lh-20 rounded-xl"  data-bs-toggle="modal" data-bs-target="#Modalregister">Register</a>

    </div>
    
    
</div>

<div class="row">
    <div class="col-xl-5 d-none d-xl-block p-0 vh-100 bg-image-cover bg-no-repeat" 
        style="background-image: url(images/login-bg-2.jpg);"></div>
    <div class="overflow-scroll col-xl-7 vh-100 align-items-center d-flex bg-white rounded-3">
        <div class="card shadow-none border-0 ms-auto me-auto login-card">
            <div class="card-body rounded-0 text-left">                     
                <form method="POST" action="{{ route('register') }}">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                <h2 class="fw-700 display1-size display2-md-size my-4">Create <br> account</h2>   
                    @csrf


                    
                    <div class="form-group icon-input mb-3">
                        <i class="font-sm text-grey-500 pe-0" style ="margin-top : -10px">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#0000FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="20" height="20">
                        <circle cx="12" cy="11" r="4"></circle>
                        <path d="M21 21v-2a4 4 0 00-3-3.87"></path>
                        <path d="M3 21v-2a4 4 0 013-3.87"></path>
                        </svg>
                    </i>
                        <input type="text" required name="last_name" name="first_name" value ="{{ old('first_name') }}" class="style2-input ps-5 form-control text-grey-900 font-xsss fw-600" placeholder="Your First Name">                        
                    </div>
                    
                    <div class="form-group icon-input mb-3">
                        <i class="font-sm ti-user text-grey-500 pe-0"></i>
                        <input type="text" required name="last_name" name="last_name" value ="{{ old('last_name') }}" class="style2-input ps-5 form-control text-grey-900 font-xsss fw-600" placeholder="Your Last Name">                        
                    </div>

                    <div class="form-group icon-input mb-3">
                        <i class="font-sm ti-user text-grey-500 pe-0"></i>
                        <input type="text" required name ="username" name="username" value ="{{ old('username') }}" class="style2-input ps-5 form-control text-grey-900 font-xsss fw-600" placeholder="Your Username">                        
                    </div>

                        <nav class="mb-2 nav">
                        <li class="nav-item">
                            <a class="nav-link btn btn-info mx-1" onclick="toggle_email_and_phone_fields('email','Your Email Address')">Email</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-info mx-1" onclick="toggle_email_and_phone_fields('tel','Your Phone Number')">Phone</a>
                        </li>
                    </nav>

                    </div>

                    <div class="custom-file">
                        <input id="profile" class="custom-file-input" type="file" name="profile">
                        <label for="profile" class="custom-file-label">Profile</label>
                    </div>

                    <label for="">Gender</label><br>
                    <div class="form-check form-check-inline mb-2">
                        <input id="gender" class="form-check-input" type="radio" name="gender" value="male">
                        <label for="gender" class="form-check-label">Male</label>
                    </div>
                    <div class="form-check form-check-inline mb-2">
                        <input id="gender" class="form-check-input" type="radio" name="gender" value="female">
                        <label for="gender" class="form-check-label">Female</label>
                    </div>

                    
                    <div class="form-group icon-input mb-3">
                        <i class="font-sm ti-email text-grey-500 pe-0"></i>
                        <input type="email" id="email_or_phone" name="email" class="style2-input ps-5 form-control text-grey-900 font-xsss fw-600" placeholder="Your Email Address">     
                        <script>
                            function toggle_email_and_phone_fields(input_type,place_holder){
                                var element = document.querySelector("#email_or_phone")
                                element.type=input_type
                                element.placeholder=place_holder

                            }
                        </script>                   
                    </div>

                    <div class="form-group icon-input mb-3">
                        <input type="Password" name="password" class="style2-input ps-5 form-control text-grey-900 font-xss ls-3" placeholder="Password">
                        <i class="font-sm ti-lock text-grey-500 pe-0"></i>
                    </div>
                    <div class="form-group icon-input mb-1">
                        <input type="Password" name="password_confirmation" class="style2-input ps-5 form-control text-grey-900 font-xss ls-3" placeholder="Confirm Password">
                        <i class="font-sm ti-lock text-grey-500 pe-0"></i>
                    </div>
                    <div class="form-check text-left mb-3">
                        <input type="checkbox" name="terms" class="form-check-input mt-2" id="exampleCheck2">
                        <label class="form-check-label font-xsss text-grey-500" for="exampleCheck2">Accept Term and Conditions</label>
                        <!-- <a href="#" class="fw-600 font-xsss text-grey-700 mt-1 float-right">Forgot your Password?</a> -->
                    </div>
                    <div class="form-group mb-1"><a href="#" class="form-control text-center style2-input text-white fw-600 bg-dark border-0 p-0 ">Register</a></div>
                </form>
                 
                <div class="col-sm-12 p-0 text-left">
                    <div class="form-group mb-1"><a href="#" class="form-control text-center style2-input text-white fw-600 bg-dark border-0 p-0 ">Register</a></div>
                    <h6 class="text-grey-500 font-xsss fw-500 mt-0 mb-0 lh-32">Already have account <a href="login.html" class="fw-700 ms-1" >Login</a></h6>
                </div>
                 
            </div>
        </div> 
    </div>
</div>
</div>

<!-- Modal Login -->
<div class="modal bottom fade" style="overflow-y: scroll;" id="Modallogin" tabindex="-1" role="dialog">
 <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content border-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ti-close text-grey-500"></i></button>
        <div class="modal-body p-3 d-flex align-items-center bg-none">
            <div class="card shadow-none rounded-0 w-100 p-2 pt-3 border-0">
                <div class="card-body rounded-0 text-left p-3">
                    <h2 class="fw-700 display1-size display2-md-size mb-4">Login into <br>your account</h2>
                    <form>
                        
                        <div class="form-group icon-input mb-3">
                            <i class="font-sm ti-email text-grey-500 pe-0"></i>
                            <input type="text" class="style2-input ps-5 form-control text-grey-900 font-xsss fw-600" placeholder="Your Email Address">                        
                        </div>
                        <div class="form-group icon-input mb-1">
                            <input type="Password" class="style2-input ps-5 form-control text-grey-900 font-xss ls-3" placeholder="Password">
                            <i class="font-sm ti-lock text-grey-500 pe-0"></i>
                        </div>
                        <div class="form-check text-left mb-3">
                            <input type="checkbox" class="form-check-input mt-2" id="exampleCheck4">
                            <label class="form-check-label font-xsss text-grey-500" for="exampleCheck4">Remember me</label>
                            <a href="forgot.html" class="fw-600 font-xsss text-grey-700 mt-1 float-right">Forgot your Password?</a>
                        </div>
                    </form>
                     
                    <div class="col-sm-12 p-0 text-left">
                        <div class="form-group mb-1"><a href="#" class="form-control text-center style2-input text-white fw-600 bg-dark border-0 p-0 ">Login</a></div>
                        <h6 class="text-grey-500 font-xsss fw-500 mt-0 mb-0 lh-32">Dont have account <a href="register.html" class="fw-700 ms-1">Register</a></h6>
                    </div>
                    <div class="col-sm-12 p-0 text-center mt-3 ">
                        
                        <h6 class="mb-0 d-inline-block bg-white fw-600 font-xsss text-grey-500 mb-4">Or, Sign in with your social account </h6>
                        <div class="form-group mb-1"><a href="#" class="form-control text-left style2-input text-white fw-600 bg-facebook border-0 p-0 mb-2"><img src="images/icon-1.png" alt="icon" class="ms-2 w40 mb-1 me-5"> Sign in with Google</a></div>
                        <div class="form-group mb-1"><a href="#" class="form-control text-left style2-input text-white fw-600 bg-twiiter border-0 p-0 "><img src="images/icon-3.png" alt="icon" class="ms-2 w40 mb-1 me-5"> Sign in with Facebook</a></div>
                    </div>
                </div>
            </div>                    
        </div>
    </div>
</div>
</div>


<!-- Modal Register -->
<div class="modal bottom fade" style="overflow-y: scroll;" id="Modalregister" tabindex="-1" role="dialog">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content border-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ti-close text-grey-500"></i></button>
        <div class="modal-body p-3 d-flex align-items-center bg-none">
            <div class="card shadow-none rounded-0 w-100 p-2 pt-3 border-0">
                <div class="card-body rounded-0 text-left p-3">
                    <h2 class="fw-700 display1-size display2-md-size mb-4">Create <br> account</h2>                        
                    <form>
                        
                        <div class="form-group icon-input mb-3">
                            <i class="font-sm ti-user text-grey-500 pe-0"></i>
                            <input type="text" class="style2-input ps-5 form-control text-grey-900 font-xsss fw-600" placeholder="Your Name">                        
                        </div>
                        <div class="form-group icon-input mb-3">
                            <i class="font-sm ti-email text-grey-500 pe-0"></i>
                            <input type="text" class="style2-input ps-5 form-control text-grey-900 font-xsss fw-600" placeholder="Your Email Address">                        
                        </div>
                        <div class="form-group icon-input mb-3">
                            <input type="Password" class="style2-input ps-5 form-control text-grey-900 font-xss ls-3" placeholder="Password">
                            <i class="font-sm ti-lock text-grey-500 pe-0"></i>
                        </div>
                        <div class="form-group icon-input mb-1">
                            <input type="Password" class="style2-input ps-5 form-control text-grey-900 font-xss ls-3" placeholder="Confirm Password">
                            <i class="font-sm ti-lock text-grey-500 pe-0"></i>
                        </div>
                        <div class="form-check text-left mb-3">
                            <input type="checkbox" class="form-check-input mt-2" id="exampleCheck7">
                            <label class="form-check-label font-xsss text-grey-500" for="exampleCheck7">Accept Term and Conditions</label>
                            <!-- <a href="#" class="fw-600 font-xsss text-grey-700 mt-1 float-right">Forgot your Password?</a> -->
                        </div>
                    </form>
                     
                    <div class="col-sm-12 p-0 text-left">
                        <div class="form-group mb-1"><a href="#" class="form-control text-center style2-input text-white fw-600 bg-dark border-0 p-0 ">Register</a></div>
                        <h6 class="text-grey-500 font-xsss fw-500 mt-0 mb-0 lh-32">Already have account <a href="login.html" class="fw-700 ms-1">Login</a></h6>
                    </div>
                    <div class="col-sm-12 p-0 text-center mt-3 ">
                        
                        <h6 class="mb-0 d-inline-block bg-white fw-600 font-xsss text-grey-500 mb-4">Or, Sign in with your social account </h6>
                        <div class="form-group mb-1"><a href="#" class="form-control text-left style2-input text-white fw-600 bg-facebook border-0 p-0 "><img src="images/icon-1.png" alt="icon" class="ms-2 w40 mb-1 me-5"> Sign in with Google</a></div>
                        <div class="form-group mb-1"><a href="#" class="form-control text-left style2-input text-white fw-600 bg-twiiter border-0 p-0 "><img src="images/icon-3.png" alt="icon" class="ms-2 w40 mb-1 me-5"> Sign in with Facebook</a></div>
                    </div>
                </div>
            </div>                    
        </div>
    </div>
</div>
</div>

@endsection