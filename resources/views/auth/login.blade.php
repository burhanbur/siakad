@extends('layouts.auth')

@section('content')
<form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
    @csrf
    <span class="login100-form-title p-b-43">
        <img class="img" src="{{ asset('siakad-logo.png') }}"><br>
    </span>

    @if (Session::get('error'))
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{ Session::get('error') }}
    </div>
    @endif
    
    <div class="wrap-input100" data-validate="Email or Username is required">
        <input class="input100" type="text" name="username" value="{{ old('username') }}" required>
        <span class="focus-input100"></span>
        <span class="label-input100">Username atau Email</span>
    </div>                  
    
    <!-- validate-input -->
    <div class="wrap-input100" data-validate="Password is required">
        <input class="input100" type="password" name="password" required>
        <span class="focus-input100"></span>
        <span class="label-input100">Kata Sandi</span>
    </div>

    <div class="flex-sb-m w-full p-t-3 p-b-32">
        <div class="contact100-form-checkbox">
            {{-- <!-- <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember">
            <label class="label-checkbox100" for="ckb1">
                Remember me
            </label> --> --}}
        </div>

        <div>
            <a href="" target="_blank" class="txt1">
                Lupa Kata Sandi?
            </a>
        </div>
    </div>


    <div class="container-login100-form-btn">
        <button class="login100-form-btn">
            <i class="fa fa-sign-in"></i> &nbsp; Masuk
        </button>
    </div>
</form>
@endsection