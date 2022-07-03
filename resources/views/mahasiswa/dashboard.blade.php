@extends("layouts.mahasiswa")
@section("content")
        @php
            
            $data = array(
                array(
                    "id"=>1,
                    "status"=>"buka",
                    "name"=>"Neo Telemetri",
                    "category"=>"Magang",
                    "location"=>"Limau manis Universitas Andalas",
                    "city"=>"Padang",
                    "desciption"=>"UKM yang bergerak dibidang IT"),
                array(
                    "id"=>2,
                    "status"=>"tutup",
                    "name"=>"Neo Instumentasi",
                    "category"=>"Kerja Paruh Waktu",
                    "location"=>"Pepaya manis Universitas Biru",
                    "city"=>"Biru",
                    "desciption"=>"CV yang bergerak dibidang IoT"),
                array(
                    "id"=>3,
                    "status"=>"buka",
                    "name"=>"Neo Sosial",
                    "category"=>"Volunteer",
                    "location"=>"Rumah Merah",
                    "city"=>"Kota",
                    "desciption"=>"Kelompok yang bergerak dibidang Sosial"),
                array(
                    "id"=>4,
                    "status"=>"tutup",
                    "name"=>"Neo Schoolarship",
                    "category"=>"Beasiswa",
                    "location"=>"Rumah Putih",
                    "city"=>"Metropolis",
                    "desciption"=>"Program yang bergerak dibidang Akademik"),
                );

                $row = array();
        @endphp

        {{-- Open Dashboard --}}
        <section>
            <div class="container-lg mt-3">
                <div class="row">
                    <p class="fs-3">DAFTAR KEGIATAN</p>
                    <p class="fs-5 fw-bold">Pilih jenis kegiatan</p>
                </div>
                <div class="row justify-content-between mb-3 mahasiswa-events">
                    <div class="col-md-3 mb-3">
                        <div class="dropdown mb-3">
                            <button class="btn btn-outline-dark dropdown-toggle d-flex justify-content-between align-items-center w-100 btnEvent" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <div>
                                    <i class='bx bx-calendar-alt fs-5'></i>Kegiatan
                                </div>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Organisasi</a></li>
                                <li><a class="dropdown-item" href="#">Magang</a></li>
                                <li><a class="dropdown-item" href="#">Beasiswa</a></li>
                                <li><a class="dropdown-item" href="#">Kerja Paruh Waktu</a></li>
                            </ul>
                        </div>
                        <button type="button" class="btn btn-outline-dark w-100 text-start btnProject">
                            <i class='bx bx-buildings'></i>Proyek
                        </button>
                    </div>
                    <div class="col-md-2 mb-3">
                        <div class="dropdown">
                            <button class="btn btn-outline-dark dropdown-toggle d-flex justify-content-between align-items-center w-100" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                <div>
                                    <i class='bx bx-list-check fs-5'></i>Status
                                </div>
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
                <div class="row align-items-stretch mb-3" id="events">
                    <div class="col-md-3 overflow-scroll boxSatu">
                        {{-- Open Looping --}}
                        @foreach ($data as $a)
                        <div class="box border border-dark rounded-4 p-3 mb-2">
                            <div class="box-status">
                                {{-- Buka --}}
                                @if ($a["status"] == "buka")
                                <p class="text-hijau mb-0">Pendaftaran dibuka</p>
                                @else
                                {{-- Tutup --}}
                                <p class="text-danger mb-0">Pendaftaran ditutup</p>
                                @endif
                            </div>
                            <div class="box-title fw-bold">
                                <p class="text-decoration-none text-dark">{{ $a['name'] }}</p>
                            </div>
                            <div class="box-body">
                                <div class="box-category d-flex">
                                    <i class='bx bx-calendar-alt fs-4'></i>
                                    <p>{{ $a['category'] }}</p>
                                </div>
                                <div class="box-location d-flex">
                                    <i class='bx bx-building-house fs-4'></i>
                                    <p>{{ $a['location'] }}</p>
                                </div>
                                <div class="box-city d-flex">
                                    <i class='bx bx-map fs-4'></i>
                                    <p>{{ $a['city'] }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        {{-- Close Looping --}}
                    </div>
                    <div class="col-md-6 position-relative">
                        @foreach ($data as $a)
                        <div class="boxx border border-dark rounded-4 p-3 boxDua position-absolute" style="width: 95%">
                            <div class="boxx-container">
                                <div class="boxx-status">
                                    {{-- Buka --}}
                                    @if ($a["status"] == "buka")
                                    <p class="text-hijau mb-0">Pendaftaran dibuka</p>
                                    @else
                                    {{-- Tutup --}}
                                    <p class="text-danger mb-0">Pendaftaran ditutup</p>
                                    @endif
                                </div>
                                <div class="boxx-title fw-bold">
                                    <p>{{ $a['name'] }}</p>
                                </div>
                                <div class="boxx-category d-flex">
                                    <i class='bx bx-calendar-alt fs-4'></i>
                                    <p>{{ $a['category'] }}</p>
                                </div>
                                <div class="boxx-location d-flex">
                                    <i class='bx bx-building-house fs-4'></i>
                                    <p>{{ $a['location'] }}</p>
                                </div>
                                <div class="boxx-city d-flex">
                                    <i class='bx bx-map fs-4'></i>
                                    <p>{{ $a['city'] }}</p>
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
                                            {{ $a['desciption'] }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="col-md-3 boxTiga">
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
                <div class="row align-items-stretch mb-3 d-none" id="projects">
                    <div class="col-md-3 overflow-scroll boxSatu">
                        {{-- Open Looping --}}
                        <div class="dox border border-dark rounded-4 p-3 mb-2">
                            <div class="dox-status">
                                {{-- Buka --}}
                                <p class="text-hijau mb-0">Tersedia</p>
                                {{-- Tutup --}}
                                {{-- <p class="text-danger mb-0">Tidak Tersedia/p> --}}
                            </div>
                            <div class="dox-title fw-bold">
                                <p>Tanaman hidroponik berbasis IoT</p>
                            </div>
                            <div class="dox-body">
                                <div class="dox-name d-flex">
                                    <i class='bx bx-user-circle fs-4'></i>
                                    <p>Fadhil</p>
                                </div>
                                <div class="dox-study d-flex">
                                    <i class='bx bx-category-alt fs-4'></i>
                                    <p>Internet of Things</p>
                                </div>
                                <div class="dox-city d-flex">
                                    <i class='bx bx-map fs-4'></i>
                                    <p>Jakarta</p>
                                </div>
                            </div>
                        </div>
                        {{-- Close Looping --}}
                    </div>
                    <div class="col-md-6">
                        <div class="doxx border border-dark rounded-4 p-3 boxDua">
                            <div class="doxx-status">
                                {{-- Buka --}}
                                <p class="text-hijau">Tersedia</p>
                                {{-- Tutup --}}
                                {{-- <p class="text-danger">Tidak Tersedia</p> --}}
                            </div>
                            <div class="doxx-title fw-bold">
                                <p>Tanaman hidroponik berbasis IoT</p>
                            </div>
                            <div class="doxx-name d-flex">
                                <i class='bx bx-user-circle fs-4'></i>
                                <p>Fadhil</p>
                            </div>
                            <div class="doxx-location d-flex">
                                <i class='bx bx-category-alt fs-4'></i>
                                <p>Internet of Things</p>
                            </div>
                            <div class="doxx-city d-flex">
                                <i class='bx bx-map fs-4'></i>
                                <p>Jakarta</p>
                            </div>
                            <div class="doxx-actions d-flex mb-3">
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
                            <div class="doxx-body">
                                <div class="doxx-description">
                                    <p class="fs-5 fw-bold">Deksripsi Kegiatan</p>
                                    <p class="doxx-deskripsi">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                </div>
                                <div class="doxx-kolaborasi">
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
                    <div class="col-md-3 boxTiga">
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
        <script>
            let box = document.querySelectorAll(".box"),
                boxx = document.querySelectorAll(".boxx")

            for(let i = 0; i < box.length; i++){
                if(i != 0){
                    boxx[i].classList.add("d-none")
                }
            }

            for(let i = 0; i < box.length; i++){
                box[i].onclick = () =>{
                    for(let j = 0; j < box.length; j++){
                        if(j != i){
                            boxx[j].classList.add("d-none")
                        }else{
                            boxx[j].classList.remove("d-none")
                        }
                    }
                }
            }

            let projects = document.getElementById("projects"),
                events = document.getElementById("events"),
                btnProject = document.querySelector(".btnProject"),
                btnEvent = document.querySelector(".btnEvent")
            
            btnEvent.onclick = () =>{
                events.classList.remove("d-none")
                projects.classList.add("d-none")
            }
            btnProject.onclick = () =>{
                events.classList.add("d-none")
                projects.classList.remove("d-none")
            }
        </script>
    
@endsection