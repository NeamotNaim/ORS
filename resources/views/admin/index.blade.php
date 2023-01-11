@extends('admin/layouts/dashboard')
@section('content')
<div class="content d-flex flex-column flex-column-fluid pt-7">
            <div class="d-flex flex-wrap flex-column-fluid">
              <div class="container-fluid">
                <div class="d-flex flex-column">
                  <div class="row">
                    <div class="col-12 mb-4">
                      <div class="row">
                        <div class="col-xxl-3 col-xl-4 col-sm-6 widget">
                          <div
                            class="bg-primary shadow-md rounded-10 p-xxl-10 px-5 py-10 d-flex align-items-center justify-content-between my-sm-3 my-2"
                          >
                            <div
                              class="bg-cyan-300 widget-icon rounded-10 me-2 d-flex align-items-center justify-content-center"
                            >
                              <svg
                                class="svg-inline--fa fa-users fs-1-xl text-white"
                                aria-hidden="true"
                                focusable="false"
                                data-prefix="fas"
                                data-icon="users"
                                role="img"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 640 512"
                                data-fa-i2svg=""
                              >
                                <path
                                  fill="currentColor"
                                  d="M319.9 320c57.41 0 103.1-46.56 103.1-104c0-57.44-46.54-104-103.1-104c-57.41 0-103.1 46.56-103.1 104C215.9 273.4 262.5 320 319.9 320zM369.9 352H270.1C191.6 352 128 411.7 128 485.3C128 500.1 140.7 512 156.4 512h327.2C499.3 512 512 500.1 512 485.3C512 411.7 448.4 352 369.9 352zM512 160c44.18 0 80-35.82 80-80S556.2 0 512 0c-44.18 0-80 35.82-80 80S467.8 160 512 160zM183.9 216c0-5.449 .9824-10.63 1.609-15.91C174.6 194.1 162.6 192 149.9 192H88.08C39.44 192 0 233.8 0 285.3C0 295.6 7.887 304 17.62 304h199.5C196.7 280.2 183.9 249.7 183.9 216zM128 160c44.18 0 80-35.82 80-80S172.2 0 128 0C83.82 0 48 35.82 48 80S83.82 160 128 160zM551.9 192h-61.84c-12.8 0-24.88 3.037-35.86 8.24C454.8 205.5 455.8 210.6 455.8 216c0 33.71-12.78 64.21-33.16 88h199.7C632.1 304 640 295.6 640 285.3C640 233.8 600.6 192 551.9 192z"
                                ></path></svg
                              ><!-- <i class="fa-solid fa-users fs-1-xl text-white"></i> Font Awesome fontawesome.com -->
                            </div>
                            <div class="text-end text-white">
                              <h2 class="fs-1-xxl fw-bolder text-white">0</h2>
                              <h3 class="mb-0 fs-4 fw-light">
                                Total Candidates
                              </h3>
                            </div>
                          </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-sm-6 widget">
                          <div
                            class="bg-success shadow-md rounded-10 p-xxl-10 px-5 py-10 d-flex align-items-center justify-content-between my-sm-3 my-2"
                          >
                            <div
                              class="bg-green-300 widget-icon rounded-10 me-2 d-flex align-items-center justify-content-center"
                            >
                              <svg
                                class="svg-inline--fa fa-user-shield fs-1-xl text-white"
                                aria-hidden="true"
                                focusable="false"
                                data-prefix="fas"
                                data-icon="user-shield"
                                role="img"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 640 512"
                                data-fa-i2svg=""
                              >
                                <path
                                  fill="currentColor"
                                  d="M622.3 271.1l-115.1-45.01c-4.125-1.629-12.62-3.754-22.25 0L369.8 271.1C359 275.2 352 285.1 352 295.1c0 111.6 68.75 188.8 132.9 213.9c9.625 3.75 18 1.625 22.25 0C558.4 489.9 640 420.5 640 295.1C640 285.1 633 275.2 622.3 271.1zM496 462.4V273.2l95.5 37.38C585.9 397.8 530.6 446 496 462.4zM224 256c70.7 0 128-57.31 128-128S294.7 0 224 0C153.3 0 96 57.31 96 128S153.3 256 224 256zM320.6 310.3C305.9 306.3 290.6 304 274.7 304H173.3C77.61 304 0 381.7 0 477.4C0 496.5 15.52 512 34.66 512H413.3c3.143 0 5.967-1.004 8.861-1.789C369.7 469.8 324.1 400.3 320.6 310.3z"
                                ></path></svg
                              ><!-- <i class="fa-solid fa-user-shield fs-1-xl text-white"></i> Font Awesome fontawesome.com -->
                            </div>
                            <div class="text-end text-white">
                              <h2 class="fs-1-xxl fw-bolder text-white">0</h2>
                              <h3 class="mb-0 fs-4 fw-light">
                                Total Employers
                              </h3>
                            </div>
                          </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-sm-6 widget">
                          <div
                            class="bg-info shadow-md rounded-10 p-xxl-10 px-5 py-10 d-flex align-items-center justify-content-between my-sm-3 my-2"
                          >
                            <div
                              class="bg-blue-300 widget-icon rounded-10 me-2 d-flex align-items-center justify-content-center"
                            >
                              <svg
                                class="svg-inline--fa fa-rectangle-list fs-1-xl text-white"
                                aria-hidden="true"
                                focusable="false"
                                data-prefix="fas"
                                data-icon="rectangle-list"
                                role="img"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512"
                                data-fa-i2svg=""
                              >
                                <path
                                  fill="currentColor"
                                  d="M0 96C0 60.65 28.65 32 64 32H512C547.3 32 576 60.65 576 96V416C576 451.3 547.3 480 512 480H64C28.65 480 0 451.3 0 416V96zM160 256C160 238.3 145.7 224 128 224C110.3 224 96 238.3 96 256C96 273.7 110.3 288 128 288C145.7 288 160 273.7 160 256zM160 160C160 142.3 145.7 128 128 128C110.3 128 96 142.3 96 160C96 177.7 110.3 192 128 192C145.7 192 160 177.7 160 160zM160 352C160 334.3 145.7 320 128 320C110.3 320 96 334.3 96 352C96 369.7 110.3 384 128 384C145.7 384 160 369.7 160 352zM224 136C210.7 136 200 146.7 200 160C200 173.3 210.7 184 224 184H448C461.3 184 472 173.3 472 160C472 146.7 461.3 136 448 136H224zM224 232C210.7 232 200 242.7 200 256C200 269.3 210.7 280 224 280H448C461.3 280 472 269.3 472 256C472 242.7 461.3 232 448 232H224zM224 328C210.7 328 200 338.7 200 352C200 365.3 210.7 376 224 376H448C461.3 376 472 365.3 472 352C472 338.7 461.3 328 448 328H224z"
                                ></path></svg
                              ><!-- <i class="fa-solid fa-list-alt fs-1-xl text-white"></i> Font Awesome fontawesome.com -->
                            </div>
                            <div class="text-end text-white">
                              <h2 class="fs-1-xxl fw-bolder text-white">2</h2>
                              <h3 class="mb-0 fs-4 fw-light">
                                Total Active Jobs
                              </h3>
                            </div>
                          </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-sm-6 widget">
                          <div
                            class="bg-warning shadow-md rounded-10 p-xxl-10 px-5 py-10 d-flex align-items-center justify-content-between my-sm-3 my-2"
                          >
                            <div
                              class="bg-yellow-300 widget-icon rounded-10 me-2 d-flex align-items-center justify-content-center"
                            >
                              <svg
                                class="svg-inline--fa fa-foursquare fs-1-xl text-white"
                                aria-hidden="true"
                                focusable="false"
                                data-prefix="fab"
                                data-icon="foursquare"
                                role="img"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 368 512"
                                data-fa-i2svg=""
                              >
                                <path
                                  fill="currentColor"
                                  d="M323.1 3H49.9C12.4 3 0 31.3 0 49.1v433.8c0 20.3 12.1 27.7 18.2 30.1 6.2 2.5 22.8 4.6 32.9-7.1C180 356.5 182.2 354 182.2 354c3.1-3.4 3.4-3.1 6.8-3.1h83.4c35.1 0 40.6-25.2 44.3-39.7l48.6-243C373.8 25.8 363.1 3 323.1 3zm-16.3 73.8l-11.4 59.7c-1.2 6.5-9.5 13.2-16.9 13.2H172.1c-12 0-20.6 8.3-20.6 20.3v13c0 12 8.6 20.6 20.6 20.6h90.4c8.3 0 16.6 9.2 14.8 18.2-1.8 8.9-10.5 53.8-11.4 58.8-.9 4.9-6.8 13.5-16.9 13.5h-73.5c-13.5 0-17.2 1.8-26.5 12.6 0 0-8.9 11.4-89.5 108.3-.9 .9-1.8 .6-1.8-.3V75.9c0-7.7 6.8-16.6 16.6-16.6h219c8.2 0 15.6 7.7 13.5 17.5z"
                                ></path></svg
                              ><!-- <i class="fa-brands fa-foursquare fs-1-xl text-white"></i> Font Awesome fontawesome.com -->
                            </div>
                            <div class="text-end text-white">
                              <h2 class="fs-1-xxl fw-bolder text-white">0</h2>
                              <h3 class="mb-0 fs-4 fw-light">Featured Jobs</h3>
                            </div>
                          </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-sm-6 widget">
                          <div
                            class="bg-secondary shadow-md rounded-10 p-xxl-10 px-5 py-10 d-flex align-items-center justify-content-between my-sm-3 my-2"
                          >
                            <div
                              class="bg-gray-600 widget-icon rounded-10 me-2 d-flex align-items-center justify-content-center"
                            >
                              <svg
                                class="svg-inline--fa fa-user-tag fs-1-xl text-white"
                                aria-hidden="true"
                                focusable="false"
                                data-prefix="fas"
                                data-icon="user-tag"
                                role="img"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 640 512"
                                data-fa-i2svg=""
                              >
                                <path
                                  fill="currentColor"
                                  d="M351.8 367.3v-44.1C328.5 310.7 302.4 304 274.7 304H173.3c-95.73 0-173.3 77.65-173.3 173.4C.0005 496.5 15.52 512 34.66 512h378.7c11.86 0 21.82-6.337 28.07-15.43l-61.65-61.57C361.7 416.9 351.8 392.9 351.8 367.3zM224 256c70.7 0 128-57.31 128-128S294.7 0 224 0C153.3 0 96 57.31 96 128S153.3 256 224 256zM630.6 364.8L540.3 274.8C528.3 262.8 512 256 495 256h-79.23c-17.75 0-31.99 14.25-31.99 32l.0147 79.2c0 17 6.647 33.15 18.65 45.15l90.31 90.27c12.5 12.5 32.74 12.5 45.24 0l92.49-92.5C643.1 397.6 643.1 377.3 630.6 364.8zM447.8 343.9c-13.25 0-24-10.62-24-24c0-13.25 10.75-24 24-24c13.38 0 24 10.75 24 24S461.1 343.9 447.8 343.9z"
                                ></path></svg
                              ><!-- <i class="fa-solid fa-user-tag fs-1-xl text-white"></i> Font Awesome fontawesome.com -->
                            </div>
                            <div class="text-end text-white">
                              <h2 class="fs-1-xxl fw-bolder text-white">0</h2>
                              <h3 class="mb-0 fs-4 fw-light">
                                Featured Employers
                              </h3>
                            </div>
                          </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-sm-6 widget">
                          <div
                            class="bg-danger shadow-md rounded-10 p-xxl-10 px-5 py-10 d-flex align-items-center justify-content-between my-sm-3 my-2"
                          >
                            <div
                              class="bg-red-300 widget-icon rounded-10 me-2 d-flex align-items-center justify-content-center"
                            >
                              <svg
                                class="svg-inline--fa fa-money-check fs-1-xl text-white"
                                aria-hidden="true"
                                focusable="false"
                                data-prefix="fas"
                                data-icon="money-check"
                                role="img"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512"
                                data-fa-i2svg=""
                              >
                                <path
                                  fill="currentColor"
                                  d="M512 64C547.3 64 576 92.65 576 128V384C576 419.3 547.3 448 512 448H64C28.65 448 0 419.3 0 384V128C0 92.65 28.65 64 64 64H512zM112 224C103.2 224 96 231.2 96 240C96 248.8 103.2 256 112 256H272C280.8 256 288 248.8 288 240C288 231.2 280.8 224 272 224H112zM112 352H464C472.8 352 480 344.8 480 336C480 327.2 472.8 320 464 320H112C103.2 320 96 327.2 96 336C96 344.8 103.2 352 112 352zM376 160C362.7 160 352 170.7 352 184V232C352 245.3 362.7 256 376 256H456C469.3 256 480 245.3 480 232V184C480 170.7 469.3 160 456 160H376z"
                                ></path></svg
                              ><!-- <i class="fa-solid fa-money-check fs-1-xl text-white"></i> Font Awesome fontawesome.com -->
                            </div>
                            <div class="text-end text-white">
                              <h2 class="fs-1-xxl fw-bolder text-white">0</h2>
                              <h3 class="mb-0 fs-4 fw-light">
                                Featured Jobs Incomes
                              </h3>
                            </div>
                          </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-sm-6 widget">
                          <div
                            class="bg-dark shadow-md rounded-10 p-xxl-10 px-5 py-10 d-flex align-items-center justify-content-between my-sm-3 my-2"
                          >
                            <div
                              class="bg-gray-700 widget-icon rounded-10 me-2 d-flex align-items-center justify-content-center"
                            >
                              <svg
                                class="svg-inline--fa fa-money-check-dollar fs-1-xl text-light"
                                aria-hidden="true"
                                focusable="false"
                                data-prefix="fas"
                                data-icon="money-check-dollar"
                                role="img"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512"
                                data-fa-i2svg=""
                              >
                                <path
                                  fill="currentColor"
                                  d="M512 64C547.3 64 576 92.65 576 128V384C576 419.3 547.3 448 512 448H64C28.65 448 0 419.3 0 384V128C0 92.65 28.65 64 64 64H512zM272 192C263.2 192 256 199.2 256 208C256 216.8 263.2 224 272 224H496C504.8 224 512 216.8 512 208C512 199.2 504.8 192 496 192H272zM272 320H496C504.8 320 512 312.8 512 304C512 295.2 504.8 288 496 288H272C263.2 288 256 295.2 256 304C256 312.8 263.2 320 272 320zM164.1 160C164.1 148.9 155.1 139.9 143.1 139.9C132.9 139.9 123.9 148.9 123.9 160V166C118.3 167.2 112.1 168.9 108 171.1C93.06 177.9 80.07 190.5 76.91 208.8C75.14 219 76.08 228.9 80.32 237.8C84.47 246.6 91 252.8 97.63 257.3C109.2 265.2 124.5 269.8 136.2 273.3L138.4 273.9C152.4 278.2 161.8 281.3 167.7 285.6C170.2 287.4 171.1 288.8 171.4 289.7C171.8 290.5 172.4 292.3 171.7 296.3C171.1 299.8 169.2 302.8 163.7 305.1C157.6 307.7 147.7 309 134.9 307C128.9 306 118.2 302.4 108.7 299.2C106.5 298.4 104.3 297.7 102.3 297C91.84 293.5 80.51 299.2 77.02 309.7C73.53 320.2 79.2 331.5 89.68 334.1C90.89 335.4 92.39 335.9 94.11 336.5C101.1 339.2 114.4 343.4 123.9 345.6V352C123.9 363.1 132.9 372.1 143.1 372.1C155.1 372.1 164.1 363.1 164.1 352V346.5C169.4 345.5 174.6 343.1 179.4 341.9C195.2 335.2 207.8 322.2 211.1 303.2C212.9 292.8 212.1 282.8 208.1 273.7C204.2 264.7 197.9 258.1 191.2 253.3C179.1 244.4 162.9 239.6 150.8 235.9L149.1 235.7C135.8 231.4 126.2 228.4 120.1 224.2C117.5 222.4 116.7 221.2 116.5 220.7C116.3 220.3 115.7 219.1 116.3 215.7C116.7 213.7 118.2 210.4 124.5 207.6C130.1 204.7 140.9 203.1 153.1 204.1C157.5 205.7 171 208.3 174.9 209.3C185.5 212.2 196.5 205.8 199.3 195.1C202.2 184.5 195.8 173.5 185.1 170.7C180.7 169.5 170.7 167.5 164.1 166.3L164.1 160z"
                                ></path></svg
                              ><!-- <i class="fa-solid fa-money-check-alt fs-1-xl text-light"></i> Font Awesome fontawesome.com -->
                            </div>
                            <div class="text-end text-white">
                              <h2 class="fs-1-xxl fw-bolder text-light">0</h2>
                              <h3 class="mb-0 fs-4 fw-light text-light">
                                Featured Employers Incomes
                              </h3>
                            </div>
                          </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-sm-6 widget">
                          <div
                            class="bg-primary shadow-md rounded-10 p-xxl-10 px-5 py-10 d-flex align-items-center justify-content-between my-sm-3 my-2"
                          >
                            <div
                              class="bg-cyan-300 widget-icon rounded-10 me-2 d-flex align-items-center justify-content-center"
                            >
                              <svg
                                class="svg-inline--fa fa-money-bill fs-1-xl text-white"
                                aria-hidden="true"
                                focusable="false"
                                data-prefix="fas"
                                data-icon="money-bill"
                                role="img"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512"
                                data-fa-i2svg=""
                              >
                                <path
                                  fill="currentColor"
                                  d="M512 64C547.3 64 576 92.65 576 128V384C576 419.3 547.3 448 512 448H64C28.65 448 0 419.3 0 384V128C0 92.65 28.65 64 64 64H512zM128 384C128 348.7 99.35 320 64 320V384H128zM64 192C99.35 192 128 163.3 128 128H64V192zM512 384V320C476.7 320 448 348.7 448 384H512zM512 128H448C448 163.3 476.7 192 512 192V128zM288 352C341 352 384 309 384 256C384 202.1 341 160 288 160C234.1 160 192 202.1 192 256C192 309 234.1 352 288 352z"
                                ></path></svg
                              ><!-- <i class="fa-solid fa-money-bill fs-1-xl text-white"></i> Font Awesome fontawesome.com -->
                            </div>
                            <div class="text-end text-white">
                              <h2 class="fs-1-xxl fw-bolder text-white">0</h2>
                              <h3 class="mb-0 fs-4 fw-light">
                                Subscription Incomes
                              </h3>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    job

                    <!-- recent registered candidates starts -->
                    <div class="col-xxl-6 col-12 mb-7">
                      <div class="d-flex justify-content-between pb-0">
                        <h3 class="mb-0 mt-2">Recent Candidates</h3>
                        <div class="">
                          <a
                            href="http://127.0.0.1:8080/admin/candidates"
                            class="btn btn-info"
                            >View More
                            <svg
                              class="svg-inline--fa fa-chevron-right"
                              aria-hidden="true"
                              focusable="false"
                              data-prefix="fas"
                              data-icon="chevron-right"
                              role="img"
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 320 512"
                              data-fa-i2svg=""
                            >
                              <path
                                fill="currentColor"
                                d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z"
                              ></path></svg
                            ><!-- <i class="fas fa-chevron-right"></i> Font Awesome fontawesome.com --></a
                          >
                        </div>
                      </div>
                      <div class="pt-7">
                        <div class="table-responsive">
                          <table class="table table-striped mb-0">
                            <thead>
                              <tr class="">
                                <th scope="col">Name</th>
                                <th scope="col">Created Date</th>
                                <th scope="col">Immediate Available</th>
                                <th scope="col">Is Verified</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td colspan="6" class="text-center">
                                  No data available .
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <!-- recent registered candidates ends -->

                    <!-- recent registered employers starts -->
                    <div class="col-xxl-6 col-12 mb-7">
                      <div class="d-flex justify-content-between pb-0">
                        <h3 class="mb-0 mt-2">Recent Employers</h3>
                        <div>
                          <a
                            href="http://127.0.0.1:8080/admin/employers"
                            class="btn btn-info"
                            >View More
                            <svg
                              class="svg-inline--fa fa-chevron-right"
                              aria-hidden="true"
                              focusable="false"
                              data-prefix="fas"
                              data-icon="chevron-right"
                              role="img"
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 320 512"
                              data-fa-i2svg=""
                            >
                              <path
                                fill="currentColor"
                                d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z"
                              ></path></svg
                            ><!-- <i class="fas fa-chevron-right"></i> Font Awesome fontawesome.com --></a
                          >
                        </div>
                      </div>
                      <div class="pt-7">
                        <div class="table-responsive">
                          <table class="table table-striped mb-0">
                            <thead>
                              <tr class="">
                                <th scope="col">Name</th>
                                <th scope="col">Created Date</th>
                                <th scope="col">Website</th>
                                <th scope="col">Location</th>
                                <th scope="col">Is Featured</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>
                                  <a
                                    class="text-decoration-none"
                                    href="http://127.0.0.1:8080/admin/employers/1"
                                    >Super Admin</a
                                  >
                                </td>
                                <td>1 week from now</td>
                                <td>
                                  <a
                                    href="https://sadffffffffffffff/"
                                    class="text-decoration-none"
                                    target="_blank"
                                    >sadffffffffffffff</a
                                  >
                                </td>
                                <td>dfsasasa</td>
                                <td>
                                  <svg
                                    class="svg-inline--fa fa-circle-xmark pl-4 text-danger"
                                    aria-hidden="true"
                                    focusable="false"
                                    data-prefix="fas"
                                    data-icon="circle-xmark"
                                    role="img"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512"
                                    data-fa-i2svg=""
                                  >
                                    <path
                                      fill="currentColor"
                                      d="M0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256zM175 208.1L222.1 255.1L175 303C165.7 312.4 165.7 327.6 175 336.1C184.4 346.3 199.6 346.3 208.1 336.1L255.1 289.9L303 336.1C312.4 346.3 327.6 346.3 336.1 336.1C346.3 327.6 346.3 312.4 336.1 303L289.9 255.1L336.1 208.1C346.3 199.6 346.3 184.4 336.1 175C327.6 165.7 312.4 165.7 303 175L255.1 222.1L208.1 175C199.6 165.7 184.4 165.7 175 175C165.7 184.4 165.7 199.6 175 208.1V208.1z"
                                    ></path></svg
                                  ><!-- <i class="pl-4 fas fa-times-circle text-danger"></i> Font Awesome fontawesome.com -->
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <!-- recent registered employers ends -->

                    <!-- recent jobs starts -->
                    <div class="col-12">
                      <div class="d-flex justify-content-between pb-0">
                        <h3 class="mb-0 mt-2">Recent Jobs</h3>
                        <div>
                          <a
                            href="http://127.0.0.1:8080/admin/jobs"
                            class="btn btn-info"
                            >View More
                            <svg
                              class="svg-inline--fa fa-chevron-right"
                              aria-hidden="true"
                              focusable="false"
                              data-prefix="fas"
                              data-icon="chevron-right"
                              role="img"
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 320 512"
                              data-fa-i2svg=""
                            >
                              <path
                                fill="currentColor"
                                d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z"
                              ></path></svg
                            ><!-- <i class="fas fa-chevron-right"></i> Font Awesome fontawesome.com --></a
                          >
                        </div>
                      </div>
                      <div class="pt-7">
                        <div class="table-responsive">
                          <table class="table table-striped">
                            <thead>
                              <tr class="">
                                <th scope="col">Job Title</th>
                                <th scope="col">Employer Name</th>
                                <th scope="col">Created Date</th>
                                <th scope="col">Job Category</th>
                                <th scope="col">Job Type</th>
                                <th scope="col">Job Shift</th>
                                <th scope="col">Is Featured</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>
                                  <a
                                    class="text-decoration-none"
                                    href="http://127.0.0.1:8080/admin/jobs/1"
                                    >bal</a
                                  >
                                </td>
                                <td>
                                  <a
                                    class="text-decoration-none"
                                    href="http://127.0.0.1:8080/admin/employers/1"
                                    >Super Admin</a
                                  >
                                </td>
                                <td>1 day ago</td>
                                <td>Biomedical Engineers</td>
                                <td>Community and Social Services</td>
                                <td>Weekday or weekend Shift</td>
                                <td>
                                  <svg
                                    class="svg-inline--fa fa-circle-xmark pl-4 text-danger"
                                    aria-hidden="true"
                                    focusable="false"
                                    data-prefix="fas"
                                    data-icon="circle-xmark"
                                    role="img"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512"
                                    data-fa-i2svg=""
                                  >
                                    <path
                                      fill="currentColor"
                                      d="M0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256zM175 208.1L222.1 255.1L175 303C165.7 312.4 165.7 327.6 175 336.1C184.4 346.3 199.6 346.3 208.1 336.1L255.1 289.9L303 336.1C312.4 346.3 327.6 346.3 336.1 336.1C346.3 327.6 346.3 312.4 336.1 303L289.9 255.1L336.1 208.1C346.3 199.6 346.3 184.4 336.1 175C327.6 165.7 312.4 165.7 303 175L255.1 222.1L208.1 175C199.6 165.7 184.4 165.7 175 175C165.7 184.4 165.7 199.6 175 208.1V208.1z"
                                    ></path></svg
                                  ><!-- <i class="pl-4 fas fa-times-circle text-danger"></i> Font Awesome fontawesome.com -->
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <a
                                    class="text-decoration-none"
                                    href="http://127.0.0.1:8080/admin/jobs/2"
                                    >Baler job</a
                                  >
                                </td>
                                <td>
                                  <a
                                    class="text-decoration-none"
                                    href="http://127.0.0.1:8080/admin/employers/1"
                                    >Super Admin</a
                                  >
                                </td>
                                <td>1 day ago</td>
                                <td>Accountants</td>
                                <td>Architecture and Engineering</td>
                                <td>Fixed Shift</td>
                                <td>
                                  <svg
                                    class="svg-inline--fa fa-circle-xmark pl-4 text-danger"
                                    aria-hidden="true"
                                    focusable="false"
                                    data-prefix="fas"
                                    data-icon="circle-xmark"
                                    role="img"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512"
                                    data-fa-i2svg=""
                                  >
                                    <path
                                      fill="currentColor"
                                      d="M0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256zM175 208.1L222.1 255.1L175 303C165.7 312.4 165.7 327.6 175 336.1C184.4 346.3 199.6 346.3 208.1 336.1L255.1 289.9L303 336.1C312.4 346.3 327.6 346.3 336.1 336.1C346.3 327.6 346.3 312.4 336.1 303L289.9 255.1L336.1 208.1C346.3 199.6 346.3 184.4 336.1 175C327.6 165.7 312.4 165.7 303 175L255.1 222.1L208.1 175C199.6 165.7 184.4 165.7 175 175C165.7 184.4 165.7 199.6 175 208.1V208.1z"
                                    ></path></svg
                                  ><!-- <i class="pl-4 fas fa-times-circle text-danger"></i> Font Awesome fontawesome.com -->
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <!-- recent jobs ends -->
                  </div>
                </div>
              </div>
            </div>
          </div>
    
@endsection