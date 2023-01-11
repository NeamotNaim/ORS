@extends('admin/layouts/auth')
@section('content')
    <!--begin::Main-->
    <div class="d-flex flex-column flex-column-fluid align-items-center justify-content-center p-0">
        <div class="col-12 text-center">
            <a href="/" class="image mb-7 mb-sm-10">
                <img alt="Logo" src="{{ asset('logo.png') }}" class="img-fluid logo-fix-size">
            </a>
        </div>
        <div class="width-540">
            @if(\Illuminate\Support\Facades\Session::has('status'))
                <p class="alert alert-success">{{ \Illuminate\Support\Facades\Session::get('status') }}</p>
            @endif
            
        </div>
        <div class="bg-theme-white rounded-15 shadow-md width-540 px-5 px-sm-7 py-10 mx-auto">
            <h1 class="text-center mb-7">LOGIN</h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-sm-7 mb-4">
                    <label for="formInputEmail" class="form-label">
                        Email:<span class="required"></span>
                    </label>
                    <input class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" id="formInputEmail" aria-describedby="emailHelp" value="{{ (Cookie::get('adminEmail') !== null) ? Cookie::get('adminEmail') : '' }}"
                           type="email" placeholder="Enter Email" name="email" required autocomplete="off" autofocus>
                </div>
                <div class="mb-sm-7 mb-4 position-relative">
                    <div class="d-flex justify-content-between">
                        <label for="formInputPassword" class="form-label">Password:<span class="required"></span></label>
                        
                    </div>
                    <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" id="formInputPassword"
                           placeholder="Enter Password" name="password" required autocomplete="off" value="{{ (Cookie::get('adminPassword') !== null) ? Cookie::get('adminPassword') : '' }}">
                </div>
                <div class="mb-sm-7 mb-4 form-check">
                    <input type="checkbox" class="form-check-input" id="formCheck" {{ (Cookie::get('remember') !== null) ? 'checked' : '' }}>
                    <label class="form-check-label" for="formCheck">Remember me</label>
                    <a class="float-right m-4" href="{{ route('password.request') }}" class="link-info fs-6 text-decoration-none">
                            Forgot Password ?
                        </a>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary" data-turbo="false">Login</button>
                </div>
            </form>
        </div>
    </div>
    <!--end::Main-->
@endsection
