<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('head')

<body dir="rtl">
    <div class="banner1">
        <div class="container">
            <div class="w3_agileits_banner_main_grid">
                <div class="w3_agile_logo">
                    <h1><a href="index.html"><span>G</span>erminate<i>Grow healthy products</i></a></h1>
                </div>
                <div class="agile_social_icons_banner">
                    <ul class="agileits_social_list">
                        <li><a href="#" class="w3_agile_facebook"><i class="fa-brands fa-facebook-f"
                                    aria-hidden="true"></i></a></li>
                        <li><a href="#" class="agile_twitter"><i class="fa-brands fa-twitter"
                                    aria-hidden="true"></i></a>
                        </li>
                        <li><a href="#" class="w3_agile_dribble"> <i aria-hidden="true"
                                    class="fa-brands fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="agileits_w3layouts_menu">
                    <div class="shy-menu">
                        <a class="shy-menu-hamburger">
                            <span class="layer top"></span>
                            <span class="layer mid"></span>
                            <span class="layer btm"></span>
                        </a>
                        <div class="shy-menu-panel">
                            <nav class="menu menu--horatio link-effect-8" id="link-effect-8">
                                <ul class="w3layouts_menu__list">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li class="active"><a href="services.html">Services</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <div class="breadcrumbs">
        <div class="container">
            <div class="w3layouts_breadcrumbs_left">
                <ul>
                    <li><i class="fa fa-home" aria-hidden="true"></i><a href="index.html">الرئيسية</a><span>/</span>
                    </li>
                    <li><i class="fa-solid fa-cubes" aria-hidden="true"></i>المنتجات</li>
                    <li><i class="fa-solid fa-cubes" aria-hidden="true"></i>{{ $product->name }}</li>
                </ul>
            </div>
            <div class="w3layouts_breadcrumbs_right">
                <h2>تفاصيل المنتج</h2>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="row container mt-5 mx-xl-5  mx-md-5">

        <div class="col card border-success mx-2">
            <img src="{{ $product->image }}">
        </div>
        <div class="col mx-2">
            <div class="row">
                <h3>{{ $product->name }}</h3>
            </div>
            <div class="row">
                <span>{{ $product->description }}</>
            </div>
        </div>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide container carousel-dark my-5" data-bs-ride="carousel">

        {{-- @for ($i = 0; $i < $product->attachments->count(); $i++)
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide-to="{{ $i }}" class=" {{ $i == 0 ? 'active' : '' }}" aria-current="true"
                    aria-label="Slide {{ $i }}""></button>

            </div>
        @endfor --}}
        <div class="carousel-inner">
            @for ($i = 0; $i < $product->attachments->count(); $i++)
                <div class="carousel-item  {{ $i == 0 ? 'active' : '' }}">
                    <img src="{{ $product->attachments[$i]->name }}" class="d-block w-100" alt="...">
                </div>
            @endfor
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    @include('footer')

</body>

</html>
