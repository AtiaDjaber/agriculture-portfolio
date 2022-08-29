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
                    <li><i class="fa-solid fa-phone" style="color: #a0d034;" aria-hidden="true"></i><a href="/contact"><span
                                style="color: rgb(85, 84, 84)">اتصل بنا</span></a>
                    </li>
                </ul>
            </div>
            {{-- <div class="w3layouts_breadcrumbs_right">
                <h2>اتصل بنا </h2>
            </div> --}}
            <div class="clearfix"> </div>
        </div>
    </div>

    <div class="welcome">
        <div class="container">
            <div class="my-4">

            <h3 class="agileits_w3layouts_head">Get in<span> touch</span> with us</h3>
            <div class="w3_agile_image">
                <img src="/images/1.png" alt=" " class="img-responsive" />
            </div>
        </div>

            <div class="w3ls_news_grids">
                <div class="col-md-8 w3_agile_mail_left">
                    <div class="agileits_mail_grid_right1">
                        <form action="#" method="post">
                            <span class="d-flex ">
                                <h5 style="width: 150px" class="mt-2">اسمك الكامل</h5>
                                <input type="text" name="Name" placeholder=" " required>
                            </span>
                            <span class="d-flex ">
                                <h5 style="width: 150px" class="mt-2">البريد الالكتروني</h5>

                                <input type="email" name="Email" placeholder=" " required>
                            </span>
                            <span class="d-flex ">
                                <h5 style="width: 150px" class="mt-2">عنوان الرسالة</h5>
                                <input type="text" name="Subject" placeholder=" " required>
                            </span>
                            <span class="d-flex ">
                                <h5 style="width: 150px" class="mt-2">المحتوي</h5>
                                <textarea name="Message" placeholder=" " required></textarea>
                            </span>
                            <div class="w3_submit" style="align-items:left;width: 200px;float:left;">
                                <input style="width: 200px" type="submit" value="ارسال">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4 w3_agile_mail_right">
                    <div class="w3_agileits_mail_right_grid">
                        <h4 style="font-weight: bold;color: rgb(94, 101, 91)">Sagr Eurl Multi Service</h4>
                        <h5 class="mt-4">تابعنا على</h5>
                        <ul class="agileits_social_list">
                            <li><a href="#" class="w3_agile_facebook"><i class="fa-brands fa-facebook-f"
                                        aria-hidden="true"></i></a></li>
                            <li><a href="#" class="agile_twitter"><i class="fa-brands fa-twitter"
                                        aria-hidden="true"></i></a>
                            </li>
                            <li><a href="#" class="w3_agile_dribble"><i class="fa-brands fa-instagram"
                                        aria-hidden="true"></i></a></li>

                        </ul>
                        <div class="w3_agileits_mail_right_grid_pos">
                            <img src="/images/logo_empty.png" alt=" " class="img-responsive" />
                        </div>
                    </div>
                    <div class="w3_agileits_mail_right_grid_main">
                        <div class="w3layouts_mail_grid_left">
                            <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                                <i style="font-size: 26px;color:grey;padding-top: 12px" class="fa-solid fa-at"></i>
                            </div>
                            <div class="w3layouts_mail_grid_left2">
                                <h3>البريد الالكتروني</h3>
                                <a href="mailto:info@example.com">eurlsagr.ms@gmail.com</a>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="w3layouts_mail_grid_left">
                            <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                                <i style="font-size: 26px;padding-top: 12px;color:grey" aria-hidden="true"
                                    class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="w3layouts_mail_grid_left2">
                                <h3>العنوان</h3>
                                <p>Zone d'activite al atef ghardaia</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="w3layouts_mail_grid_left ">
                            <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                                <i style="font-size: 26px;padding-top: 12px;color:grey" aria-hidden="true"
                                    class="fa-solid fa-phone"></i>
                            </div>
                            <div class="w3layouts_mail_grid_left2">
                                <h3>الهاتف</h3>
                                <p dir="ltr" style="float: right;">+(213) 06 60 83 82 80</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .border-success {
            border-color: #23825687 !important;
        }
    </style>
@endsection
