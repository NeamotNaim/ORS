<div class="aside-menu-container" id="sidebar">
                <!--begin::Brand-->
                <div class="aside-menu-container__aside-logo flex-column-auto">
                    <a data-turbo="false" href="http://127.0.0.1:8080/" data-toggle="tooltip" data-placement="right"
                        class="text-decoration-none sidebar-logo image image-mini" title="InfyOmLabs">
                        <img src="{{asset('logo.png')}}" alt="Logo" width="70px" height="30px"
                            class="img-fluid new-logo-image">
                        <span class="navbar-brand-name text-dark text-decoration-none logo ps-2">BSFMSTU</span>
                    </a>

                    <button type="button"
                        class="btn px-0 aside-menu-container__aside-menubar d-lg-block d-none sidebar-btn">
                        <svg class="svg-inline--fa fa-bars fs-1" aria-hidden="true" focusable="false" data-prefix="fas"
                            data-icon="bars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                            data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M0 96C0 78.33 14.33 64 32 64H416C433.7 64 448 78.33 448 96C448 113.7 433.7 128 416 128H32C14.33 128 0 113.7 0 96zM0 256C0 238.3 14.33 224 32 224H416C433.7 224 448 238.3 448 256C448 273.7 433.7 288 416 288H32C14.33 288 0 273.7 0 256zM416 448H32C14.33 448 0 433.7 0 416C0 398.3 14.33 384 32 384H416C433.7 384 448 398.3 448 416C448 433.7 433.7 448 416 448z">
                            </path>
                        </svg><!-- <i class="fa-solid fa-bars fs-1"></i> Font Awesome fontawesome.com -->
                    </button>

                </div>
                <!--end::Brand-->
                <form class="d-flex position-relative aside-menu-container__aside-search search-control py-3 mt-1">
                    <div class="position-relative w-100 sidebar-search-box">
                        <input class="form-control" type="text" placeholder="Search" id="menuSearch"
                            aria-label="Search" name="search">
                        <span
                            class="aside-menu-container__search-icon position-absolute d-flex align-items-center top-0 bottom-0">
                            <svg class="svg-inline--fa fa-magnifying-glass" aria-hidden="true" focusable="false"
                                data-prefix="fas" data-icon="magnifying-glass" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z">
                                </path>
                            </svg><!-- <i class="fa-solid fa-magnifying-glass"></i> Font Awesome fontawesome.com -->
                        </span>
                    </div>
                </form>
                <div class="no-record text-center d-none">No matching records found</div>
                <div class="sidebar-scrolling overflow-auto">
                    <ul class="aside-menu-container__aside-menu nav flex-column">
                        <li class="nav-item active">
                            <a class="nav-link d-flex align-items-center py-3" aria-current="page"
                                href="http://127.0.0.1:8080/admin/dashboard">
                                <span class="aside-menu-icon pe-3"><svg class="svg-inline--fa fa-tachograph-digital"
                                        aria-hidden="true" focusable="false" data-prefix="fas"
                                        data-icon="tachograph-digital" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M576 64H64C28.8 64 0 92.8 0 128v256c0 35.2 28.8 64 64 64h512c35.2 0 64-28.8 64-64V128C640 92.8 611.2 64 576 64zM64 296C64 291.6 67.63 288 72 288h16C92.38 288 96 291.6 96 296v16C96 316.4 92.38 320 88 320h-16C67.63 320 64 316.4 64 312V296zM336 384h-256C71.2 384 64 376.8 64 368C64 359.2 71.2 352 79.1 352h256c8.801 0 16 7.199 16 16C352 376.8 344.8 384 336 384zM128 312v-16C128 291.6 131.6 288 136 288h16C156.4 288 160 291.6 160 296v16C160 316.4 156.4 320 152 320h-16C131.6 320 128 316.4 128 312zM192 312v-16C192 291.6 195.6 288 200 288h16C220.4 288 224 291.6 224 296v16C224 316.4 220.4 320 216 320h-16C195.6 320 192 316.4 192 312zM256 312v-16C256 291.6 259.6 288 264 288h16C284.4 288 288 291.6 288 296v16C288 316.4 284.4 320 280 320h-16C259.6 320 256 316.4 256 312zM352 312C352 316.4 348.4 320 344 320h-16C323.6 320 320 316.4 320 312v-16C320 291.6 323.6 288 328 288h16C348.4 288 352 291.6 352 296V312zM352 237.7C352 247.9 344.4 256 334.9 256H81.07C71.6 256 64 247.9 64 237.7V146.3C64 136.1 71.6 128 81.07 128h253.9C344.4 128 352 136.1 352 146.3V237.7zM560 384h-160c-8.801 0-16-7.201-16-16c0-8.801 7.199-16 16-16h160c8.801 0 16 7.199 16 16C576 376.8 568.8 384 560 384z">
                                        </path>
                                    </svg>
                                    <!-- <i class="fas fa fa-digital-tachograph"></i> Font Awesome fontawesome.com --></span>
                                <span class="aside-menu-title">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link d-flex align-items-center py-3" aria-current="page"
                                href="http://127.0.0.1:8080/admin/employers">
                                <span class="aside-menu-icon pe-3"><svg class="svg-inline--fa fa-user-group"
                                        aria-hidden="true" focusable="false" data-prefix="fas"
                                        data-icon="user-group" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M224 256c70.7 0 128-57.31 128-128S294.7 0 224 0C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3c-95.73 0-173.3 77.6-173.3 173.3C0 496.5 15.52 512 34.66 512H413.3C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304zM479.1 320h-73.85C451.2 357.7 480 414.1 480 477.3C480 490.1 476.2 501.9 470 512h138C625.7 512 640 497.6 640 479.1C640 391.6 568.4 320 479.1 320zM432 256C493.9 256 544 205.9 544 144S493.9 32 432 32c-25.11 0-48.04 8.555-66.72 22.51C376.8 76.63 384 101.4 384 128c0 35.52-11.93 68.14-31.59 94.71C372.7 243.2 400.8 256 432 256z">
                                        </path>
                                    </svg>
                                    <!-- <i class="fas fa-user-friends"></i> Font Awesome fontawesome.com --></span>
                                <span class="aside-menu-title">Employers</span>
                                <span class="d-none">Employers</span>
                                <span class="d-none">Reported Employers</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link d-flex align-items-center py-3" aria-current="page"
                                href="http://127.0.0.1:8080/admin/admins">
                                <span class="aside-menu-icon pe-3"><svg class="svg-inline--fa fa-user-tie"
                                        aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-tie"
                                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                        data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M352 128C352 198.7 294.7 256 224 256C153.3 256 96 198.7 96 128C96 57.31 153.3 0 224 0C294.7 0 352 57.31 352 128zM209.1 359.2L176 304H272L238.9 359.2L272.2 483.1L311.7 321.9C388.9 333.9 448 400.7 448 481.3C448 498.2 434.2 512 417.3 512H30.72C13.75 512 0 498.2 0 481.3C0 400.7 59.09 333.9 136.3 321.9L175.8 483.1L209.1 359.2z">
                                        </path>
                                    </svg>
                                    <!-- <i class="fa-solid fa-user-tie"></i> Font Awesome fontawesome.com --></span>
                                <span class="aside-menu-title">Admins</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link d-flex align-items-center py-3" aria-current="page"
                                href="http://127.0.0.1:8080/admin/candidates">
                                <span class="aside-menu-icon pe-3"><svg class="svg-inline--fa fa-circle-user"
                                        aria-hidden="true" focusable="false" data-prefix="fas"
                                        data-icon="circle-user" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 128c39.77 0 72 32.24 72 72S295.8 272 256 272c-39.76 0-72-32.24-72-72S216.2 128 256 128zM256 448c-52.93 0-100.9-21.53-135.7-56.29C136.5 349.9 176.5 320 224 320h64c47.54 0 87.54 29.88 103.7 71.71C356.9 426.5 308.9 448 256 448z">
                                        </path>
                                    </svg>
                                    <!-- <i class="fas fa-user-circle"></i> Font Awesome fontawesome.com --></span>
                                <span class="aside-menu-title">Candidates</span>
                                <span class="d-none">Candidates</span>
                                <span class="d-none">Degree Levels</span>
                                <span class="d-none">Reported Candidates</span>
                                <span class="d-none">All Resumes</span>
                                <span class="d-none">Selected Candidates</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link d-flex align-items-center py-3" aria-current="page"
                                href="http://127.0.0.1:8080/admin/jobs">
                                <span class="aside-menu-icon pe-3"><svg class="svg-inline--fa fa-briefcase"
                                        aria-hidden="true" focusable="false" data-prefix="fas" data-icon="briefcase"
                                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                        data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M320 336c0 8.844-7.156 16-16 16h-96C199.2 352 192 344.8 192 336V288H0v144C0 457.6 22.41 480 48 480h416c25.59 0 48-22.41 48-48V288h-192V336zM464 96H384V48C384 22.41 361.6 0 336 0h-160C150.4 0 128 22.41 128 48V96H48C22.41 96 0 118.4 0 144V256h512V144C512 118.4 489.6 96 464 96zM336 96h-160V48h160V96z">
                                        </path>
                                    </svg><!-- <i class="fas fa-briefcase"></i> Font Awesome fontawesome.com --></span>
                                <span class="aside-menu-title">Jobs</span>
                                <span class="d-none">Jobs</span>
                                <span class="d-none">Job Categories</span>
                                <span class="d-none">Job Types</span>
                                <span class="d-none">Job Tags</span>
                                <span class="d-none">Job Shifts</span>
                                <span class="d-none">Reported Jobs</span>
                                <span class="d-none">Job Notifications</span>
                                <span class="d-none">Expired Jobs</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link d-flex align-items-center py-3" aria-current="page"
                                href="http://127.0.0.1:8080/admin/post-categories">
                                <span class="aside-menu-icon pe-3"><svg class="svg-inline--fa fa-rectangle-list"
                                        aria-hidden="true" focusable="false" data-prefix="far"
                                        data-icon="rectangle-list" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 576 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M128 192C110.3 192 96 177.7 96 160C96 142.3 110.3 128 128 128C145.7 128 160 142.3 160 160C160 177.7 145.7 192 128 192zM200 160C200 146.7 210.7 136 224 136H448C461.3 136 472 146.7 472 160C472 173.3 461.3 184 448 184H224C210.7 184 200 173.3 200 160zM200 256C200 242.7 210.7 232 224 232H448C461.3 232 472 242.7 472 256C472 269.3 461.3 280 448 280H224C210.7 280 200 269.3 200 256zM200 352C200 338.7 210.7 328 224 328H448C461.3 328 472 338.7 472 352C472 365.3 461.3 376 448 376H224C210.7 376 200 365.3 200 352zM128 224C145.7 224 160 238.3 160 256C160 273.7 145.7 288 128 288C110.3 288 96 273.7 96 256C96 238.3 110.3 224 128 224zM128 384C110.3 384 96 369.7 96 352C96 334.3 110.3 320 128 320C145.7 320 160 334.3 160 352C160 369.7 145.7 384 128 384zM0 96C0 60.65 28.65 32 64 32H512C547.3 32 576 60.65 576 96V416C576 451.3 547.3 480 512 480H64C28.65 480 0 451.3 0 416V96zM48 96V416C48 424.8 55.16 432 64 432H512C520.8 432 528 424.8 528 416V96C528 87.16 520.8 80 512 80H64C55.16 80 48 87.16 48 96z">
                                        </path>
                                    </svg><!-- <i class="far fa-list-alt"></i> Font Awesome fontawesome.com --></span>
                                <span class="aside-menu-title">Blogs</span>
                                <span class="d-none">Post Categories</span>
                                <span class="d-none">Posts</span>
                                <span class="d-none">Post Comments</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link d-flex align-items-center py-3" aria-current="page"
                                href="http://127.0.0.1:8080/admin/plans">
                                <span class="aside-menu-icon pe-3"><svg class="svg-inline--fa fa-bandcamp"
                                        aria-hidden="true" focusable="false" data-prefix="fab" data-icon="bandcamp"
                                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                        data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M256 8C119 8 8 119 8 256S119 504 256 504 504 393 504 256 393 8 256 8zm48.2 326.1h-181L207.9 178h181z">
                                        </path>
                                    </svg><!-- <i class="fab fa-bandcamp"></i> Font Awesome fontawesome.com --></span>
                                <span class="aside-menu-title">Subscriptions</span>
                                <span class="d-none">Post Comments</span>
                                <span class="d-none">Subscription Plans</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link d-flex align-items-center py-3" aria-current="page"
                                href="http://127.0.0.1:8080/admin/subscribers">
                                <span class="aside-menu-icon pe-3"><svg class="svg-inline--fa fa-bell"
                                        aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bell"
                                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                        data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M256 32V51.2C329 66.03 384 130.6 384 208V226.8C384 273.9 401.3 319.2 432.5 354.4L439.9 362.7C448.3 372.2 450.4 385.6 445.2 397.1C440 408.6 428.6 416 416 416H32C19.4 416 7.971 408.6 2.809 397.1C-2.353 385.6-.2883 372.2 8.084 362.7L15.5 354.4C46.74 319.2 64 273.9 64 226.8V208C64 130.6 118.1 66.03 192 51.2V32C192 14.33 206.3 0 224 0C241.7 0 256 14.33 256 32H256zM224 512C207 512 190.7 505.3 178.7 493.3C166.7 481.3 160 464.1 160 448H288C288 464.1 281.3 481.3 269.3 493.3C257.3 505.3 240.1 512 224 512z">
                                        </path>
                                    </svg><!-- <i class="fas fa-bell"></i> Font Awesome fontawesome.com --></span>
                                <span class="aside-menu-title">Subscribers</span>
                                <span class="d-none">Subscribers</span>
                                <span class="d-none">Transactions</span>

                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link d-flex align-items-center py-3" aria-current="page"
                                href="http://127.0.0.1:8080/admin/countries">
                                <span class="aside-menu-icon pe-3"><svg class="svg-inline--fa fa-earth-americas"
                                        aria-hidden="true" focusable="false" data-prefix="fas"
                                        data-icon="earth-americas" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM57.71 192.1L67.07 209.4C75.36 223.9 88.99 234.6 105.1 239.2L162.1 255.7C180.2 260.6 192 276.3 192 294.2V334.1C192 345.1 198.2 355.1 208 359.1C217.8 364.9 224 374.9 224 385.9V424.9C224 440.5 238.9 451.7 253.9 447.4C270.1 442.8 282.5 429.1 286.6 413.7L289.4 402.5C293.6 385.6 304.6 371.1 319.7 362.4L327.8 357.8C342.8 349.3 352 333.4 352 316.1V307.9C352 295.1 346.9 282.9 337.9 273.9L334.1 270.1C325.1 261.1 312.8 255.1 300.1 255.1H256.1C245.9 255.1 234.9 253.1 225.2 247.6L190.7 227.8C186.4 225.4 183.1 221.4 181.6 216.7C178.4 207.1 182.7 196.7 191.7 192.1L197.7 189.2C204.3 185.9 211.9 185.3 218.1 187.7L242.2 195.4C250.3 198.1 259.3 195 264.1 187.9C268.8 180.8 268.3 171.5 262.9 165L249.3 148.8C239.3 136.8 239.4 119.3 249.6 107.5L265.3 89.12C274.1 78.85 275.5 64.16 268.8 52.42L266.4 48.26C262.1 48.09 259.5 48 256 48C163.1 48 84.4 108.9 57.71 192.1L57.71 192.1zM437.6 154.5L412 164.8C396.3 171.1 388.2 188.5 393.5 204.6L410.4 255.3C413.9 265.7 422.4 273.6 433 276.3L462.2 283.5C463.4 274.5 464 265.3 464 256C464 219.2 454.4 184.6 437.6 154.5H437.6z">
                                        </path>
                                    </svg>
                                    <!-- <i class="fas fa-globe-americas"></i> Font Awesome fontawesome.com --></span>
                                <span class="aside-menu-title">Countries</span>
                                <span class="d-none">Countries</span>
                                <span class="d-none">States</span>
                                <span class="d-none">Cities</span>

                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link d-flex align-items-center py-3" aria-current="page"
                                href="http://127.0.0.1:8080/admin/marital-status">
                                <span class="aside-menu-icon pe-3"><svg class="svg-inline--fa fa-life-ring"
                                        aria-hidden="true" focusable="false" data-prefix="fas" data-icon="life-ring"
                                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                        data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M470.6 425.4C483.1 437.9 483.1 458.1 470.6 470.6C458.1 483.1 437.9 483.1 425.4 470.6L412.1 458.2C369.6 491.9 315.2 512 255.1 512C196.8 512 142.4 491.9 99.02 458.2L86.63 470.6C74.13 483.1 53.87 483.1 41.37 470.6C28.88 458.1 28.88 437.9 41.37 425.4L53.76 412.1C20.07 369.6 0 315.2 0 255.1C0 196.8 20.07 142.4 53.76 99.02L41.37 86.63C28.88 74.13 28.88 53.87 41.37 41.37C53.87 28.88 74.13 28.88 86.63 41.37L99.02 53.76C142.4 20.07 196.8 0 255.1 0C315.2 0 369.6 20.07 412.1 53.76L425.4 41.37C437.9 28.88 458.1 28.88 470.6 41.37C483.1 53.87 483.1 74.13 470.6 86.63L458.2 99.02C491.9 142.4 512 196.8 512 255.1C512 315.2 491.9 369.6 458.2 412.1L470.6 425.4zM309.3 354.5C293.4 363.1 275.3 368 255.1 368C236.7 368 218.6 363.1 202.7 354.5L144.8 412.5C176.1 434.9 214.5 448 255.1 448C297.5 448 335.9 434.9 367.2 412.5L309.3 354.5zM448 255.1C448 214.5 434.9 176.1 412.5 144.8L354.5 202.7C363.1 218.6 368 236.7 368 256C368 275.3 363.1 293.4 354.5 309.3L412.5 367.2C434.9 335.9 448 297.5 448 256V255.1zM255.1 63.1C214.5 63.1 176.1 77.14 144.8 99.5L202.7 157.5C218.6 148.9 236.7 143.1 255.1 143.1C275.3 143.1 293.4 148.9 309.3 157.5L367.2 99.5C335.9 77.14 297.5 63.1 256 63.1H255.1zM157.5 309.3C148.9 293.4 143.1 275.3 143.1 255.1C143.1 236.7 148.9 218.6 157.5 202.7L99.5 144.8C77.14 176.1 63.1 214.5 63.1 255.1C63.1 297.5 77.14 335.9 99.5 367.2L157.5 309.3zM255.1 207.1C229.5 207.1 207.1 229.5 207.1 255.1C207.1 282.5 229.5 303.1 255.1 303.1C282.5 303.1 304 282.5 304 255.1C304 229.5 282.5 207.1 255.1 207.1z">
                                        </path>
                                    </svg><!-- <i class="fas fa-life-ring"></i> Font Awesome fontawesome.com --></span>
                                <span class="aside-menu-title">General</span>
                                <span class="d-none">Marital Status</span>
                                <span class="d-none">Skills</span>
                                <span class="d-none">Salary Periods</span>
                                <span class="d-none">Industries</span>
                                <span class="d-none">Company Sizes</span>
                                <span class="d-none">Functional Areas</span>
                                <span class="d-none">Career Levels</span>
                                <span class="d-none">Salary Currencies</span>
                                <span class="d-none">Ownership Types</span>
                                <span class="d-none">Languages</span>

                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link d-flex align-items-center py-3" aria-current="page"
                                href="http://127.0.0.1:8080/admin/noticeboards">
                                <span class="aside-menu-icon pe-3"><svg class="svg-inline--fa fa-note-sticky"
                                        aria-hidden="true" focusable="false" data-prefix="fas"
                                        data-icon="note-sticky" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 448 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M400 32h-352C21.49 32 0 53.49 0 80v352C0 458.5 21.49 480 48 480h245.5c16.97 0 33.25-6.744 45.26-18.75l90.51-90.51C441.3 358.7 448 342.5 448 325.5V80C448 53.49 426.5 32 400 32zM64 96h320l-.001 224H320c-17.67 0-32 14.33-32 32v64H64V96z">
                                        </path>
                                    </svg>
                                    <!-- <i class="fas fa-sticky-note"></i> Font Awesome fontawesome.com --></span>
                                <span class="aside-menu-title">CMS</span>
                                <span class="d-none">Noticeboards</span>
                                <span class="d-none">FAQs</span>
                                <span class="d-none">Inquiries</span>
                                <span class="d-none">Notification Settings</span>
                                <span class="d-none">Privacy Policy</span>
                                <span class="d-none">Front Settings</span>
                                <span class="d-none">Translation Manager</span>
                                <span class="d-none">Email Templates</span>
                                <span class="d-none">Settings</span>

                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link d-flex align-items-center py-3" aria-current="page"
                                href="http://127.0.0.1:8080/admin/testimonials">
                                <span class="aside-menu-icon pe-3"><svg class="svg-inline--fa fa-note-sticky"
                                        aria-hidden="true" focusable="false" data-prefix="fas"
                                        data-icon="note-sticky" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 448 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M400 32h-352C21.49 32 0 53.49 0 80v352C0 458.5 21.49 480 48 480h245.5c16.97 0 33.25-6.744 45.26-18.75l90.51-90.51C441.3 358.7 448 342.5 448 325.5V80C448 53.49 426.5 32 400 32zM64 96h320l-.001 224H320c-17.67 0-32 14.33-32 32v64H64V96z">
                                        </path>
                                    </svg>
                                    <!-- <i class="fas fa-sticky-note"></i> Font Awesome fontawesome.com --></span>
                                <span class="aside-menu-title">CMS Sliders</span>
                                <span class="d-none">Testimonials</span>
                                <span class="d-none">Branding Sliders</span>
                                <span class="d-none">Header Sliders</span>
                                <span class="d-none">Image Sliders</span>

                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link d-flex align-items-center py-3" aria-current="page"
                                href="http://127.0.0.1:8080/admin/cms-services">
                                <span class="aside-menu-icon pe-3"><svg class="svg-inline--fa fa-note-sticky"
                                        aria-hidden="true" focusable="false" data-prefix="fas"
                                        data-icon="note-sticky" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 448 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M400 32h-352C21.49 32 0 53.49 0 80v352C0 458.5 21.49 480 48 480h245.5c16.97 0 33.25-6.744 45.26-18.75l90.51-90.51C441.3 358.7 448 342.5 448 325.5V80C448 53.49 426.5 32 400 32zM64 96h320l-.001 224H320c-17.67 0-32 14.33-32 32v64H64V96z">
                                        </path>
                                    </svg>
                                    <!-- <i class="fas fa-sticky-note"></i> Font Awesome fontawesome.com --></span>
                                <span class="aside-menu-title">Front CMS</span>
                                <span class="d-none">CMS Services</span>
                                <span class="d-none">About Us Services</span>

                            </a>
                        </li>
                    </ul>
                </div>
            </div>