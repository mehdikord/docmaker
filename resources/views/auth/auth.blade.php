
<!DOCTYPE html>
<html direction="rtl" dir="rtl" style="direction: rtl" >
<!--begin::Head-->
<head><base href="../../../">
    <meta charset="utf-8"/>
    <title>Docmaker</title>
    <meta name="description" content="Login page example"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
    <!--end::Fonts-->


    <!--begin::Page Custom Styles(used by this page)-->
    <link href="{{asset('assets/css/pages/login/login-2.css')}}?v=7.0.6" rel="stylesheet" type="text/css"/>
    <!--end::Page Custom Styles-->

    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{asset('assets/plugins/global/plugins.bundle.rtl.css')}}?v=7.0.6" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/plugins/custom/prismjs/prismjs.bundle.rtl.css')}}?v=7.0.6" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/style.bundle.rtl.css')}}?v=7.0.6" rel="stylesheet" type="text/css"/>
    <!--end::Global Theme Styles-->

    <!--begin::Layout Themes(used by all pages)-->

    <link href="{{asset('assets/css/themes/layout/header/base/light.rtl.css')}}?v=7.0.6" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/themes/layout/header/menu/light.rtl.css')}}?v=7.0.6" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/themes/layout/brand/dark.rtl.css')}}?v=7.0.6" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/themes/layout/aside/dark.rtl.css')}}?v=7.0.6" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{asset('fonts/css/font.css')}}">
    <!--end::Layout Themes-->

    <link rel="shortcut icon" href="assets/media/logos/favicon.ico"/>

</head>
<!--end::Head-->

<!--begin::Body-->
<body  id="kt_body"  class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading"  >

<!--begin::Main-->
<div class="d-flex flex-column flex-root">
    <!--begin::Login-->
    <div class="login login-2 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
        <!--begin::Aside-->
        <div class="login-aside order-2 order-lg-1 d-flex flex-row-auto position-relative overflow-hidden">
            <!--begin: Aside Container-->
            <div class="d-flex flex-column-fluid flex-column justify-content-between py-9 px-7 py-lg-13 px-lg-35">
                <!--begin::Logo-->
                <a href="#" class="text-center pt-2">
                    <img src="assets/media/logos/logo.png" class="max-h-75px" alt=""/>
                </a>
                <!--end::Logo-->

                <!--begin::Aside body-->
                <div class="d-flex flex-column-fluid flex-column flex-center">
                    @include('includes.errors')
                    <!--begin::Signin-->
                    <div class="login-form login-signin py-11">
                        <!--begin::Form-->
                        <form class="form" novalidate="novalidate" method="post" action="{{route('panel_auth_login')}}" id="kt_login_signin_form">
                            @csrf
                            <!--begin::Title-->
                            <div class="text-center pb-8">
                                <h2 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg text-aviny font-50">ورود به حساب کاربری</h2>
                                <span class="text-muted font-weight-bold font-25 mr-3 text-aviny">  یا <a href="" class="text-primary font-weight-bolder text-aviny font-40" id="kt_login_signup">ایجاد حساب </a></span>
                            </div>
                            <!--end::Title-->

                            <!--begin::Form group-->
                            <div class="form-group">
                                <label class="font-size-h6 font-weight-bolder text-dark">نام کاربری</label>
                                <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg" type="text" name="username" autocomplete="off"/>
                            </div>
                            <!--end::Form group-->

                            <!--begin::Form group-->
                            <div class="form-group">
                                <div class="d-flex justify-content-between mt-n5">
                                    <label class="font-size-h6 font-weight-bolder text-dark pt-5">گذرواژه</label>

                                    <a href="javascript:;" class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5" id="kt_login_forgot">
                                        فراموشی گذارواژه
                                    </a>
                                </div>

                                <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg" type="password" name="password" autocomplete="off"/>
                            </div>
                            <!--end::Form group-->

                            <!--begin::Action-->
                            <div class="text-center pt-2">
                                <button id="kt_login_signin_submit" class="btn btn-dark font-weight-bolder font-size-h6 px-8 py-4 my-3">ورود به حساب</button>
                            </div>
                            <!--end::Action-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Signin-->

                    <!--begin::Signup-->
                    <div class="login-form login-signup pt-11">
                        <!--begin::Form-->
                        <form class="form"  action="{{route('panel_auth_register')}}" method="post" id="kt_login_signup_form">
                            @csrf
                            <!--begin::Title-->
                            <div class="text-center pb-8">
                                <h2 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg text-aviny font-50">ایجاد حساب کاربری</h2>
                                <p class="text-muted font-weight-bold font-size-h4"></p>
                            </div>
                            <!--end::Title-->

                            <!--begin::Form group-->
                            <div class="form-group">
                                <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="text" placeholder="نام کامل" name="name" autocomplete="off"/>
                            </div>
                            <!--end::Form group-->

                            <!--begin::Form group-->
                            <div class="form-group">
                                <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="text" placeholder="نام کاربری" name="username" autocomplete="off"/>
                            </div>
                            <!--end::Form group-->
                            <!--begin::Form group-->
                            <div class="form-group">
                                <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="email" placeholder="آدرس ایمیل (اختیاری)" name="email" autocomplete="off"/>
                            </div>
                            <!--end::Form group-->
                            <!--begin::Form group-->
                            <div class="form-group">
                                <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="password" placeholder="گذرواژه" name="password" autocomplete="off"/>
                            </div>
                            <!--end::Form group-->

                            <!--begin::Form group-->
                            <div class="form-group">
                                <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="password" placeholder="تکرار گذرواژه" name="password_confirmation" autocomplete="off"/>
                            </div>
                            <!--end::Form group-->

                            <!--begin::Form group-->
                            <div class="form-group d-flex flex-wrap flex-center pb-lg-0 pb-3">
                                <button type="submit" id="kt_login_signup_submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mx-4">ایجاد حساب</button>
                                <button type="button" id="kt_login_signup_cancel" class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mx-4">ورود به حساب</button>
                            </div>
                            <!--end::Form group-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Signup-->

                    <!--begin::Forgot-->
                    <div class="login-form login-forgot pt-11">
                        <!--begin::Form-->
                        <form class="form" novalidate="novalidate" id="kt_login_forgot_form">
                            <!--begin::Title-->
                            <div class="text-center pb-8">
                                <h2 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg text-aviny font-50">فراموشی گذرواژه</h2>
                                <p class="text-muted font-weight-bold font-size-h4">برای بازیابی گذرواژه، آدرس ایمیل خود را وارد کنید</p>
                            </div>
                            <!--end::Title-->

                            <!--begin::Form group-->
                            <div class="form-group">
                                <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="email" placeholder="آدرس ایمیل" name="email" autocomplete="off"/>
                            </div>
                            <!--end::Form group-->

                            <!--begin::Form group-->
                            <div class="form-group d-flex flex-wrap flex-center pb-lg-0 pb-3">
                                <button type="submit" id="kt_login_forgot_submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mx-4">بازیابی گذرواژه</button>
                                <button type="button" id="kt_login_forgot_cancel" class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mx-4">بازگشت</button>
                            </div>
                            <!--end::Form group-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Forgot-->
                </div>
                <!--end::Aside body-->

            </div>
            <!--end: Aside Container-->
        </div>
        <!--begin::Aside-->

        <!--begin::Content-->
        <div class="content order-1 order-lg-2 d-flex flex-column w-100 pb-0" style="background-color: #B1DCED;">
            <!--begin::Title-->
            <div class="d-flex flex-column justify-content-center text-center pt-lg-40 pt-md-5 pt-sm-5 px-lg-0 pt-5 px-7">
                <h3 class="display4 font-weight-bolder my-7 text-dark" style="color: #986923;">Docmaker</h3>
                <p class="font-weight-bolder font-size-h2-md font-size-lg text-dark opacity-70">
                </p>
            </div>
            <!--end::Title-->

            <!--begin::Image-->
            <div class="content-img d-flex flex-row-fluid bgi-no-repeat bgi-position-y-bottom bgi-position-x-center" style="background-image: url({{asset('assets/media/svg/illustrations/login-visual-2.svg')}});"></div>
            <!--end::Image-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Login-->
</div>
<!--end::Main-->


<script>
    var KTAppSettings = {
        "breakpoints": {
            "sm": 576,
            "md": 768,
            "lg": 992,
            "xl": 1200,
            "xxl": 1400
        },
        "colors": {
            "theme": {
                "base": {
                    "white": "#ffffff",
                    "primary": "#3699FF",
                    "secondary": "#E5EAEE",
                    "success": "#1BC5BD",
                    "info": "#8950FC",
                    "warning": "#FFA800",
                    "danger": "#F64E60",
                    "light": "#E4E6EF",
                    "dark": "#181C32"
                },
                "light": {
                    "white": "#ffffff",
                    "primary": "#E1F0FF",
                    "secondary": "#EBEDF3",
                    "success": "#C9F7F5",
                    "info": "#EEE5FF",
                    "warning": "#FFF4DE",
                    "danger": "#FFE2E5",
                    "light": "#F3F6F9",
                    "dark": "#D6D6E0"
                },
                "inverse": {
                    "white": "#ffffff",
                    "primary": "#ffffff",
                    "secondary": "#3F4254",
                    "success": "#ffffff",
                    "info": "#ffffff",
                    "warning": "#ffffff",
                    "danger": "#ffffff",
                    "light": "#464E5F",
                    "dark": "#ffffff"
                }
            },
            "gray": {
                "gray-100": "#F3F6F9",
                "gray-200": "#EBEDF3",
                "gray-300": "#E4E6EF",
                "gray-400": "#D1D3E0",
                "gray-500": "#B5B5C3",
                "gray-600": "#7E8299",
                "gray-700": "#5E6278",
                "gray-800": "#3F4254",
                "gray-900": "#181C32"
            }
        },
        "font-family": "Poppins"
    };
</script>
<!--end::Global Config-->

<!--begin::Global Theme Bundle(used by all pages)-->
<script src="{{asset('assets/plugins/global/plugins.bundle.js')}}?v=7.0.6"></script>
<script src="{{asset('assets/plugins/custom/prismjs/prismjs.bundle.js')}}?v=7.0.6"></script>
<script src="{{asset('assets/js/scripts.bundle.js')}}?v=7.0.6"></script>
<!--end::Global Theme Bundle-->


<!--begin::Page Scripts(used by this page)-->
<script src="{{asset('assets/js/pages/custom/login/login-general.js')}}?v=7.0.6"></script>
<!--end::Page Scripts-->
</body>
<!--end::Body-->
</html>
