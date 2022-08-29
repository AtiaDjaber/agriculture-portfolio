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
                    <li><i class="fa-solid fa-tractor" style="color: #a0d034;" aria-hidden="true"></i><a
                            href="/services"><span style="color: rgb(85, 84, 84)">خدمات فلاحية </span></a>
                    </li>
                </ul>
            </div>
            <div class="w3layouts_breadcrumbs_right">
                <h3>خدمات فلاحية </h3>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

    <style>
        .border-success {
            border-color: #23825687 !important;
        }
    </style>
@endsection
