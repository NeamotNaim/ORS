<section class="find-job-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10">
                        <div class="find-job position-relative bg-white px-20">
                            <form action="http://127.0.0.1:8080/search-jobs" id="searchForm" method="get">
                                <div class="row align-items-center justify-content-around">
                                    <div class="col-lg-7 br-2 mb-lg-0 mb-4 ps-lg-4">
                                        <h3 class="fs-16 text-secondary mb-0">
                                           </h3>
                                        <input type="text" class="fs-14 text-gray mb-0" name="keywords" id="search-keywords" placeholder="Enter Job Title, Category, or Keyword to Search a Job" autocomplete="off">
                                        {{-- <div id="jobsSearchResults" class="position-absolute w100 job-search" style="display: none;"></div> --}}
                                    </div>
                                    {{-- <div class="col-lg-4 br-2 ps-lg-3 mb-lg-0 mb-4 ps-lg-4">
                                        <h3 class="fs-16 text-secondary mb-0">
                                            Location</h3>
                                        <input type="text" class="fs-14 text-gray mb-0 ui-autocomplete-input" name="location" id="search-location" placeholder="City or Postal Code" autocomplete="off">
                                    </div> --}}
                                    <div class="col-lg-5 text-center"> 
                                        <button class="btn btn-primary d-block pt-3 pb-3 find-jobs-btn" type="submit">
                                            Search Jobs 
                                        </button> 
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>