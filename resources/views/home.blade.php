@extends('layouts.welcome')

@section('content')
    <div class="banner">
        <div class="container">
            <div class="w3_agileits_banner_main_grid">

                @include('components.logo')
                @include('components.social')

                @include('components.menu')
                <div class="clearfix"> </div>
            </div>
            <div class="w3_banner_info">
                <div class="w3_banner_info_grid">
                    <h3 class="test"> شركة صقر متعددة الخدمات </h3>
                    <h3 class="test"> Sagr Eurl Multi Service </h3>
                    <p style="font-size: 1rem;color:aliceblue">شركة صقر الرائدة في مجال الخدمات الفلاحية و تقديم الاستشارات</p>
                    <ul>
                        <li><a href="contact" class="w3ls_more">اتصل بنا</a></li>
                    </ul>
                </div>
            </div>
            <div class="thim-click-to-bottom">
                <a href="#welcome_bottom" class="scroll">
                    <i style="color: white" class="fa  fa-chevron-down"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- banner-bottom -->
    <div class="banner-bottom">
        <div class="col-md-4 agileits_banner_bottom_left ">
            <div class="agileinfo_banner_bottom_pos">
                <div class="w3_agileits_banner_bottom_pos_grid">
                    <div class="col-xs-4 wthree_banner_bottom_grid_left">
                        <div class="agile_banner_bottom_grid_left_grid hvr-radial-out">
                            <i class="fa-solid fa-certificate" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col-xs-8 wthree_banner_bottom_grid_right">
                        <h4 style="font-weight:bold ">مكتب الدراسات</h4>
                        <p>تقديم استشارات من طرف فريق من الخبراء في المجال</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 agileits_banner_bottom_left1">
            <div class="agileinfo_banner_bottom_pos">
                <div class="w3_agileits_banner_bottom_pos_grid">
                    <div class="col-xs-4 wthree_banner_bottom_grid_left">
                        <div class="agile_banner_bottom_grid_left_grid hvr-radial-out">
                            <i class="fa-brands fa-product-hunt" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col-xs-8 wthree_banner_bottom_grid_right">
                        <h4 style="font-weight:bold ">منتجات فلاحية</h4>
                        <p>نقدم الأدوية الفلاحية المناسبة لك ذات الجودة العالية</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 agileits_banner_bottom_left2">
            <div class="agileinfo_banner_bottom_pos">
                <div class="w3_agileits_banner_bottom_pos_grid">
                    <div class="col-xs-4 wthree_banner_bottom_grid_left">
                        <div class="agile_banner_bottom_grid_left_grid hvr-radial-out">
                            <i class="fa-brands fa-buffer" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col-xs-8 wthree_banner_bottom_grid_right">
                        <h4 style="font-weight:bold ">خدمات فلاحية</h4>
                        <p>تطوير و تحسين الأراضي الفلاحية و إعادة تهيئتها</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    
    <div class="my-5">
        <h3 class="agileits_w3layouts_head "><span style="font-size: 1.6rem;font-weight:bold"> خدماتنا </span>
            <div style="color: grey;font-weight:bold;font-size: 1.6rem"></div> OUR SERVICES
        </h3>
        <div class="w3_agile_image">
            <img src="/images/1.png" alt=" " class="img-responsive" />
        </div>
    </div>

    <div style="background-color: rgb(250 255 250);" class="d-flex flex-wrap align-items-center p-3">
        <img class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 "
         data-aos="fade-left"
            src="/images/Farming-260468-pixahive.jpg">
        <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 "
         data-aos="fade-right"
         >
            <h1 class="pt-2" style="font-weight: bold;color:#a4dd25">تهيئة الأراضي الفلاحية</h1>
            <h4 class="pt-2 subtitle">توفير كافة الظروف للزراعة</h4>
        </div>
    </div>

    <div style="background-color: rgb(250 255 250);" class="d-flex flex-wrap-reverse align-items-center p-3">
        <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 " data-aos="fade-left">
            <h1 class="pt-2" style="font-weight: bold;color:#a4dd25">عمليات التسميد</h1>
            <h4 class="pt-2 subtitle">استخدام مواد تسميد ذات جدوة عالية بطرق حديثة</h4>
        </div>
        <img class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 " data-aos="fade-right" style="padding-inline: 0px;"
            src="/images/fertilizer-rates.jpg">
    </div>

    <div style="background-color: rgb(250 255 250);" class="d-flex flex-wrap align-items-center p-3">
        <img class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 " data-aos="fade-left" style="padding-inline: 0px;"
            src="/images/Crop Protection_Web.jpg">
        <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 " data-aos="fade-right">
            <h1 class="pt-2" style="font-weight: bold;color:#8bc052">عمليات الرش بالادوية</h1>
            <h4 class="pt-2 subtitle">خبرة كبيرة في رش الاودية</h4>
        </div>
    </div>

    <div style="background-color: rgb(250 255 250);" class="d-flex flex-wrap-reverse align-items-center p-3">
        <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 " data-aos="fade-left">
            <h1 class="pt-2" style="font-weight: bold;color:#a4dd25">عمليات الحصاد</h1>
            <h4 class="pt-2 subtitle">توفير فريق عمل سريع و احترافي</h4>
        </div>
        <img class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 " data-aos="fade-right" style="padding-inline: 0px;"
            src="/images/use-case-agriculture-1.jpg">
    </div>

    <div style="background-color: rgb(250 255 250);" class="d-flex flex-wrap align-items-center p-3">
        <img class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 " data-aos="fade-left" style="padding-inline: 0px;"
            src="/images/machinery.jpg">
        <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 " data-aos="fade-right">
            <h1 class="pt-2" style="font-weight: bold;color:#a4dd25">كراء العتاد الفلاحي</h1>
            <h4 class="pt-2 subtitle">توفير عتاد الفلاحية بكافة انواعه لزيادة الانتاجية و السرعة في الاداء</h4>
        </div>
    </div>

    <!-- //analytic-work -->
    <div class="about-area mt-85 my-5">
        <div class="container">
            <div class="row">
                <div class="d-flex justify-content-center my-3">
                    <div class="section-title text-center">
                        <h1 style="color: #a4dd25">لماذا تختارنا ؟</h1>
                        <p class="style-2" style="font-size: 1.2rem">تمتلك شركتنا خبرة كبيرة في مجال الفلاحة وتهيئة الأراضي الفلاحية وتوفير كافة الظروف لنجاح مشروعك
                        </p>
                    </div>
                </div>
                <div class="row justify-content-center mt-2">
                    <div class="col-lg-4 col-md-6 col-sm-12 my-2">
                        <div class="sin-service style-2">
                            <i class="fa-regular fa-gauge-max"></i>
                             <i style="color: #a4dd25;font-size: 2rem"  class="mb-3 fa-regular fa-circle-check"></i>
                            <h3 style="color: #313131;font-weight:500;">الثقة</h3>
                            <p>الشعور بالراحة و الأمان</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 my-2">
                        <div class="sin-service style-2">
                            <i style="color: #a4dd25;font-size: 2rem"  class="mb-3 fa-regular fa-bookmark"></i>
                            <h3 style="color: #313131;font-weight:500;">الجودة</h3>
                            <p>الحصول على نتائج جيدة جدا</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 my-2">
                        <div class="sin-service style-2">
                              <i style="color: #a4dd25;font-size: 2rem"  class="mb-3 fa-regular fa-thumbs-up"></i>
                            <h3 style="color: #313131;font-weight:500;">السرعة</h3>
                            <p>نعمل بأقصى طاقتنا لإنجاح مشروعك</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="counterUp-area my-5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 my-1">
                        <div class="single-counter">
                            <h4 class="counter">+5</h4>
                            <h4 style="color: #535353">مشاريع</h4>
                        </div>
                    </div>
                    <div class="col-sm-3 my-1">
                        <div class="single-counter">
                            <h4 class="counter">13</h4>
                            <h4 style="color: #535353">زبائن</h4>
                        </div>
                    </div>
                    <div class="col-sm-3 my-1">
                        <div class="single-counter">
                            <h4 class="counter">+250</h4>
                            <h4 style="color: #535353">منتجات</h4>
                        </div>
                    </div>
                    <div class="col-sm-3 my-1">
                        <div class="single-counter">
                            <h4 class="counter">+23</h4>
                            <h4 style="color: #535353">العتاد</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div id="welcome_bottom" class="welcome-bottom">
        <div class="col-md-6 wthree_welcome_bottom_left">
            <h3 style="color: #a4dd25;font-weight:bold">شركتنا تعمل بجد من أجل خدمتكم</h3>

            <div class="col-md-6 wthree_welcome_bottom_left_grid" data-aos="zoom-in">
                <div class="w3l_social_icon_gridl" style="background-color:#a4dd25">
                    <img src="images/8.png" alt=" " class="img-responsive" />
                </div>
                <div class="w3l_social_icon_gridr">
                    <h4 class="counter">23</h4>
                </div>
                <div class="clearfix"> </div>

            </div>
            <div class="col-md-6 wthree_welcome_bottom_left_grid" data-aos="zoom-in">
                <div class="w3l_social_icon_gridl">
                    <img src="images/9.png" alt=" " class="img-responsive" />
                </div>
                <div class="w3l_social_icon_gridr">
                    <h4 class="counter">5234</h4>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-6 wthree_welcome_bottom_left_grid" data-aos="zoom-in">
                <div class="w3l_social_icon_gridl">
                    <img src="images/10.png" alt=" " class="img-responsive" />
                </div>
                <div class="w3l_social_icon_gridr">
                    <h4 class="counter">468</h4>
                </div>
                <div class="clearfix"> </div>

            </div>
            <div class="col-md-6 wthree_welcome_bottom_left_grid " data-aos="zoom-in">
                <div class="w3l_social_icon_gridl">
                    <img src="images/11.png" alt=" " class="img-responsive" />
                </div>
                <div class="w3l_social_icon_gridr">
                    <h4 class="counter">122</h4>
                </div>
                <div class="clearfix"> </div>

            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="col-md-6 wthree_welcome_bottom_right " data-aos="zoom-in">
            <div class="agileinfo_grid " style="height: 100%">
                <figure class="agileits_effect_moses ">
                    <img src="images/4.jpg" alt=" " class="img-responsive" />
                    <figcaption>
                        <h4>Plantation <span>For Future Growth</span></h4>
                        <p>Nullam in luctus lectus. Mauris lobortis dui mauris, non vestibulum
                            magna blandit at scelerisque tellus ipsum nec ipsum.</p>
                    </figcaption>
                </figure>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div> --}}
        {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    @endsection
