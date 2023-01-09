@extends('frontend.layouts.master')

{{--@section('page_css')--}}
{{--    <link rel="stylesheet" href="{{ asset('front_web/scss/about-us.css') }}">--}}
{{--@endsection--}}
@section('content')
@include('frontend/layouts/header')
    <div class="About Us-page">
        <!-- start hero section -->
        <section class="hero-section position-relative bg-light py-40">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6  text-center mb-lg-0 mb-md-5 mb-sm-4 ">
                        <div class="hero-content">
                            <h1 class=" text-secondary mb-3">
                                About Us
                            </h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb  justify-content-center mb-0">
                                    <li class="breadcrumb-item "><a href="{{ "route('front.home')" }}" class="fs-18 text-gray">Home</a>
                                    </li>
                                    <li class="breadcrumb-item text-primary fs-18" aria-current="page">About us</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end hero section -->

        <!-- start-about-section -->
        <div class="about-section py-60">
            <div class="container">
                <div class="about-infyjob mb-40">
                    <h5 class="fs-18 text-secondary mb-3">About us</h5>
                    <p class="fs-16 text-gray">
                        Bangamata as named by the nation of Bangalees  to Sheikh Fojilatunnesa Mujib wife of Bangabandgu Sheikh Mujibar Rahman, Father of the nation of Bangladesh was born on 08 August 1930 in the Village Tungipara of Gopalgong District. She has played a vital role in providing inspiration, enthusiasm and courage in all activities of Bangabandhu during his life time. She has contributed in every step of the independence of Bangladesh. She sent her two brave sons in the liberation war for the independence of the motherland. She sacrificed her life along with Bangabandhu and other family members on the black day of the history of Bangladesh, 15 August 1975.
                    </p>
                </div>
            </div>
        </div>
        <!-- end-about-section -->

        <!-- start-how-it-works section -->
        <section class="how-it-works-section bg-gray py-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-heading mx-xxl-0 mx-xl-3 mx-md-2 text-center">
                            <h2 class="text-secondary bg-gray">
                               How to Apply ?</h2>
                            <div class="text-center text-gray">Process to Apply in BSFMSTU</div>
                        </div>
                    </div>
                </div>
                <div class="work-process">
                    <div class="row justify-content-center">
                        <div class="col-xl-10">
                            <div class="row justify-content-center position-relative">
                                <div class="col-lg-4 text-center">
                                    <div class="img bg-white mx-auto d-flex justify-content-center align-items-center mb-lg-4 mb-3">
                                        <img src="front_web/images/register.png" >
                                    </div>
                                    <div class="card-body">
                                        <h6 class="fs-18 text-secondary">
                                            Step 1</h6>
                                        <h5 class="fs-18 text-secondary">
                                            Register
                                            </h5>
                                        <p class="fs-14 text-gray">
                                        Start by creating an account on our awesome platform
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-4 text-center">
                                    <div class="img bg-white mx-auto d-flex justify-content-center align-items-center mb-lg-4 mb-3">
                                        <img src="front_web/images/resume.png" >
                                    </div>
                                    <div class="card-body">
                                        <h6 class="fs-18 text-secondary">
                                            Step 2</h6>
                                        <h5 class="fs-18 text-secondary">
                                            Submit Resume
                                           </h5>
                                        <p class="fs-14 text-gray">
                                            Fill out our forms and submit your resume right away
                                            </p>
                                    </div>
                                </div>
                                <div class="col-lg-4 text-center">
                                    <div class="img bg-white mx-auto d-flex justify-content-center align-items-center mb-lg-4 mb-3">
                                        <img src="front_web/images/working.png" >
                                    </div>
                                    <div class="card-body">
                                        <h6 class="fs-18 text-secondary">
                                            Step 3</h6>
                                        <h5 class="fs-18 text-secondary">
                                            Wait for Interview
                                           </h5>
                                        <p class="fs-14 text-gray">
                                            Wait for a interview call to start your new career 
                                            </p>
                                    </div>
                                </div>
                                <div class="arrow1 position-absolute d-lg-block d-none">
                                    <img src="{{asset('front_web/images/arrow-1.png')}}">
                                </div>
                                <div class="arrow2 position-absolute d-lg-block d-none">
                                    <img src="{{asset('front_web/images/arrow-2.png')}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end-how-it-works section -->

        <!-- start question-section -->
        <section class="question-section py-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-8">
                        <div class="section-heading mx-xxl-5 text-center">
                            <h2 class="text-secondary bg-white">
                                Frequently Asked Questions
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="questions">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            
                                <div class="accordion" id="accordionExample">
                                    
                                        <div class="accordion-item br-10">
                                            <h2 class="accordion-header" >
                                                <button class="accordion-button collapsed fs-18  p-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-" aria-expanded="false" aria-controls="collapse-"> 
                                                </button>
                                            </h2>
                                            <div  class="accordion-collapse collapse " aria-labelledby="heading-" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                  
                                                </div>
                                            </div>
                                        </div>
                                 
                                </div>
                            
                                <div>
                                    <h5 class="text-center">fag not available.</h5>
                                </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end question-section -->
    </div>
@endsection
