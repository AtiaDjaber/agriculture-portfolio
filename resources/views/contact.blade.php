@extends('layouts.welcome')
@section('content')
    <div class="banner1">
        <div class="container">
            <div class="w3_agileits_banner_main_grid">
                <div class="w3_agile_logo">
                    <h1><a href="index.html"><span>G</span>erminate<i>Grow healthy products</i></a></h1>
                </div>
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
                    <li><i class="fa-solid fa-cubes" style="color: #a0d034;" aria-hidden="true"></i><a href="/contact"><span
                                style="color: rgb(85, 84, 84)">اتصل بنا</span></a>
                    </li>
                </ul>
            </div>
            <div class="w3layouts_breadcrumbs_right">
                <h2>اتصل بنا </h2>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

    <div class="welcome">
        <div class="container">
            <h3 class="agileits_w3layouts_head">Get in<span> touch</span> with us</h3>
            <div class="w3_agile_image">
                <img src="/images/1.png" alt=" " class="img-responsive" />
            </div>

            <div class="w3ls_news_grids">
                <div class="col-md-8 w3_agile_mail_left">
                    <div class="agileits_mail_grid_right1 agile_mail_grid_right1">
                        <form action="#" method="post">
                            <span>
                                <i>Name</i>
                                <input type="text" name="Name" placeholder=" " required="">
                            </span>
                            <span>
                                <i>Email</i>
                                <input type="email" name="Email" placeholder=" " required="">
                            </span>
                            <span>
                                <i>Subject</i>
                                <input type="text" name="Subject" placeholder=" " required="">
                            </span>
                            <span>
                                <i>Message</i>
                                <textarea name="Message" placeholder=" " required=""></textarea>
                            </span>
                            <div class="w3_submit">
                                <input type="submit" value="Submit Now">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4 w3_agile_mail_right">
                    <div class="w3_agileits_mail_right_grid">
                        <h4>About Plantation</h4>
                        <p>Donec libero lectus, feugiat vel elit nec, mattis tempor mi ante.</p>
                        <h5>Follow Us On</h5>
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
                            <img src="/images/12.jpg" alt=" " class="img-responsive" />
                        </div>
                    </div>
                    <div class="w3_agileits_mail_right_grid_main">
                        <div class="w3layouts_mail_grid_left">
                            <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                                {{-- <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> --}}
                                <i style="font-size: 26px;color:grey;padding-top: 12px" class="fa-solid fa-at"></i>
                            </div>
                            <div class="w3layouts_mail_grid_left2">
                                <h3>Mail Us</h3>
                                <a href="mailto:info@example.com">info@example.com</a>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="w3layouts_mail_grid_left">
                            <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                                <i style="font-size: 26px;padding-top: 12px;color:grey" aria-hidden="true"
                                    class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="w3layouts_mail_grid_left2">
                                <h3>Address</h3>
                                <p>My Company 8907 Ukraine.</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="w3layouts_mail_grid_left">
                            <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                                <i style="font-size: 26px;padding-top: 12px;color:grey" aria-hidden="true"
                                    class="fa-solid fa-phone"></i>
                            </div>
                            <div class="w3layouts_mail_grid_left2">
                                <h3>Phone</h3>
                                <p>+(0121) 121 121</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <style>
        .border-success {
            border-color: #23825687 !important;
        }
    </style>
@endsection
