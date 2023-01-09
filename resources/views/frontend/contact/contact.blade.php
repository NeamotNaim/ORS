@extends('frontend.layouts.master')
@section('content')
@include('frontend/layouts/header')
    <div class="contactus-page">
        <section class="hero-section position-relative bg-light py-40">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6  text-center mb-lg-0 mb-md-5 mb-sm-4 ">
                        <div class="hero-content">
                            <h1 class=" text-secondary mb-3">
                                Contact us
                            </h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb  justify-content-center mb-0">
                                    <li class="breadcrumb-item "><a href="{{ route('contact') }}"
                                                                    class="fs-18 text-gray">Home</a>
                                    </li>
                                    <li class="breadcrumb-item text-primary fs-18"
                                        aria-current="page">Contact us</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-us-section py-60 mb-5">
            <div class="container">
                <div class="contact-us bg-gray ">
                    <div class="row justify-content-center">
                        {{-- <div class="col-lg-4 d-lg-block d-none">
                            <div class="contact-img ms-5 ps-xl-5 mt-5">
                                <img src="{{asset('front_web/images/contact-page.png')}}">
                            </div>
                        </div> --}}
                        <div class="col-lg-8">
                            <form id="formContact" name="frm-contact" class="py-40 pe-lg-5 px-4" method="post"
                               action=""  >
                                @csrf
                                <div class="row">
                                    <div class="form-group col-12">
                                        <div class="response"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="fs-16 text-secondary mb-2">
                                                Your Name:
                                                <span class="text-primary">*</span>
                                            </label>
                                            <input type="text" class="form-control fs-14 text-gray br-10" name="name"
                                                   placeholder="Your name"
                                                   value="{{ old('name') }}" autocomplete="off" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" class="fs-16 text-secondary mb-2">
                                                Your Email:
                                                <span class="text-primary">*</span>
                                            </label>
                                            <input type="email" class="form-control fs-14 text-gray br-10" name="email"
                                                   placeholder="Your Email"
                                                   value="{{ old('email') }}" autocomplete="off" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="fs-16 text-secondary mb-2">
                                                Subject:
                                                <span class="text-primary">*</span>
                                            </label>
                                            <input class="form-control fs-14 text-gray br-10" type="text" name="subject"
                                                   value="{{ old('subject') }}"
                                                   placeholder="Subject" autocomplete="off"
                                                   required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="fs-16 text-secondary mb-2">
                                                Your Phone No :</label><br>
                                            <input class="form-control fs-14 text-gray br-10 d-block" type="tel" name="phone_no"
                                                   value="{{ old('phone_no') }}"
                                                   placeholder=" Your Phone No"
                                                   autocomplete="off"
                                                   id='phoneNumber'>
                                            <input type="hidden" name="region_code" id="prefix_code">
                                            <p id="valid-msg" class="text-success d-none fw-400 fs-small mt-2">Valid
                                                Number</p>
                                            <p id="error-msg" class="text-danger d-none fw-400 fs-small mt-2"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="fs-16 text-secondary mb-2">
                                                Your Message:
                                                <span class="text-primary">*</span>
                                            </label>
                                            <textarea class="form-control fs-14 text-gray br-10" rows="5" name="message"
                                                      placeholder="Type your message here"
                                                      required>{{ trim(old('message')) }}</textarea>
                                        </div>
                                    </div>
                                  
                                    
                                   
                                </div>
                                <div class="row justify-content-center mt-4">
                                    <div class="col-sm-6 text-center">
                                        <button class="btn btn-primary" type="submit">
                                           Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
<script>
    var phoneNo = "{{ old('region_code').old('phone_no') }}";
</script>
{{--@section('page_scripts')--}}
{{--    <script>--}}
{{--        let isEdit = false--}}
{{--        var phoneNo = "{{ old('region_code').old('phone') }}"--}}
{{--        let utilsScript = "{{asset('assets/js/inttel/js/utils.min.js')}}"--}}
{{--    </script>--}}

{{--    <script src='https://www.google.com/rec aptcha/api.js'></script>--}}
{{--@endsection--}}
