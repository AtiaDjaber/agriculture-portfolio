@extends('layouts.welcome')
@section('content')

    <div class="banner1">
        <div class="container">
            <div class="w3_agileits_banner_main_grid">
                @include('components.logo')
                @include('components.social')
                @include('components.menu')
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <div class="breadcrumbs">
        <div class="container">
            <div class="w3layouts_breadcrumbs_left">
                <ul>
                    <li><i class="fa fa-home" style="color: #a0d034;" aria-hidden="true"></i><a href="/"><span
                                style="color: rgb(85, 84, 84)">الرئيسية</span></a>
                    </li>
                    <span>/</span>
                    <li><i class="fa-solid fa-briefcase" style="color: #a0d034;" aria-hidden="true"></i><a
                            href="/studies-office"><span style="color: rgb(85, 84, 84)">مكتب الدراسات </span></a>
                    </li>
                </ul>
            </div>
            <div class="w3layouts_breadcrumbs_right">
                <h3>مكتب الدراسات</h3>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="my-5">
        <h3 class="agileits_w3layouts_head " style="font-size: 1.6rem"><span style="font-size: 1.6rem"> مكتب الدراسات
            </span>
            <div style="color: grey"></div>STUDIES OFFICE
        </h3>
        <div class="w3_agile_image">
            <img src="/images/1.png" alt=" " class="img-responsive" />
        </div>
    </div>
    <div style="background-color: rgb(250 255 250);" class="d-flex flex-wrap-reverse align-items-center p-3">
        <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 " data-aos="fade-left">
            <h1 class="pt-2" style="font-weight: bold;color:#a4dd25">استشارات فلاحية</h1>
            <h4 class="pt-2 subtitle">مرافقة وتوجيه الفلاح في حل المشاكل الادارية والتقنية من البداية.</h4>
        </div>
        <img class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 " data-aos="fade-right" style="padding-inline: 0px;"
            src="/images/studies.jpg">
    </div>
    <div style="background-color: rgb(250 255 250);" class="d-flex flex-wrap align-items-center p-3">
        <img class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 " data-aos="fade-left" style="padding-inline: 0px;"
            src="/images/Premium Agribusiness Consulting Service.jpg">
        <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 " data-aos="fade-right">
            <h1 class="pt-2" style="font-weight: bold;color:#a4dd25">متابعات ميدانية</h1>
            <h4 class="pt-2 subtitle">متابعة جميع مراحل نمو وتشخيص تطورات المحاصيل الكبرى وكذلك بساتين الاشجار المثمرة والنخيل والمحاصيل المحمية والحقلية. ومكافحة الافات .</h4>
        </div>
    </div>

    <div style="background-color: rgb(250 255 250);" class="d-flex flex-wrap-reverse align-items-center p-3">
        <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 " data-aos="fade-left">
            <h1 class="pt-2" style="font-weight: bold;color:#a4dd25">دراسة ملفات الدعم</h1>
            <h4 class="pt-2 subtitle">تحضير ملفات الدعم الفلاحي ENSEJ , CNAC , ENJEM و متابعة قروض التحدي و الرفيق.</h4>
        </div>
        <img class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 " data-aos="fade-right" style="padding-inline: 0px;"
            src="/images/studies.jpg">
    </div>
    <div style="background-color: rgb(250 255 250);" class="d-flex flex-wrap align-items-center p-3">
        <img class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 " data-aos="fade-left" style="padding-inline: 0px;"
            src="/images/projects.jpg">
        <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 " data-aos="fade-right">
            <h1 class="pt-2" style="font-weight: bold;color:#a4dd25">دراسة المشاريع</h1>
            <h4 class="pt-2 subtitle">دراسة جدوى للمشاريع الفلاحية وتحضير الملفات ومتابعتها اداريا ( دراسات شاملة ،مخططات ،تحديد الموقع..).</h4>
        </div>
    </div>




    <style>
        .border-success {
            border-color: #23825687 !important;
        }
    </style>
@endsection
