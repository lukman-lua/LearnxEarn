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

        {{-- Icon --}}
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    </head>
    <body>
        
        {{-- Open Navbar --}}

        <nav class="navbar navbar-expand-lg bg-light nav-height">
            <div class="container-lg bg-light">
                <a class="navbar-brand fw-bold" href="#">Learn x Earn</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <button type="button" class="btn btn-outline-dark nav-btn me-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Masuk</button>
                        </li>
                        <li class="nav-item">
                            <a href={{ route("register") }} type="button" class="btn btn-dark nav-btn">Daftar</a>
                        </li>
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
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            @csrf
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="Email" name="">
                            </div>
                            <div class="mb-3 position-relative">
                                <input type="password" class="form-control mataInput" placeholder="Password" name="">
                                <i class="bx bx-show position-absolute top-50 end-0 translate-middle fs-4 mata"></i>
                            </div>
                            <div class="d-flex flex-row-reverse mb-3">
                                <a href="" class="text-decoration-none" style="font-size: 12px">Lupa Password?</a>
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
                            <p>Belum punya akun? Ayo <a href={{ route("register") }} class="text-decoration-none">Daftar</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Close Modal Masuk --}}
        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

        {{-- Icon --}}
        <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>

        {{-- JS --}}
        <script src={{ url("js/modal.js") }}></script>
    </body>
</html>