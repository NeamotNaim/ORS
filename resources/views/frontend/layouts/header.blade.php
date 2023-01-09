<style>
    .header_logo{
       width: 60px !important;
       height: 60px !important;
       border-radius: 6px !important;
    }
</style>
<header class="bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-1 col-4">
                {{-- "{{asset('style/')}}" --}}
                <a href="http://127.0.0.1:8080/" class="header-logo" >
                    <img src="{{asset('style/logo.png')}}" alt="Jobs" class="img-fluid header_logo"  >
                </a>
            </div>
            <div class="col-lg-11 col-8">
                <nav class="navbar navbar-expand-lg navbar-light justify-content-end py-0">
                    <button class="navbar-toggler border-0 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav align-items-center py-2 py-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{route('jobs')}}">Jobs</a>
                            </li>
                            
                                                        <li class="nav-item">
                                <a class="nav-link " href="{{route('about')}}">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{route('contact')}}">Contact Us</a>
                            </li>
                            
                            
                        </ul>
                                                    <div class="text-lg-end header-btn-grp ms-xxl-5 ms-lg-3">
                                <ul class="navbar-nav align-items-center py-2 py-lg-0">
                                    <li class="nav-item">
                                        <a href="http://127.0.0.1:8080/users/candidate-login" class="nav-link btn btn-secondary me-xxl-3 me-2 mb-3 mb-lg-0 nav-link">Login</a>
                                        
                                    </li>
                                    <li class="nav-item">
                                        <a href="http://127.0.0.1:8080/candidate-register" class="btn btn-primary mb-3 mb-lg-0">Register</a>
                                        
                                    </li>
                                </ul>
                            </div>
                                            </div>
                </nav>
            </div>
        </div>
    </div>
</header>