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
                    <li><i class="fa-solid fa-cubes" style="color: #a0d034;" aria-hidden="true"></i><a
                            href="/products"><span style="color: rgb(85, 84, 84)">المنتجات</span></a>
                    </li>
                </ul>
            </div>
            <div class="w3layouts_breadcrumbs_right">
                <h2>متجرنا </h2>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

    {{-- <div id="carouselExampleIndicators" class="carousel slide container" data-bs-ride="carousel">
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
    </div> --}}
    <div class="welcome my-3">
        <div class="container">

            {{-- <div class="w3ls_news_grids my-5"> --}}
            <div class="row my-3 w3ls_news_grids">
                @foreach ($products as $product)
                    <div class="col-xl-3 col-md-4 col-sm-6 col-xm-12 mb-4 d-flex align-items-stretch w3ls_news_grid">
                        <div class="card border-success " id="body-card-color">
                            <div class="w3layouts_news_grid">
                                <a href="product/{{ $product->id }}">
                                    <img style="max-height: 260px;height: 240px;width:100%"
                                        src="/storage/images/{{ $product->image }}" alt=" "
                                        class="img-responsive" />
                                    <div class="w3layouts_news_grid_pos">
                                        <div class="wthree_text">
                                            <button type="button" class="btn btn-success ">عرض
                                                التفاصيل</button>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="card-body  d-flex align-content-between flex-column">
                                <h5 class="card-title  bd-highlight">{{ Str::limit($product->name, 60) }}</h5>
                                <p style="color: rgb(101, 107, 100)" class="card-text bd-highlight">
                                    {{ Str::limit($product->description, 50) }}</p>
                                <div class="agileits_w3layouts_news_grid mt-auto p-0">
                                    <ul class="pt-3">
                                        <li><i class="fa fa-calendar mx-1"
                                                aria-hidden="true"></i>{{ Str::substr($product->created_at, 0, 10) }}
                                        </li>
                                        <li><i class="fa-solid fa-eye mx-1" aria-hidden="true"></i>{{ $product->views }}
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
            {{ $products->links('pagination::bootstrap-4') }}
        </div>
    </div>
    <style>
        .border-success {
            border-color: #23825687 !important;
        }
    </style>
@endsection
