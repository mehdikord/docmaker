<!DOCTYPE html>

<html direction="rtl" dir="rtl" style="direction: rtl">
<!--begin::Head-->

<head>
    <base href="">
    <meta charset="utf-8" />
    <title>پنل مدیریت</title>
    <meta name="description" content="Updates and statistics" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!--begin::Fonts-->
{{--    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />--}}
    <!--end::Fonts-->

    <!--begin::Page Vendors Styles(used by this page)-->
    <link href="{{asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.rtl.css')}}?v=7.0.6" rel="stylesheet"
          type="text/css" />
    <!--end::Page Vendors Styles-->


    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{asset('assets/plugins/global/plugins.bundle.rtl.css')}}?v=7.0.6" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/custom/prismjs/prismjs.bundle.rtl.css')}}?v=7.0.6" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/style.bundle.rtl.css')}}?v=7.0.6" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->

    <!--begin::Layout Themes(used by all pages)-->

    <link href="{{asset('assets/css/themes/layout/header/base/light.rtl.css')}}?v=7.0.6" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/themes/layout/header/menu/light.rtl.css')}}?v=7.0.6" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/themes/layout/brand/dark.rtl.css')}}?v=7.0.6" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/themes/layout/aside/dark.rtl.css')}}?v=7.0.6" rel="stylesheet" type="text/css" />

    <link href="{{asset('fonts/css/font.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Layout Themes-->
    @yield('head')

    <link rel="shortcut icon" href="{{asset('festika.svg')}}" />

</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">

<!--begin::Main-->
<!--begin::Header Mobile-->
<div id="kt_header_mobile" class="header-mobile align-items-center  header-mobile-fixed ">
    <!--begin::Logo-->
    <a href="{{route('front_index')}}">
        <img alt="Logo" src="{{asset('festika.svg')}}" />
    </a>
    <!--end::Logo-->

    <!--begin::Toolbar-->
    <div class="d-flex align-items-center">
        <!--begin::Aside Mobile Toggle-->
        <button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
            <span></span>
        </button>
        <!--end::Aside Mobile Toggle-->

        <!--begin::Header Menu Mobile Toggle-->
        <button class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle">
            <span></span>
        </button>
        <!--end::Header Menu Mobile Toggle-->

        <!--begin::Topbar Mobile Toggle-->
        <button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
                <span class="svg-icon svg-icon-xl">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg--><svg
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24" />
                            <path
                                d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                            <path
                                d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                fill="#000000" fill-rule="nonzero" />
                        </g>
                    </svg>
                    <!--end::Svg Icon--></span>
        </button>
        <!--end::Topbar Mobile Toggle-->
    </div>
    <!--end::Toolbar-->
</div>
<!--end::Header Mobile-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">

        <!--begin::Aside-->
        <div class="aside aside-left  aside-fixed  d-flex flex-column flex-row-auto" id="kt_aside">
            <!--begin::Brand-->
            <div class="brand flex-column-auto " id="kt_brand">
                <!--begin::Logo-->
                <a href="{{route('front_index')}}" class="brand-logo align-items-center">
                    <img alt="Logo" src="{{asset('festika.svg')}}" width="40" />
                    <span class="ml-2 text-success font-16">Docmaker</span>
                </a>
                <!--end::Logo-->

                <!--begin::Toggle-->
                <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
                        <span class="svg-icon svg-icon svg-icon-xl">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg--><svg
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <path
                                        d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z"
                                        fill="#000000" fill-rule="nonzero"
                                        transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) " />
                                    <path
                                        d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z"
                                        fill="#000000" fill-rule="nonzero" opacity="0.3"
                                        transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) " />
                                </g>
                            </svg>
                            <!--end::Svg Icon--></span> </button>
                <!--end::Toolbar-->
            </div>
            <!--end::Brand-->

            <!--begin::Aside Menu-->
            <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
                <!--begin::Menu Container-->
                <div id="kt_aside_menu" class="aside-menu my-4 " data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
                    <!--begin::Menu Nav-->
                    <ul class="menu-nav text-iranyekan">
                        @if(auth()->user()->role_id ==1)
                            @include('management.component.admin_menu')

                        @else
                            @include('management.component.panel_menu')

                        @endif
                    </ul>
                    <!--end::Menu Nav-->
                </div>
                <!--end::Menu Container-->
            </div>
            <!--end::Aside Menu-->
        </div>
        <!--end::Aside-->

        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
            <!--begin::Header-->
            <div id="kt_header" class="header  header-fixed ">
                <!--begin::Container-->
                <div class=" container-fluid  d-flex align-items-stretch justify-content-between">
                    <!--begin::Header Menu Wrapper-->
                    <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                        <!--begin::Header Menu-->
                        <div id="kt_header_menu"
                             class="header-menu header-menu-mobile  header-menu-layout-default ">
                            <!--begin::Header Nav-->
                            <ul class="menu-nav ">

                            </ul>
                            <!--end::Header Nav-->
                        </div>
                        <!--end::Header Menu-->
                    </div>
                    <!--end::Header Menu Wrapper-->

                    <!--begin::Topbar-->
                    <div class="topbar">
                        <!--begin::Search-->
                        <div class="dropdown" id="kt_quick_search_toggle">
                            <!--begin::Toggle-->
                            <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                                <div class="btn btn-icon btn-clean btn-lg btn-dropdown mr-1">
                                        <span class="svg-icon svg-icon-xl svg-icon-primary">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg--><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path
                                                        d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                        fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                    <path
                                                        d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                        fill="#000000" fill-rule="nonzero" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon--></span> </div>
                            </div>
                            <!--end::Toggle-->

                            <!--begin::Dropdown-->
                            <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
                                <div class="quick-search quick-search-dropdown" id="kt_quick_search_dropdown">
                                    <!--begin:Form-->
                                    <form method="get" class="quick-search-form">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <span class="svg-icon svg-icon-lg">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg--><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                   fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path
                                                                        d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                                        fill="#000000" fill-rule="nonzero"
                                                                        opacity="0.3" />
                                                                    <path
                                                                        d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                                        fill="#000000" fill-rule="nonzero" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon--></span> </span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Search..." />
                                            <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i
                                                            class="quick-search-close ki ki-close icon-sm text-muted"></i>
                                                    </span>
                                            </div>
                                        </div>
                                    </form>
                                    <!--end::Form-->

                                    <!--begin::Scroll-->
                                    <div class="quick-search-wrapper scroll" data-scroll="true" data-height="325"
                                         data-mobile-height="200">
                                    </div>
                                    <!--end::Scroll-->
                                </div>
                            </div>
                            <!--end::Dropdown-->
                        </div>
                        <!--end::Search-->

                        <!--begin::Notifications-->
                        <div class="dropdown">
                            <!--begin::Toggle-->
                            <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                                <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1 pulse pulse-primary">
                                        <span class="svg-icon svg-icon-xl svg-icon-primary">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Code/Compiling.svg--><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path
                                                        d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z"
                                                        fill="#000000" opacity="0.3" />
                                                    <path
                                                        d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z"
                                                        fill="#000000" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon--></span> <span class="pulse-ring"></span>
                                </div>
                            </div>
                            <!--end::Toggle-->

                            <!--begin::Dropdown-->
                            <div
                                class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
                                <form>
                                    <!--begin::Header-->
                                    <div class="d-flex flex-column pt-12 bgi-size-cover bgi-no-repeat rounded-top" style="background-image: url({{asset('assets/media/misc/bg-1.jpg')}})">
                                        <!--begin::Title-->
                                        <h4 class="d-flex flex-center rounded-top">
                                            <span class="text-white"> اعلانات</span>
                                            <span class="btn btn-text btn-success btn-sm font-weight-bold btn-font-md ml-2">
                                                ۰
                                            </span>
                                        </h4>
                                        <!--end::Title-->

                                        <!--begin::Tabs-->
                                        <ul class="nav nav-bold nav-tabs nav-tabs-line nav-tabs-line-3x nav-tabs-line-transparent-white nav-tabs-line-active-border-success mt-3 px-8"
                                            role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active show" data-toggle="tab"
                                                   href="#topbar_notifications_notifications">جدید</a>
                                            </li>
                                        </ul>
                                        <!--end::Tabs-->
                                    </div>
                                    <!--end::Header-->

                                    <!--begin::Content-->
                                    <div class="tab-content">
                                        <!--begin::Tabpane-->
                                        <div class="tab-pane active show p-8" id="topbar_notifications_notifications" role="tabpanel">
                                            <!--begin::Scroll-->
                                            <div class="scroll pr-7 mr-n7" data-scroll="true" data-height="300"
                                                 data-mobile-height="200">
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-6">


                                                    <!--begin::Text-->
                                                    <div class="d-flex flex-column font-weight-bold">
                                                        <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">
                                                            Cool
                                                            App</a>
                                                        <span class="text-muted">Marketing campaign planning</span>
                                                    </div>
                                                    <!--end::Text-->
                                                </div>

                                            </div>
                                            <!--end::Scroll-->

                                            <!--begin::Action-->
                                            <div class="d-flex flex-center pt-7">
                                                <a href="#" class="btn btn-light-primary font-weight-bold text-center">
                                                    مشاهده همه
                                                </a>
                                            </div>
                                            <!--end::Action-->
                                        </div>
                                    </div>
                                    <!--end::Content-->
                                </form>
                            </div>
                            <!--end::Dropdown-->
                        </div>
                        <!--end::Notifications-->

                        <!--begin::Quick Actions-->
                        <div class="dropdown">
                            <!--begin::Toggle-->
                            <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                                <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1">
                                        <span class="svg-icon svg-icon-xl svg-icon-primary">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg--><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <rect fill="#000000" opacity="0.3" x="13" y="4" width="3"
                                                          height="16" rx="1.5" />
                                                    <rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5" />
                                                    <rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5" />
                                                    <rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon--></span> </div>
                            </div>
                            <!--end::Toggle-->

                            <!--begin::Dropdown-->
                            <div
                                class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
                                <!--begin:Header-->
                                <div class="d-flex flex-column flex-center py-10 bgi-size-cover bgi-no-repeat rounded-top"
                                     style="background-image: url({{asset('assets/media/misc/bg-1.jpg')}})">
                                    <h4 class="text-white font-weight-bold">
                                        دسترسی سریع
                                    </h4>
                                    <span class="btn btn-success btn-sm font-weight-bold font-size-sm mt-2">
                                        یادداشت ها
                                    </span>
                                </div>
                                <!--end:Header-->

                                <!--begin:Nav-->
                                <div class="row row-paddingless">
                                    <!--begin:Item-->
                                    <div class="col-6">
                                        <a href="#"
                                           class="d-block py-10 px-5 text-center bg-hover-light border-right border-bottom">
                                                <span class="svg-icon svg-icon-3x svg-icon-success">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Euro.svg--><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                           fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path
                                                                d="M4.3618034,10.2763932 L4.8618034,9.2763932 C4.94649941,9.10700119 5.11963097,9 5.30901699,9 L15.190983,9 C15.4671254,9 15.690983,9.22385763 15.690983,9.5 C15.690983,9.57762255 15.6729105,9.65417908 15.6381966,9.7236068 L15.1381966,10.7236068 C15.0535006,10.8929988 14.880369,11 14.690983,11 L4.80901699,11 C4.53287462,11 4.30901699,10.7761424 4.30901699,10.5 C4.30901699,10.4223775 4.32708954,10.3458209 4.3618034,10.2763932 Z M14.6381966,13.7236068 L14.1381966,14.7236068 C14.0535006,14.8929988 13.880369,15 13.690983,15 L4.80901699,15 C4.53287462,15 4.30901699,14.7761424 4.30901699,14.5 C4.30901699,14.4223775 4.32708954,14.3458209 4.3618034,14.2763932 L4.8618034,13.2763932 C4.94649941,13.1070012 5.11963097,13 5.30901699,13 L14.190983,13 C14.4671254,13 14.690983,13.2238576 14.690983,13.5 C14.690983,13.5776225 14.6729105,13.6541791 14.6381966,13.7236068 Z"
                                                                fill="#000000" opacity="0.3" />
                                                            <path
                                                                d="M17.369,7.618 C16.976998,7.08599734 16.4660031,6.69750122 15.836,6.4525 C15.2059968,6.20749878 14.590003,6.085 13.988,6.085 C13.2179962,6.085 12.5180032,6.2249986 11.888,6.505 C11.2579969,6.7850014 10.7155023,7.16999755 10.2605,7.66 C9.80549773,8.15000245 9.45550123,8.72399671 9.2105,9.382 C8.96549878,10.0400033 8.843,10.7539961 8.843,11.524 C8.843,12.3360041 8.96199881,13.0779966 9.2,13.75 C9.43800119,14.4220034 9.7774978,14.9994976 10.2185,15.4825 C10.6595022,15.9655024 11.1879969,16.3399987 11.804,16.606 C12.4200031,16.8720013 13.1129962,17.005 13.883,17.005 C14.681004,17.005 15.3879969,16.8475016 16.004,16.5325 C16.6200031,16.2174984 17.1169981,15.8010026 17.495,15.283 L19.616,16.774 C18.9579967,17.6000041 18.1530048,18.2404977 17.201,18.6955 C16.2489952,19.1505023 15.1360064,19.378 13.862,19.378 C12.6999942,19.378 11.6325049,19.1855019 10.6595,18.8005 C9.68649514,18.4154981 8.8500035,17.8765035 8.15,17.1835 C7.4499965,16.4904965 6.90400196,15.6645048 6.512,14.7055 C6.11999804,13.7464952 5.924,12.6860058 5.924,11.524 C5.924,10.333994 6.13049794,9.25950479 6.5435,8.3005 C6.95650207,7.34149521 7.5234964,6.52600336 8.2445,5.854 C8.96550361,5.18199664 9.8159951,4.66400182 10.796,4.3 C11.7760049,3.93599818 12.8399943,3.754 13.988,3.754 C14.4640024,3.754 14.9609974,3.79949954 15.479,3.8905 C15.9970026,3.98150045 16.4939976,4.12149906 16.97,4.3105 C17.4460024,4.49950095 17.8939979,4.7339986 18.314,5.014 C18.7340021,5.2940014 19.0909985,5.62999804 19.385,6.022 L17.369,7.618 Z"
                                                                fill="#000000" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon--></span> <span
                                                class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">Accounting</span>
                                            <span class="d-block text-dark-50 font-size-lg">eCommerce</span>
                                        </a>
                                    </div>
                                    <!--end:Item-->

                                    <!--begin:Item-->
                                    <div class="col-6">
                                        <a href="#"
                                           class="d-block py-10 px-5 text-center bg-hover-light border-bottom">
                                                <span class="svg-icon svg-icon-3x svg-icon-success">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-attachment.svg--><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                           fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path
                                                                d="M14.8571499,13 C14.9499122,12.7223297 15,12.4263059 15,12.1190476 L15,6.88095238 C15,5.28984632 13.6568542,4 12,4 L11.7272727,4 C10.2210416,4 9,5.17258756 9,6.61904762 L10.0909091,6.61904762 C10.0909091,5.75117158 10.823534,5.04761905 11.7272727,5.04761905 L12,5.04761905 C13.0543618,5.04761905 13.9090909,5.86843034 13.9090909,6.88095238 L13.9090909,12.1190476 C13.9090909,12.4383379 13.8240964,12.7385644 13.6746497,13 L10.3253503,13 C10.1759036,12.7385644 10.0909091,12.4383379 10.0909091,12.1190476 L10.0909091,9.5 C10.0909091,9.06606198 10.4572216,8.71428571 10.9090909,8.71428571 C11.3609602,8.71428571 11.7272727,9.06606198 11.7272727,9.5 L11.7272727,11.3333333 L12.8181818,11.3333333 L12.8181818,9.5 C12.8181818,8.48747796 11.9634527,7.66666667 10.9090909,7.66666667 C9.85472911,7.66666667 9,8.48747796 9,9.5 L9,12.1190476 C9,12.4263059 9.0500878,12.7223297 9.14285008,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L14.8571499,13 Z"
                                                                fill="#000000" opacity="0.3" />
                                                            <path
                                                                d="M9,10.3333333 L9,12.1190476 C9,13.7101537 10.3431458,15 12,15 C13.6568542,15 15,13.7101537 15,12.1190476 L15,10.3333333 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9,10.3333333 Z M10.0909091,11.1212121 L12,12.5 L13.9090909,11.1212121 L13.9090909,12.1190476 C13.9090909,13.1315697 13.0543618,13.952381 12,13.952381 C10.9456382,13.952381 10.0909091,13.1315697 10.0909091,12.1190476 L10.0909091,11.1212121 Z"
                                                                fill="#000000" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon--></span> <span
                                                class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">Administration</span>
                                            <span class="d-block text-dark-50 font-size-lg">Console</span>
                                        </a>
                                    </div>
                                    <!--end:Item-->

                                    <!--begin:Item-->
                                    <div class="col-6">
                                        <a href="#"
                                           class="d-block py-10 px-5 text-center bg-hover-light border-right">
                                                <span class="svg-icon svg-icon-3x svg-icon-success">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Box2.svg--><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                           fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path
                                                                d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z"
                                                                fill="#000000" />
                                                            <path
                                                                d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z"
                                                                fill="#000000" opacity="0.3" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon--></span> <span
                                                class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">Projects</span>
                                            <span class="d-block text-dark-50 font-size-lg">Pending Tasks</span>
                                        </a>
                                    </div>
                                    <!--end:Item-->

                                    <!--begin:Item-->
                                    <div class="col-6">
                                        <a href="#" class="d-block py-10 px-5 text-center bg-hover-light">
                                                <span class="svg-icon svg-icon-3x svg-icon-success">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg--><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                           fill-rule="evenodd">
                                                            <polygon points="0 0 24 0 24 24 0 24" />
                                                            <path
                                                                d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                            <path
                                                                d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                                                fill="#000000" fill-rule="nonzero" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon--></span> <span
                                                class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">Customers</span>
                                            <span class="d-block text-dark-50 font-size-lg">Latest cases</span>
                                        </a>
                                    </div>
                                    <!--end:Item-->
                                </div>
                                <!--end:Nav-->
                            </div>
                            <!--end::Dropdown-->
                        </div>
                        <!--end::Quick Actions-->



                        <!--begin::User-->
                        <div class="topbar-item">
                            <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                                <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">{{auth()->user()->name}}</span>
                                <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
                                    <span class="symbol-label font-size-h5 font-weight-bold">
                                        <img width="40" src="{{user_profile_image()}}" alt="">
                                    </span>
                                </span>
                            </div>
                        </div>
                        <!--end::User-->
                    </div>
                    <!--end::Topbar-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Header-->

            <!--begin::Content-->
            <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
                <!--begin::Subheader-->
                <div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
                    <div
                        class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                        <!--begin::Info-->
                        <div class="d-flex align-items-center flex-wrap mr-2">

                            <!--begin::Page Title-->
                            <h5 class="text-dark font-weight-bold mr-4 ml-4">

                                @yield('main_title')

                                <i class="fa fa-arrow-left text-primary"></i>
                            </h5>
                            <h6>@yield('sub_title')</h6>

                        </div>

                    </div>
                </div>
                <!--end::Subheader-->

                <!--begin::Entry-->
                <div class="d-flex flex-column-fluid">
                    <!--begin::Container-->
                    <div class="container-fluid">
                        @include('includes.panel_errors')
                        @yield('content')
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Entry-->
            </div>
            <!--end::Content-->
            <!--begin::Footer-->
            <div class="footer bg-white py-4 d-flex flex-lg-column " id="kt_footer">
                <!--begin::Container-->
                <div
                    class=" container-fluid  d-flex flex-column flex-md-row align-items-center justify-content-between">
                    <!--begin::Copyright-->
                    <div class="text-dark order-2 order-md-1">
                        <a href="{{route('front_index')}}" target="_blank"
                           class="text-dark-75 text-hover-primary">پنل مدیریت {{env('APP_NAME')}}</a>
                    </div>
                    <!--end::Copyright-->

                    <!--begin::Nav-->
                    <div class="nav nav-dark">
                        <a href="http://mehdikord.ir">
                            (MehdiKord)
                        </a>
                    </div>
                    <!--end::Nav-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Main-->





<!-- begin::User Panel-->
<div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
    <!--begin::Header-->
    <div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
        <h3 class="font-weight-bold m-0">
            حساب کاربری
            {{--            <small class="text-muted font-size-sm ml-2">12 messages</small>--}}
        </h3>
        <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
            <i class="ki ki-close icon-xs text-muted"></i>
        </a>
    </div>
    <!--end::Header-->

    <!--begin::Content-->
    <div class="offcanvas-content pr-5 mr-n5">
        <!--begin::Header-->
        <div class="d-flex align-items-center mt-5">
            <div class="symbol symbol-100 mr-5">
                <div class="symbol-label" style="background-image:url({{user_profile_image()}})"></div>
                <i class="symbol-badge bg-success"></i>
            </div>
            <div class="d-flex flex-column">
                <a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">
                    {{auth()->user()->name}}
                </a>
                <div class="text-muted mt-2">
                    {{auth()->user()->phone}}
                </div>
                <div class="navi mt-2">
                    <a href="#" class="navi-item">
                            <span class="navi-link p-0 pb-2">
                                <span class="navi-icon mr-1">
                                    <span class="svg-icon svg-icon-lg svg-icon-primary">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg--><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path
                                                    d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z"
                                                    fill="#000000" />
                                                <circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon--></span> </span>
                                <span class="navi-text text-muted text-hover-primary">{{auth()->user()->email}}</span>
                            </span>
                    </a>

                    <a href="{{route('logout')}}" class="btn btn-sm btn-light-danger font-weight-bolder py-2 px-5"> خروج از حساب</a>
                </div>
            </div>
        </div>
        <!--end::Header-->

        <!--begin::Separator-->
        <div class="separator separator-dashed mt-8 mb-5"></div>
        <!--end::Separator-->

        <!--begin::Nav-->
        <div class="navi navi-spacer-x-0 p-0">
            <!--begin::Item-->
            <a href="custom/apps/user/profile-1/personal-information.html" class="navi-item">
                <div class="navi-link">
                    <div class="symbol symbol-40 bg-light mr-3">
                        <div class="symbol-label">
                                <span class="svg-icon svg-icon-md svg-icon-success">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/Notification2.svg--><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z"
                                                fill="#000000" />
                                            <circle fill="#000000" opacity="0.3" cx="18.5" cy="5.5" r="2.5" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon--></span> </div>
                    </div>
                    <div class="navi-text">
                        <div class="font-weight-bold">
                            حساب کاربری
                        </div>
                        <div class="text-muted">
                            تنظیمات اطلاعات حساب کاربری

                        </div>
                    </div>
                </div>
            </a>
            <!--end:Item-->

            <!--begin::Item-->
            <a href="custom/apps/user/profile-3.html" class="navi-item">
                <div class="navi-link">
                    <div class="symbol symbol-40 bg-light mr-3">
                        <div class="symbol-label">
                            <span class="svg-icon svg-icon-md svg-icon-warning">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <rect fill="#000000" opacity="0.3" x="12" y="4" width="3" height="13"
                                                  rx="1.5" />
                                            <rect fill="#000000" opacity="0.3" x="7" y="9" width="3" height="8"
                                                  rx="1.5" />
                                            <path
                                                d="M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z"
                                                fill="#000000" fill-rule="nonzero" />
                                            <rect fill="#000000" opacity="0.3" x="17" y="11" width="3" height="6"
                                                  rx="1.5" />
                                        </g>
                                    </svg>
                            </span>
                        </div>
                    </div>
                    <div class="navi-text">
                        <div class="font-weight-bold">
                            پیام ها
                        </div>
                        <div class="text-muted">
                            همه پیام ها و اعلانات
                        </div>
                    </div>
                </div>
            </a>
            <!--end:Item-->

            <!--begin::Item-->
            <a href="custom/apps/user/profile-2.html" class="navi-item">
                <div class="navi-link">
                    <div class="symbol symbol-40 bg-light mr-3">
                        <div class="symbol-label">
                            <span class="svg-icon svg-icon-md svg-icon-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24" />
                                        <path d="M4.85714286,1 L11.7364114,1 C12.0910962,1 12.4343066,1.12568431 12.7051108,1.35473959 L17.4686994,5.3839416 C17.8056532,5.66894833 18,6.08787823 18,6.52920201 L18,19.0833333 C18,20.8738751 17.9795521,21 16.1428571,21 L4.85714286,21 C3.02044787,21 3,20.8738751 3,19.0833333 L3,2.91666667 C3,1.12612489 3.02044787,1 4.85714286,1 Z M8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 L15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 L8,12 Z M8,16 C7.44771525,16 7,16.4477153 7,17 C7,17.5522847 7.44771525,18 8,18 L11,18 C11.5522847,18 12,17.5522847 12,17 C12,16.4477153 11.5522847,16 11,16 L8,16 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                        <path d="M6.85714286,3 L14.7364114,3 C15.0910962,3 15.4343066,3.12568431 15.7051108,3.35473959 L20.4686994,7.3839416 C20.8056532,7.66894833 21,8.08787823 21,8.52920201 L21,21.0833333 C21,22.8738751 20.9795521,23 19.1428571,23 L6.85714286,23 C5.02044787,23 5,22.8738751 5,21.0833333 L5,4.91666667 C5,3.12612489 5.02044787,3 6.85714286,3 Z M8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 L15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 L8,12 Z M8,16 C7.44771525,16 7,16.4477153 7,17 C7,17.5522847 7.44771525,18 8,18 L11,18 C11.5522847,18 12,17.5522847 12,17 C12,16.4477153 11.5522847,16 11,16 L8,16 Z" fill="#000000" fill-rule="nonzero" />
                                    </g>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="navi-text">
                        <div class="font-weight-bold">
                            فعالیت ها
                        </div>
                        <div class="text-muted">
                            همه فعالیت های انجام شده
                        </div>
                    </div>
                </div>
            </a>
            <!--end:Item-->

            <!--begin::Item-->
            <a href="custom/apps/userprofile-1/overview.html" class="navi-item">
                <div class="navi-link">
                    <div class="symbol symbol-40 bg-light mr-3">
                        <div class="symbol-label">
                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M7.5,5 C7.22385763,5 7,5.22385763 7,5.5 C7,5.77614237 7.22385763,6 7.5,6 L13.5,6 C13.7761424,6 14,5.77614237 14,5.5 C14,5.22385763 13.7761424,5 13.5,5 L7.5,5 Z M7.5,7 C7.22385763,7 7,7.22385763 7,7.5 C7,7.77614237 7.22385763,8 7.5,8 L10.5,8 C10.7761424,8 11,7.77614237 11,7.5 C11,7.22385763 10.7761424,7 10.5,7 L7.5,7 Z"
                                                fill="#000000" opacity="0.3" />
                                            <path
                                                d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z"
                                                fill="#000000" />
                                        </g>
                                    </svg>
                            </span>
                        </div>
                    </div>
                    <div class="navi-text">
                        <div class="font-weight-bold">
                            یادداشت ها
                        </div>
                        <div class="text-muted">
                            نوشته ها و یادداشت ها
                        </div>
                    </div>
                </div>
            </a>
            <!--end:Item-->
        </div>
        <!--end::Nav-->

        <!--begin::Separator-->
        <div class="separator separator-dashed my-7"></div>
        <!--end::Separator-->


    </div>
    <!--end::Content-->
</div>
<!-- end::User Panel-->


<div id="kt_scrolltop" class="scrolltop">
        <span class="svg-icon">
            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                 viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <polygon points="0 0 24 0 24 24 0 24" />
                    <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
                    <path
                        d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z"
                        fill="#000000" fill-rule="nonzero" />
                </g>
            </svg>
            <!--end::Svg Icon-->
        </span>
</div>

<!--begin::Global Config(global config for global JS scripts)-->
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

<!--begin::Page Vendors(used by this page)-->
<script src="{{asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}?v=7.0.6"></script>
<!--end::Page Vendors-->

<!--begin::Page Scripts(used by this page)-->
<script src="{{asset('assets/js/pages/widgets.js')}}?v=7.0.6"></script>
<!--end::Page Scripts-->

@include('includes.alert_message')
@include('includes.front_simple_message')

@yield('script')


</body>
<!--end::Body-->

</html>
