@extends('frontend.layouts.master')
@section('content')
@include('frontend/layouts/header')
<style>
    .card{
        height: auto !important;
    }
</style>
    <div class="Find Jobs-page">
        <section class="hero-section position-relative bg-light py-40">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6  text-center mb-lg-0 mb-md-5 mb-sm-4 ">
                        <div class="hero-content">
                            <h1 class=" text-secondary mb-3">
                                Find Jobs                            </h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb  justify-content-center mb-0">
                                    <li class="breadcrumb-item "><a href="/" class="fs-18 text-gray">Home</a>
                                    </li>
                                    <li class="breadcrumb-item text-primary fs-18" aria-current="page">Jobs</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="latest-job-section py-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 ">
                       <div class="job-listing-left latest-job-left br-10 px-40 bg-gray">
                        <div class="input-group job-listing-job-search">
                            <input type="text" class="form-control fs-14 text-gray br-10" placeholder="Search" value="">
                            <span class="input-group-btn mt-2 ">
                            <button type="button" class="btn btn-primary btn-blue btn-flat job-search-button">
                                <i class="fa fa-search"></i>
                            </button>
                            </span>
                        </div>

                        
                            <hr>
                        <p class="job-listing-heading">
                            <span class="job-listing-heading-text"><i class="fa fa-filter"></i> Departments</span>
                            <span class="job-listing-heading-line"></span>
                        </p>
                        <select class="form-control select2 job-listing-filters-dd job-filter-dd job-filter" data-id="eTNISlBVSGZGZXlUV1BrSGJsUnNTZz09">
                            <option value="">None</option>
                            <option value="">None</option>
                            <option value="">None</option>
                            <option value="">None</option>
                        </select>
                        {{-- <ul class="job-listing-filters-list">
                            
    
 
                                <li>
                                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="department-check form-check-input" value="eTNISlBVSGZGZXlUV1BrSGJsUnNTZz09" style="position: absolute;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                Finance      </li></div>
                                 <div class="form-group form-check">
                                <li>
                                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="department-check form-check-input" value="YnNVSEl1R3BENHhuaW5hZ0psK211UT09" style="position: absolute; "><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                Accounting      </li></div>
                                <li>
                                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="department-check" value="bUdORE9XdklZNVJHY1d1SUkvRkFUZz09" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                Administration      </li>
                                <li>
                                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="department-check" value="SjJWdTVCRG1ZTDByL1o2WjBuQ0c0UT09" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                Marketing      </li>
                                <li>
                                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="department-check" value="N1FLWC9QMDh4TWFPOHhDU09peWlrZz09" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                Human Resource      </li>
                                <li>
                                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="department-check" value="WkF4NVVqSnVJYVBJWk44TjE5S0NDdz09" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                Information Techn...      </li>
                            </ul> --}}
                        

                            <input type="hidden" id="job_filters_sel" value="{}">
                            <hr>
                        
                            <p class="job-listing-heading">
                            <span class="job-listing-heading-text">
                            <i class="fa fa-filter"></i> Job Type    </span>
                            <span class="job-listing-heading-line"></span>
                        </p>
                        <select class="form-control select2 job-listing-filters-dd job-filter-dd job-filter" data-id="eTNISlBVSGZGZXlUV1BrSGJsUnNTZz09">
                            <option value="">None</option>
                            <option value="">Administration</option>
                            <option value="">Academic</option>
                            </select>

                                <hr>
                        <p class="job-listing-heading">
                            <span class="job-listing-heading-text">
                            <i class="fa fa-filter"></i> Time & Date    </span>
                            <span class="job-listing-heading-line"></span>
                        </p>
                        <select class="form-control select2 job-listing-filters-dd job-filter-dd job-filter" data-id="YnNVSEl1R3BENHhuaW5hZ0psK211UT09">
                            <option value="">None</option>
                            <option value="">This month</option>
                            <option value="">3 month ago</option>
                            <option value="">6 month ago</option>
                            <option value="">1 Year ago</option>
                            </select>

                            
                        </div>
                    </div>
         <div class="col-lg-8">
            <div class="job-card">
            <div class="col-12 px-xl-3 mb-40">
            <div class="card py-30 border-1 ">
                <div class="row position-relative">
                    <div class="col-xl-1 col-md-2 col-3 mb-md-0 mb-3">
                        <img src="front_web/images/employer-image.png" class="card-img" alt="">
                    </div>
                    <div class="col-xl-10 col-md-9 col-sm-8 col-12">
                        <div class="card-body p-0 ps-xl-3">
                            <a href="http://127.0.0.1:8080/job-details/sO5ougNqwc56" class="text-secondary primary-link-hover">
                                <h5 class="card-title fs-18 mb-0 d-inline-block">
                                    Baler job
                                </h5>
                            </a>
                            <div class="col-xl-12">
                                <div class="card-desc d-flex flex-wrap mt-2 ">
                                    <div class="desc d-flex  me-4">
                                        <svg class="svg-inline--fa fa-briefcase text-gray me-3 fs-18" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="briefcase" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M320 336c0 8.844-7.156 16-16 16h-96C199.2 352 192 344.8 192 336V288H0v144C0 457.6 22.41 480 48 480h416c25.59 0 48-22.41 48-48V288h-192V336zM464 96H384V48C384 22.41 361.6 0 336 0h-160C150.4 0 128 22.41 128 48V96H48C22.41 96 0 118.4 0 144V256h512V144C512 118.4 489.6 96 464 96zM336 96h-160V48h160V96z"></path></svg><!-- <i class="fa-solid fa-briefcase text-gray me-3 fs-18"></i> Font Awesome fontawesome.com -->
                                        <p class="fs-14 text-gray mb-2">
                                            Accountants</p>
                                    </div>
                                    <div class="desc d-flex me-4">
                                        <svg class="svg-inline--fa fa-location-dot text-gray me-3 fs-18" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="location-dot" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM192 256C227.3 256 256 227.3 256 192C256 156.7 227.3 128 192 128C156.7 128 128 156.7 128 192C128 227.3 156.7 256 192 256z"></path></svg><!-- <i class="fa-solid fa-location-dot text-gray me-3 fs-18"></i> Font Awesome fontawesome.com -->
                                        <p class="fs-14 text-gray mb-2">
                                            Delvine, Delvine, Albania</p>
                                    </div>
                                    <div class="desc d-flex me-4">
                                        <svg class="svg-inline--fa fa-clock text-gray me-3 fs-18" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="clock" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512zM232 256C232 264 236 271.5 242.7 275.1L338.7 339.1C349.7 347.3 364.6 344.3 371.1 333.3C379.3 322.3 376.3 307.4 365.3 300L280 243.2V120C280 106.7 269.3 96 255.1 96C242.7 96 231.1 106.7 231.1 120L232 256z"></path></svg><!-- <i class="fa-solid fa-clock text-gray me-3 fs-18"></i> Font Awesome fontawesome.com -->
                                        <p class="fs-14 text-gray mb-2">
                                            1 hour ago</p>
                                    </div>
                                    <div class="desc d-flex">
                                        <span class="text-gray">
                                            ֏&nbsp;</span>
                                        <p class="fs-14 text-gray mb-2">
                                            Expre on : 29-4-2023</p>
                                    </div>
                                </div>
                            </div>
                            <div class="desc d-flex flex-wrap">
                                                                    <p class="text text-primary fs-14 mb-0 me-3">
                                        Bsc in CSE Eng. required</p>
                                                                                                </div>
                        </div>
                    </div>
                                    </div>
            </div>
            </div>
        </div>
                <nav aria-label="Page navigation example">
</nav>

    </div>

<!-- Livewire Component wire-end:KnvoMaVHT9O5gU9yz9Nb -->                        </div>
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
