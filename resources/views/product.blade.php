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
                </ul>
            </div>
            <div class="w3layouts_breadcrumbs_right">
                <h2>المنتجات</h2>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide container" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/banner.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/banner.jpg" class="d-block w-100" alt="...">
            </div>

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
    <div class="welcome my-5">
        <div class="container">
            <h3 class="agileits_w3layouts_head">Latest <span>News</span> from plantation</h3>
            <div class="w3_agile_image">
                <img src="images/1.png" alt=" " class="img-responsive">
            </div>
            {{-- <div class="w3ls_news_grids my-5"> --}}
            <div class="row row-cols-1 row-cols-md-3 mx-md-5 my-3 w3ls_news_grids">
                @foreach ($products as $product)
                    <div class="col mb-4 d-flex align-items-stretch w3ls_news_grid">
                        <div class="card border-success " id="body-card-color">
                            <div class="w3layouts_news_grid">
                                <img src="/storage/images/{{ $product->image }}" alt=" "
                                    class="img-responsive" />
                                <div class="w3layouts_news_grid_pos">
                                    <div class="wthree_text">
                                        <a href="product/{{ $product->id }}">
                                            <button type="button" class="btn btn-success btn-lg">عرض
                                                التفاصيل</button>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">

                                <h5 class="card-title">{{ Str::limit($product->name, 60) }}</h5>
                                <p class="card-text">{{ Str::limit($product->description, 90) }}</p>
                                <div class="agileits_w3layouts_news_grid">
                                    <ul>
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i>25 March 2017</li>
                                        <li><i class="fa-solid fa-eye" aria-hidden="true"></i>{{ $product->views }}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-md-4  w3ls_news_grid card border-success">
                        <div class="w3layouts_news_grid">
                            <img src="{{ $product->image }}" alt=" " class="img-responsive" />
                            <div class="w3layouts_news_grid_pos">
                                <div class="wthree_text">
                                    <button type="button" class="btn btn-success">تفاصيل</button>
                                </div>
                            </div>
                        </div>
                        <div class="agileits_w3layouts_news_grid">
                            <h4><a href="#" data-toggle="modal" data-target="#myModal">
                                    {{ $product->name }}
                                </a>
                            </h4>
                            <p>{{ $product->description }}</p>
                        </div>
                    </div> --}}
                @endforeach
            </div>
        </div>
    </div>
    @include('footer')

</body>

</html>
