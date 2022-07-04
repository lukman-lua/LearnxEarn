<!doctype html>
<html lang="en">
    <head>
        <title>Learn X Earn - Landingpage</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS v5.2.0-beta1 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

        {{-- CSS --}}
        <link rel="stylesheet" href={{ url("css/landingpage.css") }}>
        <link rel="stylesheet" href={{ url("css/mahasiswa.css") }}>

        <!-- UIkit CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.14.3/dist/css/uikit.min.css" />

        <!-- UIkit JS -->
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.14.3/dist/js/uikit.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.14.3/dist/js/uikit-icons.min.js"></script>
        <style>
            .box-locations, .box-events, .box-city
            {
                font-size: 12px
            }
            .box p
            {
                margin-top: 0;
                margin-bottom: 8px
            }
        </style>

        {{-- Icon --}}

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
                    @if(Auth::check())
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
                                <li><a class="dropdown-item" href="{{ route("my_eventView") }}">Kegiatan yang disimpan</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}">Keluar</a></li>
                            </ul>
                        </li>
                    @else
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
                        <ul class="navbar-nav mb-2 mb-lg-0 mt-0">
                            <li class="nav-item">
                                <button type="button" class="btn btn-outline-dark nav-btn me-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Masuk</button>
                            </li>
                            <li class="nav-item">
                                <a href={{ route("register") }} type="button" class="btn btn-dark nav-btn">Daftar</a>
                            </li>
                    @endif
                    </ul>
                </div>
            </div>
        </nav>

        {{-- Close Navbar --}}
        @yield('content')
        {{-- Open Modal Masuk --}}
        
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Masuk</h5>
                        <button type="button" class="btn-close login-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route("login") }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <input required type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror<br><br>
                            </div>
                            <div class="mb-3 position-relative">
                                <input required type="password" class="form-control mataInput" placeholder="Password" name="password">
                                @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror<br><br>
                                <i class="bx bx-show position-absolute top-50 end-0 translate-middle fs-4 mata"></i>
                            </div>
                            <div class="d-flex flex-row-reverse mb-3">
                                <button class="btn btn-light btnLupa" style="font-size: 12px">Lupa Password?</button>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-dark w-100">Masuk</button>
                            </div>
                        </form>
                        <div class="d-flex mb-3">
                            <div class="col-5">
                                <hr>
                            </div>
                            <div class="col-2">
                                <p class="mb-0 text-center mt-1">Atau</p>
                            </div>
                            <div class="col-5">
                                <hr>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <p>Belum punya akun? Ayo <a href={{ route("registerView") }} class="text-decoration-none">Daftar</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Close Modal Masuk --}}
        {{-- Open Lupa Password --}}
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary lupaPassword d-none" data-bs-toggle="modal" data-bs-target="#lupaPassword">
            Launch static backdrop modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="lupaPassword" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title fs-5" id="staticBackdropLabel"><i class='bx bx-error-circle fs-5'></i>ALERT!!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route("password.email") }}" method="post">
                            @csrf
                            <input type="email" name="email" placeholder="Masukan email">
                            <br><br>
                            <button type="submit" class="btn btn-dark">Dapatkan email</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- Close Lupa Password --}}
        {{-- Open Verify Email --}}
        {{-- <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary email d-none" data-bs-toggle="modal" data-bs-target="#email">
            Launch static backdrop modal
        </button>
        
        <!-- Modal -->
        <div class="modal fade" id="email" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title fs-5" id="staticBackdropLabel"><i class='bx bx-error-circle fs-5'></i>ALERT!!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="mb-0 mt-0 fs-6"><strong> Silahkan pencet link verifikasi yang terdapat di email anda </strong>, <br>Jika belum menerima link, silakan tunggu dalam 9 detik</p>
                    </div>
                    <div class="modal-footer">
                        <form action="" method="">
                            @csrf
                            <button type="submit" class="btn btn-dark">Dapatkan email</button>
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}
        {{-- Close Verify Email --}}
        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

        {{-- Icon --}}
        <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>

        {{-- JS --}}
        <script src={{ url("js/modal.js") }}></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            @if(session("status"))
                @if(session("status")== "true")
                    swal("Success", "{{ session("message") }}", "success");
                @else
                    swal("Failed", "{{ session("message") }}", "error");
                @endif
            @endif
            // let email = document.querySelector(".email")
            // setTimeout(() => {
            //     email.click()
            // }, 2000);

            let lupaPassword = document.querySelector(".lupaPassword"),
                loginClose = document.querySelector(".login-close"),
                btnLupa = document.querySelector(".btnLupa")

            btnLupa.onclick = () =>{
                loginClose.click()
                lupaPassword.click()
            }


        </script>
    </body>
</html>