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
                        <a href="{{ route("add_eventView") }}" class="btn btn-dark text-light">Tambah Proyek</a>
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
                        <form id="search" method="post" action="{{ route("my_projectSearch") }}">
                            @csrf
                            <div class="position-relative">
                                <input type="text" name="search" placeholder="Masukkan kata kunci" class="form-control border-dark"/>
                                <i onclick="document.getElementById('search').submit()" class='bx bx-search position-absolute top-50 end-0 translate-middle fs-4'></i>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row align-items-stretch mb-3">
                    <div class="col-md-3 overflow-scroll boxSatu">
                        {{-- Open Looping --}}
                        @foreach($projects as $project)
                            <div class="dox border border-dark rounded-4 p-3 mb-2">
                                <div class="dox-status">
                                    {{-- Buka --}}
                                    @if ($project["status"] == "Buka")
                                        <p class="text-hijau mb-0">Tersedia</p>
                                        {{-- Tutup --}}
                                    @else
                                        <p class="text-danger mb-0">Tidak Tersedia/p>
                                    @endif
                                </div>
                                <div class="dox-title fw-bold">
                                    <p>{{ $project["tittle"] }}</p>
                                </div>
                                <div class="dox-body">
                                    <div class="dox-name d-flex">
                                        <i class='bx bx-user-circle fs-4'></i>
                                        <p>{{ \App\Models\User::where('id_user', $project["id_user"])->first()->name }}</p>
                                    </div>
                                    <div class="dox-study d-flex">
                                        <i class='bx bx-category-alt fs-4'></i>
                                        <p>{{ $project["type"] }}</p>
                                    </div>
                                    <div class="dox-city d-flex">
                                        <i class='bx bx-map fs-4'></i>
                                        <p>{{ $project["location"] }}</p>
                                    </div>
                                </div>
                            </div>
                            {{-- Close Looping --}}
                        @endforeach
                        {{-- Close Looping --}}

                    </div>

                    <div class="col-md-9">
                        @foreach($projects as $project)
                        <div class="boxx border border-dark rounded-4 p-3 boxDua">
                            <div class="boxx-status">
                                @if ($project["status"] == "Buka")
                                    <p class="text-hijau mb-0">Tersedia</p>
                                @else
                                    <p class="text-danger mb-0">Tidak Tersedia/p>
                                @endif
                            </div>
                            <div class="boxx-title fw-bold">
                                <p>{{ $project['tittle'] }}</p>
                            </div>
                            <div class="boxx-events d-flex">
                                <i class='bx bx-user-circle fs-4'></i>
                                <p>{{ \App\Models\User::where('id_user', $project["id_user"])->first()->name }}</p>
                            </div>
                            <div class="boxx-location d-flex">
                                <i class='bx bx-category-alt fs-4'></i>
                                <p>{{ $project['type'] }}</p>
                            </div>
                            <div class="boxx-city d-flex">
                                <i class='bx bx-map fs-4'></i>
                                <p>{{ $project['location'] }}</p>
                            </div>
                            <div class="boxx-actions d-flex mb-3">
                                <a href="{{ route("updateMyproyekMahasiswa") }}" class="btn btn-outline-dark d-flex align-items-center me-3">
                                    Edit Proyek
                                </a>
                                <a href="" class="btn btn-danger d-flex align-items-center me-3">
                                    Hapus Proyek
                                </a>
                            </div>
                            <div class="boxx-body">
                                <div class="boxx-description">
                                    <p class="fs-5 fw-bold">Deksripsi Kegiatan</p>
                                    <p class="deskripsi">
                                        {{ $project['deskripsi'] }}
                                    </p>
                                </div>
                                <div class="boxx-details">
                                    <p class="fs-5 fw-bold">Rincian Kegiatan</p>
                                    <ol class="rincian" type="1">
                                        @foreach(explode(',',$project['rincian']) as $pp)
                                            <li>{{ $pp }}</li>
                                        @endforeach
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
                                                <form action="" method="">
                                                    @csrf
                                                    <input type="text" name="" id="" class="form-control">
                                                    <button type="submit" class="btn btn-dark mx-auto d-block mt-3">Tambah</button>
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
                    @endforeach
                    <div class="col-md-3 boxTiga d-none">
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
                                {{-- Open boleh dihapus --}}
                                {{-- Close boleh dihapus --}}
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