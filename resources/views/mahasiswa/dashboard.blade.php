@extends("layouts.mahasiswa")
@section("content")

        {{-- Open Dashboard --}}
        <section style="height: 100%">
            <div class="container-lg mt-3">
                <div class="row">
                    <p class="fs-3 fw-bold">DAFTAR KEGIATAN</p>
                    <p class="fs-5">Pilih jenis kegiatan</p>
                </div>
                <div class="row justify-content-between mb-3 mahasiswa-events">
                    <div class="col-md-3 mb-3">
                        <div class="dropdown mb-3">
                            <a href="#events" class="btn btn-outline-dark d-flex justify-content-between align-items-center w-100 btnEvent" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <div>
                                    <i class='bx bx-calendar-alt fs-5'></i> Kegiatan
                                </div>
                            </a>
{{--                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">--}}
{{--                                <li><a class="dropdown-item" href="#">Organisasi</a></li>--}}
{{--                                <li><a class="dropdown-item" href="#">Magang</a></li>--}}
{{--                                <li><a class="dropdown-item" href="#">Beasiswa</a></li>--}}
{{--                                <li><a class="dropdown-item" href="#">Kerja Paruh Waktu</a></li>--}}
{{--                            </ul>--}}
                        </div>
                        <a href="#projects" type="button" class="btn btn-outline-dark w-100 text-start btnProject">
                            <i class='bx bx-buildings fs-5'></i>Proyek
                        </a>
                    </div>
                    <div class="col-md-2 mb-3">
{{--                        <div class="dropdown">--}}
{{--                            <button class="btn btn-outline-dark dropdown-toggle d-flex justify-content-between align-items-center w-100" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                                <div>--}}
{{--                                    <i class='bx bx-list-check fs-5'></i>Status--}}
{{--                                </div>--}}
{{--                            </button>--}}
{{--                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">--}}
{{--                                <li><a class="dropdown-item" href="#">Buka</a></li>--}}
{{--                                <li><a class="dropdown-item" href="#">Tutup</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
                    </div>
                    <div class="col-md-7 mb-3">
                        <div class="position-relative">
                            <form id="searchkg" method="post" action="{{ route("dashboard.search") }}">
                                @csrf
                                <input value="{{ $find ?? "" }}" type="text" name="search" placeholder="Masukkan kata kunci" class="form-control border-dark"/>
                                <i onclick="document.getElementById('searchkg').submit()" class='bx bx-search position-absolute top-50 end-0 translate-middle fs-4'></i>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row align-items-stretch mb-3" id="events">
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
                    <div class="col-md-6 position-relative">
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
                    <div class="col-md-3 boxTiga">
                        <div class="boxxx border border-dark rounded-4 p-3">
                            <div class="boxxx-recomendation">
                                <p class="fw-bold fs-6">Rekomendasi untuk kamu</p>
                                <form id="searchcc" action="{{ route("dashboard.searchUser") }}" method="post">
                                    @csrf
                                    <div class="input-group">
                                        <input name="searchUser" type="text" class="form-control">
                                        <span onclick="document.getElementById('searchcc').submit()" class="input-group-text">
                                                <i  class='bx bx-search'></i>
                                        </span>
                                    </div>
                                </form>
                                <br>
                                {{-- Open Looping --}}
                                @if($users)
                                    @foreach($users as $user)
                                        <div class="boxxx-user d-flex align-items-center mb-3">
                                            <img src={{ url("images/login-1.png") }} alt="" class="boxxx-img border border-dark me-1 text-wrap">
                                            <div class="user">
                                                <p class="fw-bold fs-6">{{ $user->name }}</p>
                                                <p>{{ $user->email }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="boxxx-user d-flex align-items-center mb-3">
                                        <div class="user">
                                            <p>Tidak ditemukan</p>
                                        </div>
                                    </div>
                                @endif
                                {{-- Close Looping --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-stretch mb-3 d-none" id="projects">
                    <div class="col-md-3 overflow-scroll doxSatu">
                        {{-- Open Looping --}}
                        @foreach($projets as $project)
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
                    </div>
                    <div class="col-md-6">
                        @foreach($projets as $project)
                        <div class="doxx border border-dark rounded-4 p-3 doxDua">
                            <div class="doxx-status">
                                @if ($project["status"] == "Buka")
                                    <p class="text-hijau mb-0">Tersedia</p>
                                @else
                                    <p class="text-danger mb-0">Tidak Tersedia/p>
                                @endif
                            </div>
                            <div class="doxx-title fw-bold">
                                <p>{{ $project['tittle'] }}</p>
                            </div>
                            <div class="doxx-name d-flex">
                                <i class='bx bx-user-circle fs-4'></i>
                                <p>{{ \App\Models\User::where('id_user', $project["id_user"])->first()->name }}</p>
                            </div>
                            <div class="doxx-location d-flex">
                                <i class='bx bx-category-alt fs-4'></i>
                                <p>{{ $project['type'] }}</p>
                            </div>
                            <div class="doxx-city d-flex">
                                <i class='bx bx-map fs-4'></i>
                                <p>{{ $project['location'] }}</p>
                            </div>
                            <div class="doxx-actions d-flex mb-3">
                                <a href="#" class="btn btn-dark d-flex align-items-center me-3">
                                    <i class='bx bxl-whatsapp fs-4'></i>
                                    {{ $project['contact'] }}
                                </a>
                                <a href="{{ $project['link_detail'] }}" class="btn btn-outline-dark d-flex align-items-center me-3">
                                    <i class='bx bxs-user-detail fs-4'></i>
                                    Detail proyek
                                </a>
                                <a href="#" class="btn btn-outline-dark d-flex align-items-center">
                                    <i class='bx bx-bookmark fs-4'></i>
                                    Simpan
                                </a>
                            </div>
                            <div class="doxx-body">
                                <div class="doxx-description">
                                    <p class="fs-5 fw-bold">Deksripsi Kegiatan</p>
                                    <p class="doxx-deskripsi">
                                        {{ $project['deskripsi'] }}
                                    </p>
                                </div>
                                <div class="doxx-kolaborasi">
                                    <p class="fs-5 fw-bold">Kolabolator</p>
                                    <!-- Button trigger modal -->
                                    
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
                        @endforeach
                    </div>
                    <div class="col-md-3 doxTiga">
                        <div class="boxxx border border-dark rounded-4 p-3">
                            <div class="boxxx-recomendation">
                                <p class="fw-bold fs-6">Rekomendasi untuk kamu</p>
                                <form id="searchcssc" action="{{ route("dashboard.searchUser") }}" method="post">
                                    @csrf
                                    <div class="input-group">
                                        <input name="searchUser" type="text" class="form-control">
                                        <span onclick="document.getElementById('searchcssc').submit()" class="input-group-text">
                                                <i  class='bx bx-search'></i>
                                        </span>
                                    </div>
                                </form>
                                <br>
                                {{-- Open Looping --}}
                                @if($users)
                                    @foreach($users as $user)
                                        <div class="boxxx-user d-flex align-items-center mb-3">
                                            <img src={{ url("images/login-1.png") }} alt="" class="boxxx-img border border-dark me-1 text-wrap">
                                            <div class="user">
                                                <p class="fw-bold fs-6">{{ $user->name }}</p>
                                                <p>{{ $user->email }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="boxxx-user d-flex align-items-center mb-3">
                                        <div class="user">
                                            <p>Tidak ditemukan</p>
                                        </div>
                                    </div>
                                @endif
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