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
                    <span>/</span>
                    <li><span style="color: rgb(85, 84, 84)">{{ $product->name }}</span></li>
                </ul>
            </div>
            <div class="w3layouts_breadcrumbs_right">
                <h2>تفاصيل المنتج</h2>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="container">
        <div class="row  mt-5 mx-xl-5  mx-md-5">
            <div class="col-4 card border-success mx-2">
                <img src="/storage/images/{{ $product->image }}">
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
    </div>

    <div class="container mt-5">
        <div class="row">
            <h4>مزيد من الصور</h4>
        </div>
        <div class="row  my-2">
            @for ($i = 0; $i < $product->attachments->count(); $i++)
                <div class="col-4">
                    <div class="card ">
                        <img src="/storage/attachments/{{ $product->attachments[$i]->name }}" style="max-height: 300px"
                            class="d-block w-100" alt="...">
                    </div>
                </div>
            @endfor
        </div>
    </div>


    {{-- <div id="carouselExampleIndicators" class="carousel slide container carousel-dark my-5" data-bs-ride="carousel"> --}}


    {{-- <div class="carousel-inner">
            @for ($i = 0; $i < $product->attachments->count(); $i++)
                <div class="carousel-item  {{ $i == 0 ? 'active' : '' }}">
                    <img src="/storage/attachments/{{ $product->attachments[$i]->name }}" class="d-block w-100"
                        alt="...">
                </div>
            @endfor
        </div> --}}
    {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button> --}}
    {{-- </div> --}}
@endsection
