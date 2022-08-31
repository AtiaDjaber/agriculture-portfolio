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
                    <li><i class="fa-solid fa-cubes" style="color: #a0d034;" aria-hidden="true"></i><a
                            href="/products"><span style="color: rgb(85, 84, 84)">المنتجات</span></a>
                    </li>
                </ul>
            </div>
            {{-- <div class="w3layouts_breadcrumbs_right">
                <h3>متجرنا </h3>
            </div>
            <div class="clearfix"> </div> --}}
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
            <div class="mb-3 row">
                <label for="searchInput" class="col-form-label pb-2" style="width: 50px;font-size: 1.2rem;">بحث</label>
                <div class="col-8">
                    <input type="text" value="{{$search}}" class="form-control" id="searchInput" name="search">
                </div>
                <div class="col-auto">
                    <button type="submit" onclick="getDataByFilter({{ $category_id }})" class="btn btn-outline-success mb-3">بحث
                        <i class=" mx-2 fa-solid fa-magnifying-glass"></i></button>
                </div>
            </div>
            <div class="d-flex flex-wrap" id="categories">
                <div style="cursor:pointer;" onclick="getDataByFilter('')" name="category" id="category"
                    class={{ $category_id == null ? 'chip_active' : 'chip_inactive' }}>
                    عرض الكل
                </div>
                @foreach (App\Models\Category::all() as $category)
                    <button onclick="getDataByFilter({{ $category->id }})" id="{{ $category->id }}"
                        name="category{{ $category->id }}"
                        class={{ $category_id == $category->id ? 'chip_active' : 'chip_inactive' }} type="button"
                        class="btn btn-success"> {{ $category->name }}</button>
                @endforeach
            </div>

            {{-- <div class="w3ls_news_grids my-5"> --}}
            <div class="row my-3 card-group">

                @foreach ($products as $product)
                    <div class="col-xl-3 col-md-4 col-sm-6 col-xm-6 col-6 mb-3">
                        <a href="product/{{ $product->id }}" class="custom-card">
                            <div class="card border-success h-100">
                                <img style="background-color:rgb(252, 255, 251)" src="/storage/images/{{ $product->image }}"
                                    alt="لا يتوفر صورة" class="card-img-top image_grid" />
                                <div class="card-body">
                                    <h5 class="card-title">{{ Str::limit($product->name, 40) }}</h5>
                                    <p class="card-text"> {{ Str::limit($product->description, 40) }}</p>
                                </div>
                                <div class="card-footer agileits_w3layouts_news_grid"
                                    style="background-color: rgb(253, 255, 250);">
                                    <ul class="pt-1" style="padding-left: 0rem; margin-bottom: 0rem;">
                                        <li>
                                            <i class="fa fa-calendar ms-1" aria-hidden="true"></i>
                                            {{ Str::substr($product->created_at, 0, 10) }}
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-eye ms-1" aria-hidden="true"></i>
                                            {{ $product->views }}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </a>

                    </div>

                    {{-- <div class="col-xl-3 col-md-4 col-sm-6 col-xm-6 col-6 mb-4 d-flex align-items-stretch">
                        <div class="card border-success " id="body-card-color">
                            <div class="w3layouts_news_grid">
                                <a style="max-height: 200px;height: 200px;width:100%;background-color:rgb(247, 252, 245)"
                                    href="product/{{ $product->id }}">
                                    <img style="max-height: 200px;height: 200px;width:100%;background-color:rgb(247, 252, 245)"
                                        src="/storage/images/{{ $product->image }}" alt=" " class="card-img-top" />
                                    <div class="w3layouts_news_grid_pos">
                                        <div class="wthree_text">
                                            <button type="button" class="btn btn-success ">عرض
                                                التفاصيل</button>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="card-body ">
                                <h5 class="card-title  bd-highlight">{{ Str::limit($product->name, 40) }}</h5>
                                <p style="color: rgb(101, 107, 100)" class="card-text bd-highlight">
                                    {{ Str::limit($product->description, 40) }}</p>
                                <div class="card-footer agileits_w3layouts_news_grid">
                                    <ul class="pt-1" style="margin-bottom: 0.5rem;">
                                        <li>
                                            <i class="fa fa-calendar ms-1" style="margin-bottom: 0px"
                                                aria-hidden="true"></i>
                                            {{ Str::substr($product->created_at, 0, 10) }}
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-eye ms-1" style="margin-bottom: 0px"
                                                aria-hidden="true"></i>
                                            {{ $product->views }}
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div> --}}
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
            {{ $products->withQueryString()->links('pagination::bootstrap-4') }}
        </div>
    </div>
    <script type="text/javascript">
        function getDataByFilter(category) {
            var category_id='';
            if (category) {
                category_id  =category;
            }
            var category=category_id;
            var search = document.getElementById('searchInput').value;
            // var categoris = document.getElementsByClassName('chip_active');
            // if (condition) {
            //     category = condition[0].id;
            // }
            // if (category == null) {
            //     window.history.pushState('products', 'المنتجات',
            //         '/products');
            // } else {
            window.history.pushState('products', 'المنتجات',
                '/products?category=' + category + '&search=' + search);
            // }

            window.location.reload();
            // $.ajax({
            //     type: 'GET',
            //     dataType: "application/json; charset=utf-8",
            //     url: '/products?category=' + $("#category").val(),
            //     headers: {
            //         'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            //     },
            //     success: function(data, status, xhr) {
            //         console.log('data: ', data);
            //         debugger
            //     },
            //     error: function(xhr, status, error) {
            //         debugger
            //         alert("Result: " + status + " " + error + " " + xhr.status + " " + xhr.statusText)
            //     }
            // });
        }
    </script>
    <style>
        .border-success {
            border-color: #23825687 !important;
        }
    </style>
@endsection
