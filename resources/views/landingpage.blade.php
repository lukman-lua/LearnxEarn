@extends("layouts.navbar")
@section('content')
    
        {{-- Open Section 1 --}}

        <section>
            <div class="container-lg">
                <div class="row align-items-center mt-3">
                    <div class="col-md-6">
                        <p class="fs-2 fw-normal">Temukan kegiatanmu dengan cepat, tepat, dan praktis!</p>
                        <p class="fs-6 fw-normal">Learn x Earn adalah platform untuk mahasiswa untuk memudahkan kamu mencari informasi seputar kegiatan seperti magang, kepanitiaan, dan sebagainya.</p>
                        <a href="{{ route("mahasiswa") }}" class="btn btn btn-dark section-1-btn px-3">Telusuri Kegiatan</a>
                    </div>
                    <div class="col-md-6">
                        <img src={{ url("images/section-1.png") }} alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>

        {{-- Close Section 1 --}}
        {{-- Open Section 3 --}}

        <section class="my-5 pt-5">
            <div class="container-lg">
                <div class="row">
                    <p class="text-center fs-3 fw-bold">Kegiatan yang tersedia</p>
                </div>
                <div class="row justify-content-center">
                    <a href="" class="col-md-1-setengah border mx-2 d-flex flex-column align-items-center justify-content-center text-decoration-none text-dark">
                        <span class="iconify display-1 d-block" data-icon="fluent:organization-12-filled"></span>
                        <p>Organisasi</p>
                    </a>
                    <a href="" class="col-md-1-setengah border mx-2 d-flex flex-column align-items-center justify-content-center text-decoration-none text-dark">
                        <span class="iconify display-1 d-block" data-icon="material-symbols:home-work"></span>
                        <p>Magang</p>
                    </a>
                    <a href="" class="col-md-1-setengah border mx-2 d-flex flex-column align-items-center justify-content-center text-decoration-none text-dark">
                        <span class="iconify display-1 d-block" data-icon="ic:baseline-volunteer-activism"></span>
                        <p>Volunteer</p>
                    </a>
                    <a href="" class="col-md-1-setengah border mx-2 d-flex flex-column align-items-center justify-content-center text-decoration-none text-dark">
                        <span class="iconify display-1 d-block" data-icon="fa-solid:project-diagram"></span>
                        <p>Proyek</p>
                    </a>
                    <a href="" class="col-md-1-setengah border mx-2 d-flex flex-column align-items-center justify-content-center text-decoration-none text-dark">
                        <span class="iconify display-1 d-block" data-icon="fa6-solid:school-flag"></span>
                        <p>Beasiswa</p>
                    </a>
                    <a href="" class="col-md-1-setengah border mx-2 d-flex flex-column align-items-center justify-content-center text-decoration-none text-dark">
                        <span class="iconify display-1 d-block" data-icon="ic:round-work-history"></span>
                        Kerja Paruh Waktu
                    </a>
                </div>
            </div>
        </section>

        {{-- Close Section 3 --}}
        {{-- Open Section 4 --}}

        <section>
            <div class="container-lg my-5">
                <div class="row">
                    <p class="text-center fs-3 fw-bold">Kegiatan baru yang tersedia</p>
                </div>
                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

                    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m">
                        @for ($i = 0; $i < 8; $i++)
                        <li>
                            <div class="box border border-1 rounded-3 p-3 me-3">
                                <div class="box-status">
                                    {{-- Buka --}}
                                    <p class="text-success mb-0">Pendaftaran dibuka</p>
                                    {{-- Tutup --}}
                                    {{-- <p class="text-danger mb-0">Pendaftaran ditutup</p> --}}
                                </div>
                                <div class="box-title">
                                    <p class="fw-bold text-dark">21st-Century Digital Educator (Guru Digital Abad 21)</p>
                                </div>
                                <div class="d-flex align-items-center box-events">
                                    <i class='bx bx-calendar-alt fs-4 text-dark'></i>
                                    <p class="text-dark">Magang</p>
                                </div>
                                <div class="d-flex align-items-center box-locations">
                                    <i class='bx bx-building-house fs-4 text-dark'></i>
                                    <p class="text-dark">21st-Century Digital Educator (Guru Digital Abad 21)</p>
                                </div>
                                <div class="d-flex align-items-center box-city">
                                    <i class='bx bx-map fs-4 text-dark'></i>
                                    <p class="text-dark">Jakarta</p>
                                </div>
                            </div>
                            <div class="uk-position-center uk-panel"></div>
                        </li>
                        @endfor
                    </ul>
                    <a class="uk-position-center-left uk-position-small uk-hidden-hover text-dark" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover text-dark" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>
            </div>
        </section>

        {{-- Close Section 4 --}}
        {{-- Open Section 4 --}}

        <section>
            <div class="container-lg my-5">
                <div class="row">
                    <p class="text-center fs-3 fw-bold">Proyek baru yang ditambahkan</p>
                </div>
                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

                    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m">
                        @for ($i = 0; $i < 8; $i++)
                        <li>
                            <div class="box border border-1 rounded-3 p-3 me-3">
                                <div class="box-status">
                                    {{-- Buka --}}
                                    <p class="text-success mb-0">Tersedia</p>
                                    {{-- Tutup --}}
                                    {{-- <p class="text-danger mb-0">Tidak Tersedia/p> --}}
                                </div>
                                <div class="box-title fw-bold text-dark">
                                    <p>Tanaman hidroponik berbasis IoT</p>
                                </div>
                                <div class="box-body">
                                    <div class="events d-flex">
                                        <i class='bx bx-user-circle fs-4 text-dark'></i>
                                        <p class="text-dark">Fadhil</p>
                                    </div>
                                    <div class="location d-flex">
                                        <i class='bx bx-category-alt fs-4 text-dark'></i>
                                        <p class="text-dark">Internet of Things</p>
                                    </div>
                                    <div class="city d-flex">
                                        <i class='bx bx-map fs-4 text-dark'></i>
                                        <p class="text-dark">Jakarta</p>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-position-center uk-panel"></div>
                        </li>
                        @endfor
                    </ul>
                    <a class="uk-position-center-left uk-position-small uk-hidden-hover text-dark" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover text-dark" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>
            </div>
        </section>

        {{-- Close Section 4 --}}
        {{-- Open Section 5 --}}

        <section>
            <div class="container-lg my-5">
                <div class="row">
                    <p class="text-center fs-3 fw-bold">Pertanyaan umum</p>
                </div>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Apakah harus berstatus mahasiswa untuk bisa mengikuti kegiatan yang ada di sini?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Tidak bisa. Karena kegiatan ini ditujukan untuk mahasiswa dan tidak bisa ditujukan untuk umum</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Apakah kegiatannya berbayar?
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Tergantung mitra, untuk informasi lebih lanjut silahkan tekan detail info pada dashboard</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                Apakah kegiatan ini dibatasi umur?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Tergantung dari syrat dan ketentuan dari mitra tersebut</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Close Section 5 --}}
        {{-- Open Section 6 --}}
        <section>
            <div class="container-fluid bg-dark py-5">
                <div class="container-lg">
                    <div class="row align-items-center justify-content-evenly">
                        <div class="col-md-4">
                            <p class="fs-4 text-light fw-bold">
                                <img src="{{ url("images/logo.png") }}" alt="" class="img-fluid ratio ratio-1x1" style="width: 50px;">
                                Learn x Earn
                            </p>
                            <p class="fs-6 text-light">
                                Pusat: <br>
                                Jl. Situjuh 18, Kelurahan Jati, Kecamatan Padang Timur, Kota Padang, Sumatera Barat
                            </p>
                            <span class="text-light">
                                <i class='bx fs-3 me-3 bxl-instagram-alt'></i>
                                <i class='bx fs-3 me-3 bxl-twitter'></i>
                                <i class='bx fs-3 me-3 bxl-facebook-square'></i>
                            </span>
                        </div>
                        <div class="col-md-4">
                            <p class="fs-4 text-light fw-bold">Tentang Kami</p>
                            <p class="fs-6 text-light">
                                Learn x Earn adalah platform untuk mahasiswa untuk memudahkan mahasiswa dalam mencari informasi seputar kegiatan seperti magang, kepanitiaan, dan sebagainya.
                            </p>
                        </div>
                        <div class="col-md-3">
                            <p class="fs-4 text-light fw-bold">Hubungi Kami</p>
                            <span class="text-light fs-6">
                                <i class='bx bxs-phone-call'></i>
                                (0812) 3456789
                            </span>
                            <br>
                            <span class="text-light fs-6">
                                <i class='bx bxs-phone-call'></i>
                                (0812) 3456789
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- Close Section 6 --}}

@endsection