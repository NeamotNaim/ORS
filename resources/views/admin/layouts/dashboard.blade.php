<!DOCTYPE html>
<html lang="en" class="fontawesome-i2svg-active fontawesome-i2svg-complete">
<!--begin::Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <base href=".">
    <title> Dashboard| BSFMSTU</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="KqMNftTjXUwvrqnthgFB7FsGKP9T7sn0bmUUbmYZ">
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">
    <!--begin::Fonts-->
    <link rel="stylesheet" href="backend/css">
    <!--end::Fonts-->


    <link rel="stylesheet" type="text/css" href="backend/third-party.css">




    <link rel="stylesheet" type="text/css" href="backend/style.css">
    <link rel="stylesheet" type="text/css" href="backend/plugins.css">
    <link rel="stylesheet" type="text/css" href="backend/custom.css">


    <script src="backend/livewire.js.download"></script>
    <script data-turbo-eval="false" data-turbolinks-eval="false">
        window.livewire = new Livewire();
        window.Livewire = window.livewire;
        window.livewire_app_url = '';
        window.livewire_token = 'ALgYiOhEGgqnf91Bd77MObUWdXklhkOwKIJFglLs';
        window.deferLoadingAlpine = function(callback) {
            window.addEventListener('livewire:load', function() {
                callback();
            });
        };
        let started = false;
        window.addEventListener('alpine:initializing', function() {
            if (!started) {
                window.livewire.start();
                started = true;
            }
        });
        document.addEventListener("DOMContentLoaded", function() {
            if (!started) {
                window.livewire.start();
                started = true;
            }
        });
    </script>

    <script src="backend/livewire-turbolinks.js.download" data-turbolinks-eval="false" data-turbo-eval="false"></script>

    <script src="backend/third-party.js.download"></script>


    <script src="backend/pages.js.download"></script>

    <style type="text/css">
        /* Chart.js */
        /*
 * DOM element rendering detection
 * https://davidwalsh.name/detect-node-insertion
 */
        @keyframes chartjs-render-animation {
            from {
                opacity: 0.99;
            }

            to {
                opacity: 1;
            }
        }

        .chartjs-render-monitor {
            animation: chartjs-render-animation 0.001s;
        }

        /*
 * DOM element resizing detection
 * https://github.com/marcj/css-element-queries
 */
        .chartjs-size-monitor,
        .chartjs-size-monitor-expand,
        .chartjs-size-monitor-shrink {
            position: absolute;
            direction: ltr;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            overflow: hidden;
            pointer-events: none;
            visibility: hidden;
            z-index: -1;
        }

        .chartjs-size-monitor-expand>div {
            position: absolute;
            width: 1000000px;
            height: 1000000px;
            left: 0;
            top: 0;
        }

        .chartjs-size-monitor-shrink>div {
            position: absolute;
            width: 200%;
            height: 200%;
            left: 0;
            top: 0;
        }
    </style>
</head>
<!--end::Head-->
<!--begin::Body-->

<body class="overflow-x-hidden" data-new-gr-c-s-check-loaded="14.1093.0" data-gr-ext-installed="">
    <div class="d-flex flex-column flex-root vh-100">
        <div class="d-flex flex-row flex-column-fluid">
            @include('admin/layouts/sidebar')
            <div class="bg-overlay" id="sidebar-overly"></div>
            <div class="wrapper d-flex flex-column flex-row-fluid">
                <div class="container-fluid d-flex align-items-stretch justify-content-between px-0">
                    @include('admin/layouts/header')
                    <div class="bg-overlay" id="nav-overly"></div>
                </div>
                @yield('content')
                <div class="container-fluid">
                    @include('admin/layouts/footer')
                </div>
            </div>
        </div>
    </div>
    <div id="editAdminProfileModal" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Edit Profile</h3>
                    <button type="button" aria-label="Close" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>
                <form method="POST" action="http://127.0.0.1:8080/admin/dashboard" accept-charset="UTF-8"
                    id="editAdminProfileForm" enctype="multipart/form-data"><input name="_token" type="hidden"
                        value="KqMNftTjXUwvrqnthgFB7FsGKP9T7sn0bmUUbmYZ">
                    <div class="modal-body">

                        <input id="editUserId" name="user_id" type="hidden">
                        <input type="hidden" name="_token" value="KqMNftTjXUwvrqnthgFB7FsGKP9T7sn0bmUUbmYZ">
                        <div class="row">
                            <div class="form-group col-sm-6 mb-5">
                                <label for="first_name" class="form-label required">First Name:</label>
                                <input id="firstName" class="form-control form-control-solid" required=""
                                    placeholder="First Name" name="first_name" type="text">
                            </div>
                            <div class="form-group col-sm-6 mb-5">
                                <label for="last_name" class="form-label">Last Name:</label>
                                <input id="lastName" class="form-control form-control-solid"
                                    placeholder="Last Name" name="last_name" type="text">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-6 mb-5">
                                <label for="email" class="required form-label">Email:</label>
                                <input id="userEmail" class="form-control form-control-solid" required=""
                                    placeholder="Email" name="email" type="text">
                            </div>
                            <div class="form-group col-sm-6 mb-5 mobile-itel-width">
                                <label for="phone" class="form-label ">Phone:</label>
                                <div class="form-group col-sm-12 mb-5">

                                </div>
                                <input id="profilePrefixCode" name="region_code" type="hidden">
                                <p id="valid-msg" class="text-success d-none fw-400 fs-small mt-2">Valid Number</p>
                                <p id="error-msg" class="text-danger d-none fw-400 fs-small mt-2">Invalid Number</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-md-6 col-sm-12 mb-5" io-image-input="true">
                                <div class="d-block mb-2">
                                    Profile:
                                    <span data-bs-toggle="tooltip" data-placement="top"
                                        data-bs-original-title="The image must be of pixel 90 x 60.">
                                        <svg class="svg-inline--fa fa-circle-question ml-1 general-question-mark"
                                            aria-hidden="true" focusable="false" data-prefix="fas"
                                            data-icon="circle-question" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                            data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 400c-18 0-32-14-32-32s13.1-32 32-32c17.1 0 32 14 32 32S273.1 400 256 400zM325.1 258L280 286V288c0 13-11 24-24 24S232 301 232 288V272c0-8 4-16 12-21l57-34C308 213 312 206 312 198C312 186 301.1 176 289.1 176h-51.1C225.1 176 216 186 216 198c0 13-11 24-24 24s-24-11-24-24C168 159 199 128 237.1 128h51.1C329 128 360 159 360 198C360 222 347 245 325.1 258z">
                                            </path>
                                        </svg>
                                        <!-- <i class="fas fa-question-circle ml-1  general-question-mark"></i> Font Awesome fontawesome.com -->
                                    </span>
                                </div>
                                <div class="d-block">
                                    <div class="image-picker">
                                        <div class="image previewImage" id="profilePicturePreview"
                                            style="background-image: url(http://127.0.0.1:8080/assets/img/infyom-logo.png)">
                                        </div>
                                        <span class="picker-edit rounded-circle text-gray-500 fs-small"
                                            data-bs-toggle="tooltip" data-placement="top"
                                            data-bs-original-title="Change Profile">
                                            <label>
                                                <svg class="svg-inline--fa fa-pen" id="profileImageIcon"
                                                    aria-hidden="true" focusable="false" data-prefix="fas"
                                                    data-icon="pen" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                    data-fa-i2svg="">
                                                    <path fill="currentColor"
                                                        d="M362.7 19.32C387.7-5.678 428.3-5.678 453.3 19.32L492.7 58.75C517.7 83.74 517.7 124.3 492.7 149.3L444.3 197.7L314.3 67.72L362.7 19.32zM421.7 220.3L188.5 453.4C178.1 463.8 165.2 471.5 151.1 475.6L30.77 511C22.35 513.5 13.24 511.2 7.03 504.1C.8198 498.8-1.502 489.7 .976 481.2L36.37 360.9C40.53 346.8 48.16 333.9 58.57 323.5L291.7 90.34L421.7 220.3z">
                                                    </path>
                                                </svg>
                                                <!-- <i class="fa-solid fa-pen" id="profileImageIcon"></i> Font Awesome fontawesome.com -->
                                                <input id="profilePicture" class="image-upload d-none"
                                                    accept=".png, .jpg, .jpeg" name="image" type="file">
                                            </label>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer pt-0">
                        <button type="submit" class="btn btn-primary m-0" id="btnEditSave"
                            data-loading-text="&lt;span class=&#39;spinner-border spinner-border-sm&#39;&gt;&lt;/span&gt; Processing...">Save</button>
                        <button type="button" class="btn btn-secondary my-0 ms-5 me-0"
                            data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="changeAdminLanguageModal" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Change Language</h3>
                    <button type="button" aria-label="Close" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>
                <form method="POST" action="http://127.0.0.1:8080/admin/dashboard" accept-charset="UTF-8"
                    id="changeAdminLanguageForm"><input name="_token" type="hidden"
                        value="KqMNftTjXUwvrqnthgFB7FsGKP9T7sn0bmUUbmYZ">
                    <div class="modal-body">
                        <div class="alert alert-danger  hide d-none" id="editProfileValidationErrorsBox"></div>
                        <input type="hidden" name="_token" value="KqMNftTjXUwvrqnthgFB7FsGKP9T7sn0bmUUbmYZ">
                        <div class="">
                            <label for="language" class="required form-label">Language:</label>
                            <select id="adminLanguage"
                                class="form-select form-select-solid select2-hidden-accessible" required=""
                                data-control="select2" name="language"
                                data-select2-id="select2-data-adminLanguage" tabindex="-1" aria-hidden="true">
                                <option value="ar">Arabic (العربية)</option>
                                <option value="de">German (Deutsch)</option>
                                <option value="en" selected="selected" data-select2-id="select2-data-2-nuaf">
                                    English (English)</option>
                                <option value="es">Spanish (español, castellano)</option>
                                <option value="fr">French (français, langue française)</option>
                                <option value="pt">Portuguese (Português)</option>
                                <option value="ru">Russian (русский язык)</option>
                                <option value="tr">Turkish (Türkçe)</option>
                                <option value="zh">Chinese (中文 (Zhōngwén), 汉语, 漢語)</option>
                            </select><span class="select2 select2-container select2-container--bootstrap-5"
                                dir="ltr" data-select2-id="select2-data-1-b9jh" style="width: auto;"><span
                                    class="selection"><span class="select2-selection select2-selection--single"
                                        role="combobox" aria-haspopup="true" aria-expanded="false"
                                        tabindex="0" aria-disabled="false"
                                        aria-labelledby="select2-adminLanguage-container"
                                        aria-controls="select2-adminLanguage-container"><span
                                            class="select2-selection__rendered" id="select2-adminLanguage-container"
                                            role="textbox" aria-readonly="true" title="English (English)">English
                                            (English)</span><span class="select2-selection__arrow"
                                            role="presentation"><b
                                                role="presentation"></b></span></span></span><span
                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                        </div>
                    </div>
                    <div class="modal-footer pt-0">
                        <button type="submit" class="btn btn-primary m-0" id="btnLanguageChange"
                            data-loading-text="&lt;span class=&#39;spinner-border spinner-border-sm&#39;&gt;&lt;/span&gt; Processing...">Save</button>
                        <button type="button" class="btn btn-secondary my-0 ms-5 me-0" id="btnEditCancel"
                            data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>






    <div id="changeAdminPasswordModal" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Change Password</h3>
                    <button type="button" aria-label="Close" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>
                <form method="POST" action="http://127.0.0.1:8080/admin/dashboard" accept-charset="UTF-8"
                    id="changeAdminPasswordForm"><input name="_token" type="hidden"
                        value="KqMNftTjXUwvrqnthgFB7FsGKP9T7sn0bmUUbmYZ">
                    <div class="modal-body">
                        <div class="alert alert-danger  hide d-none" id="editPasswordValidationErrorsBox"></div>
                        <input id="pfUserId" name="user_id" type="hidden">
                        <input name="is_active" type="hidden" value="1">
                        <input type="hidden" name="_token" value="KqMNftTjXUwvrqnthgFB7FsGKP9T7sn0bmUUbmYZ">
                        <div class="mb-5">
                            <label for="current password" class="form-label required">Current Password:</label>
                            <input class="form-control  form-control-solid" id="pfCurrentPassword" type="password"
                                name="password_current" required="">
                        </div>
                        <div class="mb-5">
                            <label for="password" class="required form-label">New Password:</label>
                            <input class="form-control  form-control-solid" id="pfNewPassword" type="password"
                                name="password" required="">
                        </div>
                        <div class="">
                            <label for="password_confirmation" class="required form-label ">Confirm
                                Password:</label>
                            <input class="form-control form-control-solid" id="pfNewConfirmPassword"
                                type="password" name="password_confirmation" required="">
                        </div>
                    </div>
                    <div class="modal-footer pt-0">
                        <button type="submit" class="btn btn-primary m-0" id="btnPrPasswordEditSave"
                            data-loading-text="&lt;span class=&#39;spinner-border spinner-border-sm&#39;&gt;&lt;/span&gt; Processing...">Save</button>
                        <button type="button" class="btn btn-secondary my-0 ms-5 me-0" id="btnEditCancel"
                            data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--begin::Javascript-->
    <input id="profilePhoneNo" name="profile-phone-no" type="hidden" value="">


    <script data-turbo-eval="false">
        (function($) {
            let currentLocale = "en";
            Lang.setLocale(currentLocale);
            $.fn.button = function(action) {
                if (action === 'loading' && this.data('loading-text')) {
                    this.data('original-text', this.html()).html(this.data('loading-text')).prop('disabled', true);
                }
                if (action === 'reset' && this.data('original-text')) {
                    this.html(this.data('original-text')).prop('disabled', false);
                }
            };
        }(jQuery));
        $(document).ready(function() {
            $('.alert').delay(5000).slideUp(300);
        });
        $('[data-dismiss=modal]').on('click', function(e) {
            var $t = $(this),
                target = $t[0].href || $t.data('target') || $t.parents('.modal') || [];

            $(target).modal('hide');
        });
        let utilsScript = "http://127.0.0.1:8080/assets/js/inttel/js/utils.min.js";

        let currentUrlName = "http://127.0.0.1:8080/admin/dashboard";
        let readAllNotifications = "http://127.0.0.1:8080/admin/read-all-notification";
        let readNotification = "http://127.0.0.1:8080/admin/notification";
        let ajaxCallIsRunning = false;
        let usersRole = 'Admin';
        let sweetAlertIcon = "http://127.0.0.1:8080/images/remove.png"
        let getLoggedInUserLang = 'en';
        let defaultCountryCodeValue = "in"
    </script>
    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->

</html>
