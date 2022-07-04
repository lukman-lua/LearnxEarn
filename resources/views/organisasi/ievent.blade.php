@extends("layouts.mahasiswa")
@section("content")

        {{-- Open Dashboard --}}
        <section>
            <div class="container-lg mt-3">
                <div class="row">
                    <p class="fs-3">DAFTAR KEGIATAN ANDA</p>
                </div>
                <div class="row justify-content-between mb-3 mahasiswa-events">
                    <div class="col-md-3 mb-3">
                        <a href={{ route("add_eventView") }} class="btn btn-dark text-light">Tambah Kegiatan</a>
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

                    <div class="col-md-3 overflow-scroll boxSatu" style="height: 100%" >
                        {{-- Open Looping --}}
                        @foreach ($events as $event)
                            <div class="box border border-dark rounded-4 p-3 mb-2">
                                <div class="box-status">
                                    {{-- Buka --}}
                                    @if ($event["status"] == "Buka")
                                        <p class="text-hijau mb-0">Pendaftaran dibuka</p>
                                    @else
                                        {{-- Tutup --}}
                                        <p class="text-danger mb-0">Pendaftaran ditutup</p>
                                    @endif
                                </div>
                                <div class="box-title fw-bold">
                                    <p class="text-decoration-none text-dark">{{ $event['tittle'] }}</p>
                                </div>
                                <div class="box-body">
                                    <div class="box-category d-flex">
                                        <i class='bx bx-calendar-alt fs-4'></i>
                                        <p>{{ $event['type'] }}</p>
                                    </div>
                                    <div class="box-location d-flex">
                                        <i class='bx bx-building-house fs-4'></i>
                                        <p>{{ $event['location'] }}</p>
                                    </div>
                                    <div class="box-city d-flex">
                                        <i class='bx bx-map fs-4'></i>
                                        <p>{{ $event['city'] ?? "" }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{-- Close Looping --}}
                    </div>
                    <div class="col-md-9 position-relative">
                        @foreach ($events as $event)
                            <div class="boxx border border-dark rounded-4 p-3 boxDua position-absolute" style="width: 95%; min-height: 500px;">
                                <div class="boxx-container">
                                    <div class="boxx-status">
                                        {{-- Buka --}}
                                        @if ($event["status"] == "Buka")
                                            <p class="text-hijau mb-0">Pendaftaran dibuka</p>
                                        @else
                                            {{-- Tutup --}}
                                            <p class="text-danger mb-0">Pendaftaran ditutup</p>
                                        @endif
                                    </div>
                                    <div class="boxx-title fw-bold">
                                        <p>{{ $event['tittle'] }}</p>
                                    </div>
                                    <div class="boxx-category d-flex">
                                        <i class='bx bx-calendar-alt fs-4'></i>
                                        <p>{{ $event['type'] }}</p>
                                    </div>
                                    <div class="boxx-location d-flex">
                                        <i class='bx bx-building-house fs-4'></i>
                                        <p>{{ $event['location'] }}</p>
                                    </div>
                                    <div class="boxx-city d-flex">
                                        <i class='bx bx-map fs-4'></i>
                                        <p>{{ $event['city'] ?? "" }}</p>
                                    </div>
                                    <div class="boxx-actions d-flex mb-3">
                                        <a href="" class="btn btn-dark me-3">Daftar</a>
                                        <a href="" class="btn btn-outline-dark d-flex align-items-center me-3">
                                            <i class='bx bxs-user-detail fs-4'></i>
                                            Detail info kegiatan
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
                                                {{ $event['deskripsi'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

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
                                @for ($i = 0; $i <= 5; $i++)
                                <div class="boxxx-user d-flex align-items-center mb-3">
                                    <img src={{ url("images/login-1.png") }} alt="" class="boxxx-img border border-dark me-1 text-wrap">
                                    <div class="user">
                                        <p class="fw-bold fs-6">Rifda Sasmi Zahra</p>
                                        <p>rifdasasmizahra83@gmail.com</p>
                                    </div>
                                </div>
                                @endfor
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