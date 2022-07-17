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
                                <h4 class="text-primary">منتج جديد</h4>

                            </div>
                            <div class="card-body px-0 pt-0 ">
                                <form enctype="multipart/form-data" action=" {!! action('App\Http\Controllers\ProductAdminController@store') !!}" method="POST">
                                    @csrf
                                    <div class="container">

                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label"> الصنف</label>
                                            <input type="name" name="name" class="form-control"
                                                placeholder="اسم الصنف ...">
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="category_id">اختيار الفئة</label>
                                                    <select class="form-control" name="category_id" id="category_id">
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}">
                                                                {{ $category->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <label></label>
                                                <div dir="ltr" class="form-check form-switch mt-2">
                                                    <label for="is_available">متاح</label>
                                                    <input class="form-check-input" checked type="checkbox" name="is_available"
                                                        id="is_available">
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="form-group">
                                            <label for="category_id">اختيار الفئة</label>
                                            <select class="form-control" name="category_id" id="category_id">
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div> --}}
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label"> صورة المنتج</label>
                                            <input type="file" id="formFile" name="image" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">الوصف</label>
                                            <textarea class="form-control" name="description" placeholder="وصف المنتج ..." rows="6"></textarea>
                                        </div>


                                        <div id="dZUpload" class="dropzone my-3">
                                            <div class="dz-default dz-message">سحب وافلات الصور هنا</div>
                                        </div>

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
