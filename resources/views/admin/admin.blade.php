<!DOCTYPE html>
<html lang="en">
@include('admin.head')


<body class="g-sidenav-show  bg-gray-100">
    {{-- <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 "
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" target="_blank">
                <span class="ms-1 font-weight-bold">Dashboard</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        @include('admin.navbar')
    </aside> --}}

    @yield('content')
    {{-- @include('admin.footer') --}}
    <style>
        .dropdown-toggle::after {
            display: none;
        }

        .dropzone {
            background: white;
            border-radius: 5px;
            border: 2px dashed rgb(0, 135, 247);
            border-image: none;
            max-width: 100%;
            margin-left: auto;
            margin-right: auto;
        }

        .dz-message {
            font-size: 24px;
        }
    </style>
    <script type="text/javascript">
        Dropzone.autoDiscover = false;
        $(document).ready(function() {
            $("#dZUpload").dropzone({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '{{ route('admin.upload') }}',
                addRemoveLinks: true,
                acceptedFiles: 'image/*',
                withCredentials: true,
                // resizeWidth: 800,
                // resizeHeight: 800,

                resizeQuality: 0.8,
                success: function(file, response) {
                    var imgName = response;
                    file.previewElement.classList.add("dz-success");
                    console.log("Successfully uploaded :" + imgName);
                },
                error: function(file, response) {

                    file.previewElement.classList.add("dz-error");
                }
            });
        });
    </script>
</body>

</html>
