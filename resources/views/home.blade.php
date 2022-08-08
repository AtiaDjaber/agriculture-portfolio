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
                    <p style="font-size: 1rem;color:aliceblue">شركة صقر الرائدة في مجال الخدمات الفلاحية وتقديم الاستشارات
                        وبيع الادوية
                        الفلاحية</p>
                    <ul>
                        <li><a href="contact" class="w3ls_more">اتصل بنا</a></li>
                    </ul>
                </div>
            </div>
            <div class="thim-click-to-bottom">
                <a href="#welcome_bottom" class="scroll">
                    <i class="fa  fa-chevron-down"></i>
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
                            {{-- <i class="fa fa-pagelines" aria-hidden="true"></i> --}}
                            <i class="fa-solid fa-certificate" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col-xs-8 wthree_banner_bottom_grid_right">
                        <h4>مكتب الدراسات</h4>
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
                            {{-- <i class="fa fa-certificate" aria-hidden="true"></i> --}}
                            <i class="fa-brands fa-product-hunt" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col-xs-8 wthree_banner_bottom_grid_right">
                        <h4>منتجات فلاحية</h4>
                        <p>نقدم لك الأدوية الفلاحية المناسبة ذات الجودة العالية</p>
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
                        <h4>خدمات فلاحية</h4>
                        <p>تطوير و تحسين الأراضي الفلاحية و إعادة تهيئتها</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    <!-- //analytic-work -->
    <div id="welcome_bottom" class="welcome-bottom">
        <div class="col-md-6 wthree_welcome_bottom_left">
            <h3>we work hard and make our country <span>greenery</span></h3>
            <p>Nullam pretium euismod orci ac porta. Interdum et malesuada fames ac ante
                ipsum primis in faucibus. Donec at scelerisque dolor, vel placerat mi.</p>
            <div class="col-md-6 wthree_welcome_bottom_left_grid" data-aos="zoom-in">
                <div class="w3l_social_icon_gridl">
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
    </div>
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
