{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('admin.head') --}}

@extends('admin.admin')
@section('content')
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start"
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>

        </div>
        <hr class="horizontal dark mt-0">
        @include('admin.navbar')

    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->

        <!-- End Navbar -->
        <div class="container-fluid py-2">

            <div dir="rtl" class="container-fluid py-2">
                <div class="row">
                    <div class="col-12">
                        <div class="card mb-2">
                            <div class="card-header d-flex justify-content-between">
                                <h4 class="text-primary">تعديل الفئة</h4>

                            </div>
                            <div class="card-body px-0 pt-0 ">
                                <form enctype="multipart/form-data"
                                    action="{{ route('admin.categories.update', $category->id) }}" method="POST">
                                    @method('Put')
                                    @csrf
                                    <div class="container">

                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label"> الصنف</label>
                                            <input type="name" name="name" value="{{ $category->name }}"
                                                class="form-control" placeholder="اسم الفئة ...">
                                        </div>
                                       
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label"> صورة المنتج</label>
                                            <input type="file" id="formFile" name="image" class="form-control">
                                        </div>
                                        @if ($category->image)
                                        <div class="col-4 card border-success mx-2">
                                            <img src="/storage/images/{{ $category->image }}">
                                        </div>
                                        @endif
                                      
                                        <button class="btn btn-primary btn-block" type="submit">حفظ البيانات</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            @include('admin.footer')

        </div>
    </main>
@endsection
