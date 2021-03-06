@extends("layouts.mahasiswa")
@section("content")

        {{-- Open Dashboard --}}
        <section>
            <div class="container-lg mt-3">
                <div class="row">
                    <p class="fs-3">DAFTAR PROYEK ANDA</p>
                </div>
                <div class="row justify-content-between mb-3 mahasiswa-events">
                    <div class="col-md-2 mb-3">
                        <div class="dropdown">
                            <button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class='bx bx-calendar-alt fs-5'></i>Jenis Kegiatan
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Organisai</a></li>
                                <li><a class="dropdown-item" href="#">Magang</a></li>
                                <li><a class="dropdown-item" href="#">Proyek</a></li>
                                <li><a class="dropdown-item" href="#">Beasiswa</a></li>
                                <li><a class="dropdown-item" href="#">Kerja Paruh Waktu</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 mb-3">
                        <div class="dropdown">
                            <button class="btn btn-outline-dark dropdown-toggle w-100" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class='bx bx-list-check fs-5'></i>Status
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                <li><a class="dropdown-item" href="#">Buka</a></li>
                                <li><a class="dropdown-item" href="#">Tutup</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-7 mb-3">
                        <div class="position-relative">
                            <input type="text" name="" placeholder="Masukkan kata kunci" class="form-control border-dark"/>
                            <i class='bx bx-search position-absolute top-50 end-0 translate-middle fs-4'></i>
                        </div>
                    </div>
                </div>
                <div class="row align-items-stretch mb-3">
                    <div class="col-md-3 overflow-scroll doxSatu">
                        {{-- Open Looping --}}
                        <div class="box border border-dark rounded-4 p-3 mb-2">
                            <div class="box-status">
                                {{-- Buka --}}
                                <p class="text-hijau mb-0">Tersedia</p>
                                {{-- Tutup --}}
                                {{-- <p class="text-danger mb-0">Tidak Tersedia/p> --}}
                            </div>
                            <div class="box-title fw-bold">
                                <p>Tanaman hidroponik berbasis IoT</p>
                            </div>
                            <div class="box-body">
                                <div class="events d-flex">
                                    <i class='bx bx-user-circle fs-4'></i>
                                    <p>Fadhil</p>
                                </div>
                                <div class="location d-flex">
                                    <i class='bx bx-category-alt fs-4'></i>
                                    <p>Internet of Things</p>
                                </div>
                                <div class="city d-flex">
                                    <i class='bx bx-map fs-4'></i>
                                    <p>Jakarta</p>
                                </div>
                            </div>
                        </div>
                        {{-- Close Looping --}}
                    </div>
                    <div class="col-md-6">
                        <div class="boxx border border-dark rounded-4 p-3 doxDua">
                            <div class="boxx-status">
                                {{-- Buka --}}
                                <p class="text-hijau">Tersedia</p>
                                {{-- Tutup --}}
                                {{-- <p class="text-danger">Tidak Tersedia</p> --}}
                            </div>
                            <div class="boxx-title fw-bold">
                                <p>Tanaman hidroponik berbasis IoT</p>
                            </div>
                            <div class="boxx-events d-flex">
                                <i class='bx bx-user-circle fs-4'></i>
                                <p>Fadhil</p>
                            </div>
                            <div class="boxx-location d-flex">
                                <i class='bx bx-category-alt fs-4'></i>
                                <p>Internet of Things</p>
                            </div>
                            <div class="boxx-city d-flex">
                                <i class='bx bx-map fs-4'></i>
                                <p>Jakarta</p>
                            </div>
                            <div class="boxx-actions d-flex mb-3">
                                <a href="" class="btn btn-dark d-flex align-items-center me-3">
                                    <i class='bx bxl-whatsapp fs-4'></i>
                                    Hubungi saya
                                </a>
                                <a href="" class="btn btn-outline-dark d-flex align-items-center me-3">
                                    <i class='bx bxs-user-detail fs-4'></i>
                                    Detail proyek
                                </a>
                                <a href="" class="btn btn-outline-dark d-flex align-items-center">
                                    <i class='bx bx-bookmark fs-4'></i>
                                    Simpan
                                </a>
                            </div>
                            <div class="boxx-body">
                                <div class="boxx-description">
                                    <p class="fs-5 fw-bold">Deksripsi Kegiatan</p>
                                    <p class="deskripsi">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                </div>
                                <div class="boxx-details">
                                    <p class="fs-5 fw-bold">Rincian Kegiatan</p>
                                    <ol class="rincian" type="1">
                                        <li>blblblblblblbl</li>
                                        <li>blblblblblblbl</li>
                                        <li>blblblblblblbl</li>
                                        <li>blblblblblblbl</li>
                                    </ol>
                                </div>
                                <div class="boxx-kolaborasi">
                                    <p class="fs-5 fw-bold">Kolabolator</p>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-dark mb-3" data-bs-toggle="modal" data-bs-target="#kolaborasi">
                                        Tambah
                                    </button>
                                    
                                    <!-- Modal -->
                                    <div class="modal fade" id="kolaborasi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Tambah kolaborator</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="input-group">
                                                    <input type="text" class="form-control">
                                                    <span class="input-group-text">
                                                        <i class='bx bx-plus'></i>
                                                    </span>
                                                </div>
                                                <form action="" method="">
                                                    @csrf
                                                    <input type="text" name="" id="" class="form-control">
                                                    <button type="submit" class="btn btn-dark mx-auto d-block">Tambah</button>
                                                </form>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="kolaborasi" type="1">
                                        <img src={{ url("images/login-1.png") }} alt="" class="boxxx-img border border-dark me-1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 doxTiga">
                        <div class="boxxx border border-dark rounded-4 p-3">
                            <div class="boxxx-recomendation">
                                <p class="fw-bold fs-6">Rekomendasi untuk kamu</p>
                                <form action="" class="mb-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control">
                                        <span class="input-group-text">
                                            <i class='bx bx-search'></i>
                                        </span>
                                    </div>
                                </form>
                                {{-- Open Looping --}}
                                <div class="boxxx-user d-flex align-items-center mb-3">
                                    <img src={{ url("images/login-1.png") }} alt="" class="boxxx-img border border-dark me-1 text-wrap">
                                    <div class="user">
                                        <p class="fw-bold fs-6">Rifda Sasmi Zahra</p>
                                        <p>rifdasasmizahra83@gmail.com</p>
                                    </div>
                                </div>
                                {{-- Close Looping --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- Close Dashboard --}}
        {{-- JS --}}
        <script src={{ url("js/mahasiswa.js") }}></script>
    
@endsection