@extends('frontend/layouts/master')
@section('content')
@include('frontend/layouts/header')
    <div class="register-page">
        <!-- start hero section -->
        <section class="hero-section position-relative bg-light py-40">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 text-center mb-lg-0 mb-md-5 mb-sm-4 ">
                        <div class="hero-content">
                            <h1 class=" text-secondary mb-3">
                                Registration
                            </h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb  justify-content-center mb-0">
                                    <li class="breadcrumb-item "><a href="{{url('/')}}"
                                                                    class="fs-18 text-gray">
                                                 Home
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item text-primary fs-18" aria-current="page">Registration</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end hero section -->

        <!-- start candidate login section -->
        <section class="py-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                      
                        <form method="POST" action="{{ route('register') }}">
                          @csrf
                             <div class="py-40 px-40 bg-gray">
                            <div class="row">
                              
                                <div class="col-md-12 mb-4">
                                    <div class="form-group">
                                        <label for="" class="fs-16 text-secondary mb-2">Name
                                            <span class="text-primary">*</span>
                                        </label>
                                        <input type="text" class="form-control fs-14 text-gray br-10" name="name" :value="old('name')"
                                               id="name" placeholder="Enter first name"
                                               required>
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-md-12 mb-4">
                                    <div class="form-group">
                                        <label for="" class="fs-16 text-secondary mb-2">Email
                                            <span class="text-primary">*</span>
                                        </label>
                                        <input type="email" class="form-control fs-14 text-gray br-10" name="email"
                                               id="email" placeholder="Enter email address"
                                               required>
                                         <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-md-12 mb-4">
                                    <div class="form-group">
                                        <label for="" class="fs-16 text-secondary mb-2">Password
                                            <span class="text-danger">*</span></label>
                                        <input type="password" name="password" placeholder="Enter password"
                                               class="form-control fs-14 text-gray br-10" id="password"
                                               required onkeypress="return avoidSpace(event)">
                                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-md-12 mb-4">
                                    <div class="form-group">
                                        <label for="" class="fs-16 text-secondary mb-2">Confirm Password
                                            <span class="text-danger">*</span></label>
                                        <input type="password" name="password_confirmation"
                                               class="form-control fs-14 text-gray br-10" id="password_confirmation"
                                               placeholder="Confirm password"
                                               required onkeypress="return avoidSpace(event)">
                                               <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-4">
                                <div class="form-check">
                                    <input type="checkbox" name="privacyPolicy" class="form-check-input" id="remember">
                                    <label class="form-check-label" for="remember">
                                        I agree to the 
                                        <a href=""
                                           target="_blank">term condition</a>
                                        &
                                        <a href=""
                                           target="_blank">privacy_policy</a>.
                                    </label>
                                </div>
                            </div>
                           
                                
                           
                            <div class="col-12 d-grid my-4">
                                <button type="submit" class="btn btn-secondary" id="btnCandidateSave" data-loading-text="<span class='spinner-border spinner-border-sm'></span> {{__('messages.common.process')}}">
                                    Create Account</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- end candidate login section -->
    </div>
   
@endsection

{{--@section('page_scripts')--}}
{{--    <script>--}}
{{--        let registerSaveUrl = "{{ route('front.save.register') }}";--}}
{{--        let candidateLogInUrl = "{{ route('front.candidate.login') }}";--}}
{{--        let isGoogleReCaptchaEnabled = "{{ (boolean)$isGoogleReCaptchaEnabled }}";--}}
        
{{--    </script>--}}
{{--    @if($isGoogleReCaptchaEnabled)--}}
{{--        <script src='https://www.google.com/recaptcha/api.js'></script>--}}
{{--        <script src="{{asset('assets/js/front_register/google-recaptcha.js')}}"></script>--}}
{{--    @endif--}}
{{--@endsection--}}
