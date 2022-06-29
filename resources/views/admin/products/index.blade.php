<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/img/favicon.png">
    <title>
        Dashboard by Atia djaber
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="../dashboard/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../dashboard/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ mix('js/app.js') }}"></script>
    <link href="{{ mix('css/soft-ui-dashboard.css') }}" rel="stylesheet">

    {{-- <link href="css/font-awesome.css" rel="stylesheet"> --}}

    {{-- <script src="{{ mix('dashboard/css/soft-ui-dashboard.css') }}" defer></script> --}}
    {{-- <link href="{{ asset('dashboard/css/soft-ui-dashboard.css') }}" rel="stylesheet"> --}}

    <!-- CSS Files -->
    {{-- <link id="pagestyle" href="/dashboard/css/soft-ui-dashboard.css?v=1.0.6" rel="stylesheet" /> --}}
</head>


<body class="g-sidenav-show  bg-gray-100">
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
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a>
                        </li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Dashboard</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4  justify-content-end" id="navbar">

                    <ul class="navbar-nav">

                        <li class="nav-item d-flex align-items-center">

                            <a class="nav-link text-body font-weight-bold px-0" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-2">

            <div class="container-fluid py-2">
                <div class="row">
                    <div class="col-12">
                        <div class="card mb-2">
                            <div class="card-header d-flex justify-content-between">
                                <h4>قائمة المنتجات</h4>
                                <a class="btn btn-outline-primary btn-sm " style="font-size: 16px"
                                    href="/admin/products/create">
                                    اضافة منتج جديد
                                </a>
                            </div>
                            <div class="card-body px-0 pt-0 ">
                                <div class="table-responsive p-0">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th class="text-uppercase text-primary font-weight-bolder opacity-7">
                                                    الصنف</th>
                                                {{-- <th class="text-uppercase text-primary font-weight-bolder opacity-7">
                                                    الوصف</th> --}}
                                                <th
                                                    class="text-center text-uppercase text-primary font-weight-bolder opacity-7">
                                                    الفئة</th>
                                                <th
                                                    class="text-uppercase text-center  text-primary font-weight-bolder  opacity-7 ps-2">
                                                    المشاهدات</th>
                                                <th
                                                    class="text-center text-uppercase text-primary font-weight-bolder opacity-7">
                                                    التاريخ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($products as $product)
                                                <tr>
                                                    <td>
                                                        <div class="d-flex ">
                                                            <h6 class="text-sm">
                                                                {{ Str::limit($product->name, 30) }}
                                                            </h6>
                                                        </div>
                                                    </td>
                                                    {{-- <td>
                                                        <div class="d-flex">
                                                            <h6 class="text-sm">
                                                                {{ Str::limit($product->description, 30) }}
                                                            </h6>
                                                        </div>
                                                    </td> --}}
                                                    <td class="align-middle text-center text-sm">
                                                        <span
                                                            class="badge badge-sm bg-gradient-success">{{ $product->category->name }}</span>
                                                    </td>
                                                    <td>
                                                        <p class="text-xs text-center font-weight-bold">
                                                            {{ $product->views }}
                                                        </p>
                                                    </td>

                                                    <td class="align-middle text-center text-sm">
                                                        <span
                                                            class="text-xs font-weight-bold mb-0">{{ Str::substr($product->created_at, 0, 10) }}</span>
                                                    </td>

                                                    <td class="align-middle text-center text-sm">
                                                        {{-- href="{{ route('admin.product.edit') }}" --}}
                                                        <a href="/admin/products/edit/{{ $product->id }}"> <i
                                                                style="color: rgb(56, 224, 47);background-color: rgb(229, 255, 229);font-size:18px;border-radius: 50%;padding: 5px;"
                                                                class="fa-regular fa-pen-to-square"></i>
                                                        </a>
                                                    </td>
                                                    <td class="align-middle text-center text-sm">
                                                        {{-- href="{{ route('admin.product.edit') }}" --}}
                                                        <a href="#"> <i
                                                                style="color: rgb(224, 47, 47);background-color: rgb(255, 229, 229);font-size:18px;border-radius: 50%;padding: 5px;"
                                                                class="fa-regular fa-trash-can"></i>
                                                        </a>

                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="d-flex justify-content-center my-2">
                                        {{ $products->links() }}

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @include('admin.footer')
            </div>


        </div>
    </main>

</body>

</html>
