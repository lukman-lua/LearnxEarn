@extends("layouts.navbar")
@section('content')
    
        {{-- Open Section 1 --}}

        <section>
            <div class="container-lg">
                <div class="row align-items-center mt-3">
                    <div class="col-md-6">
                        <p class="fs-2 fw-normal">Temukan kegiatanmu dengan cepat, tepat, dan praktis!</p>
                        <p class="fs-6 fw-normal">Learn x Earn adalah platform untuk mahasiswa untuk memudahkan kamu mencari informasi seputar kegiatan seperti magang, kepanitiaan, dan sebagainya.</p>
                        <button type="button" class="btn btn btn-dark section-1-btn px-3">Telusuri Kegiatan</button>
                    </div>
                    <div class="col-md-6">
                        <img src={{ url("images/section-1.png") }} alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>

        {{-- Close Section 1 --}}
        {{-- Open Section 2 --}}

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

        {{-- Close Section 2 --}}

@endsection