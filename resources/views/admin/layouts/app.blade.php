<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--begin::Theme Color-->
    <meta name="theme-color" content="#27293d">
    <!--end::Theme Color-->

    <!--begin::Favicons-->

    <link rel="apple-touch-icon" href="{{asset("assets/images/favicons/apple-touch-icon.png")}}" sizes="180x180">
    <link rel="icon" href="{{asset("assets/images/favicons/sw.png")}}" sizes="32x32" type="image/png">
    <link rel="icon" href="{{asset("assets/images/favicons/favicon-16x16.png")}}" sizes="16x16" type="image/png">
    <link rel="mask-icon" href="{{asset("assets/images/favicons/safari-pinned-tab.svg")}}" color="#7952b3">
    <link rel="icon" href="{{asset("assets/images/favicons/favicon.ico")}}">

    <!--end::Favicons-->

    <!--begin::Style-->

    @vite(['resources/sass/admin.scss'])
{{--    <link rel="stylesheet" href="assets/css/app.min.css">--}}
{{--    <link rel="stylesheet" href="assets/vendor/c3/c3.min.css">--}}
{{--    <link rel="stylesheet" href="assets/vendor/select-ui/select-ui.min.css">--}}
{{--    <link rel="stylesheet" href="assets/css/animate.min.css">--}}
{{--    <link rel="stylesheet" href="assets/vendor/sweetalert/sweetalert2.min.css">--}}

    <!--begin::Custom Style-->
{{--    <link rel="stylesheet" href="assets/css/custom.css">--}}
    <!--end::Custom Style-->

    <!--end::Style-->

    <!--begin:: Font && Icons-->
{{--    <link rel="stylesheet" href="assets/fonts/remixicon/remixicon.css">--}}
    <!--end:: Font && Icons-->

    <title>پنل مدیریت</title>

</head>
<body>


<!--begin::Sidebar-->
<div class="sidebar__nav">
    <span class="bars d-none px-4"></span>
    <div class="navbar-brand d-flex justify-content-center">
        <a class=" d-inline-block my-3 sidebar__logo" href="">
            <img class="img-fluid" src="{{asset('assets/images/logo-dark.svg')}}" alt="">
        </a>
    </div>
    <ul>
        <li class="item-li i-dashboard"><a href="index.html">پیشخوان</a></li>

        <li class="item-li i-courses has-sub-ui"><a class="has-arrow-ui" href="#">دوره ها</a>
            <ul class="collapse show">
                <li><a href="create-new-course.html">ایجاد محصول</a></li>
                <li><a href="courses.html">لیست محصول</a></li>
            </ul>
        </li>

        <li class="item-li i-users has-sub-ui"><a class="has-arrow-ui" href="#"> کاربران</a>
            <ul class="collapse show">
                <li><a href="">لیست کاربران</a></li>
            </ul>
        </li>
        <li class="item-li i-user-permissions has-sub-ui"><a class="has-arrow-ui" href="#"> مدیریت کاربران</a>
            <ul class="collapse show">
                <li class="i-roles"><a href="roles-list.html">نقش های کاربری</a></li>
                <li class="i-permissions"><a href="">مجوز ها</a></li>
            </ul>
        </li>
        <li class="item-li i-categories"><a href="categories.html">دسته بندی ها</a></li>
        <li class="item-li i-slideshow"><a href="slideshow.html">اسلایدشو</a></li>
        <li class="item-li i-banners"><a href="banners.html">بنر ها</a></li>
        <li class="item-li i-articles"><a href="articles.html">مقالات</a></li>
        <li class="item-li i-ads"><a href="ads.html">تبلیغات</a></li>
        <li class="item-li i-comments"><a href="comments.html"> نظرات</a></li>
        <li class="item-li i-tickets"><a href="tickets.html"> تیکت ها</a></li>
        <li class="item-li i-discounts"><a href="discounts.html">تخفیف ها</a></li>
        <li class="item-li i-transactions"><a href="transactions.html">تراکنش ها</a></li>
        <li class="item-li i-checkouts"><a href="checkouts.html">تسویه حساب ها</a></li>
        <li class="item-li i-notification__management"><a href="notification-management.html">مدیریت اطلاع رسانی</a>
        </li>

        <li class="item-li i-web-apps has-sub-ui"><a class="has-arrow-ui" href="#"> وب اپلیکشن ها</a>
            <ul class="collapse show">
                <li class="i-email"><a href="email-box.html"> ایمیل</a></li>
                <li class="i-messenger"><a href="">پیامرسان</a></li>
            </ul>
        </li>


        <li class="item-li i-setting"><a href="notification-management.html">تنظیمات</a>
        </li>
        <li class="item-li i-user__inforamtion"><a href="profile.html">اطلاعات کاربری</a></li>

    </ul>
</div>
<!--end::Sidebar-->
<div class="content">
    <!--begin::Header-->
    <div class="header-ui d-flex item-center w-100 side-header">
        <div class="header__right d-flex flex-grow-1 align-items-center">
            <span class="bars"></span>
        </div>
        <div class="header__left d-flex flex-end align-items-center">

            <!--begin::Profile-->
            <div class="profile-content-ui position-relative mr-3">
                <div class="profile-content__thumb" data-bs-auto-close="outside" aria-expanded="false" data-bs-offset="0,15">
                    <img class="img-fluid" src="assets/images/150-2.jpg" alt="">
                </div>
            </div>
            <!--end::Profile-->

        </div>
    </div>
    <!--end::Header-->
    <!--begin::Main Content-->
    <div class="main-content">
        @yield('content')
    </div>
    <!--end::Main Content-->
</div>


<!--begin::Scripts-->
@vite(['resources/js/admin.js'])

{{--<script src="{{ @vite('assets/js/jquery-3.6.0.min.js') }}"></script><!-- Jquery -->--}}
{{--<script src="assets/js/app.bundle.min.js"></script><!-- App Js -->--}}
{{--<script src="assets/vendor/select-ui/select-ui.min.js"></script><!-- select Plugin Js -->--}}
{{--<script src="assets/bundles/c3.bundle.js"></script><!-- charts Plugin Js -->--}}
{{--<script src="assets/vendor/sweetalert/sweetalert2.all.min.js"></script><!-- sweetalert Plugin Js -->--}}
{{--<script src="assets/js/custom.js"></script><!-- Custom Js -->--}}
<!--end::Scripts-->
</body>
</html>
