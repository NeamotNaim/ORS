@extends('frontend.layouts.master')
    <body data-new-gr-c-s-check-loaded="14.1093.0" data-gr-ext-installed="">
    <span class="header-padding"></span>
    
@section('content')
       <!-- start header section -->
          @include('frontend/layouts/header')
       <!-- end header section -->

        <div class="home-page">
        <!-- start hero section -->
           @include('frontend/layouts/hero_section')
        <!-- end hero section -->

        <!--start find-job section-->
           @include('frontend/layouts/find_job')
        <!--end find-job section-->

        <!-- start-companies-logo section -->
                <!-- end-companies-logo section -->

        <!-- start-slider-test-img section -->
                <!-- end-slider-test-img section -->

        <!-- start-popular-job-categories-section -->
          @include('frontend/layouts/job_categories')
                <!-- start-popular-job-categories-section -->

        <!-- start latest-job-section -->
                <!-- end latest-job-section -->

        <!-- start featured-job-section -->
                <!-- end featured-job-section -->

        <!-- start notice-section -->
                <!-- end notice-section -->

        <!-- start testimonial-section -->
                <!-- end testimonial-section -->

        <!-- start blog-section -->
          @include('frontend/layouts/blog_section')
                <!-- end blog-section -->

        <!-- start-about-section -->
         @include('frontend/layouts/about_section')
        <!-- end-about-section -->
      <!-- Footer Start -->
            <!-- start footer section -->
          @include('frontend/layouts/footer')
      <!-- end footer section -->
            <!-- Footer End -->
        @endsection
    </div>

    
    
    