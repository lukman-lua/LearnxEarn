<!doctype html>
<html lang="en">
    <head>
        <title>Learn X Earn - Mahasiswa</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS v5.2.0-beta1 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

        {{-- CSS --}}
        <link rel="stylesheet" href={{ url("css/landingpage.css") }}>
        <link rel="stylesheet" href={{ url("css/mahasiswa.css") }}>

        {{-- Icon --}}
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

        <!-- UIkit CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.14.3/dist/css/uikit.min.css" />

        <!-- UIkit JS -->
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.14.3/dist/js/uikit.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.14.3/dist/js/uikit-icons.min.js"></script>

    </head>
    <body>

        {{-- Open Navbar --}}

        <nav class="navbar navbar-expand-lg bg-light nav-height">
            <div class="container-lg bg-light">
                <a class="navbar-brand fw-bold" href={{ route("landingpage") }}>Learn x Earn</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 mt-0"></ul>
                    <ul class="navbar-nav mb-2 mb-lg-0 mt-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                @if($user->profile_pict)
                                <img src={{ \Illuminate\Support\Facades\Storage::url($user->profile_pict) }} alt="" class="boxxx-img border border-dark">
                                @else
                                    <img src={{ url("images/login-1.png") }} alt="" class="boxxx-img border border-dark me-1">
                                @endif
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route("dashboard.index") }}">Dashboard</a></li>
                                <li><a class="dropdown-item" href="{{ route("profileView") }}">Profil saya</a></li>
                                <li><a class="dropdown-item" href="{{ route("my_projectView") }}">Proyek saya</a></li>
                                @if($user->role==1)
                                    <li><a class="dropdown-item" href="{{ route("my_eventView") }}">Kegiatan saya</a></li>
                                @endif
                                <li><a class="dropdown-item" href="#">Kegiatan yang disimpan</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}">Keluar</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        {{-- Close Navbar --}}
        @yield('content')
        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
        {{-- Icon --}}
        <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            @if(session("status"))
                @if(session("status") =="true")
                    swal("Success", "{{ session("message") }}", "success");
                @elseif(session("status"))
                    swal("Failed", "{{ session("message") }}", "error");
                @endif
            @endif

        </script>
    </body>
</html>
