@extends("layouts.organisasi")
@section("content")

<section>
    <div class="container-lg mt-3">
        <p class="fs-3 text-center fw-semibold">Profil Saya</p>
        <div class="row justify-content-md-center">
            <div class="d-flex justify-content-center col-md-auto">
                <img src={{ url("images/account.png") }} alt="profil" style="height: 10rem"/>
            </div>
            <div class="col-md-auto">
                <table class="table table-borderless">
                    <tr>
                        <td>Nama Organisasi/Instansi</td>
                        <td>:</td>
                        <td>Dicoding</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td>dicoding@gmail.com</td>
                    </tr>
                    <tr>
                        <td>Nama Universitas/PT/CV/dll</td>
                        <td>:</td>
                        <td>Dicoding Space</td>
                    </tr>
                    <tr>
                        <td>Bidang Organisasi/Instansi</td>
                        <td>:</td>
                        <td>Teknologi</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>Jl. Batik Kumeli No.50, Sukaluyu, Kec. Cibeunying Kaler</td>
                    </tr>
                    <tr>
                        <td>Kota</td>
                        <td>:</td>
                        <td>Bandung</td>
                    </tr>
                    <tr>
                        <td>Provinsi</td>
                        <td>:</td>
                        <td>Jawa Barat</td>
                    </tr>
                    <tr>
                        <td>Link Website</td>
                        <td>:</td>
                        <td><a href="dicoding.com">dicoding.com</a></td>
                    </tr>
                    <tr>
                        <td>Instagram</td>
                        <td>:</td>
                        <td><a href="#">@dicoding.com</a></td>
                    </tr>
                    <tr>
                        <td>Twitter</td>
                        <td>:</td>
                        <td><a href="#">dicoding</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container-lg my-5">
        <div class="row">
            <p class="text-center fs-3 fw-bold">Kegiatan yang dilaksanakan</p>
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
                            <p class="fw-bold text-dark mb-0 mt-0">21st-Century Digital Educator (Guru Digital Abad 21)</p>
                        </div>
                        <div class="d-flex align-items-center box-events">
                            <i class='bx bx-calendar-alt fs-4 text-dark'></i>
                            <p class="text-dark mb-0 mt-0">Magang</p>
                        </div>
                        <div class="d-flex align-items-center box-locations">
                            <i class='bx bx-building-house fs-4 text-dark'></i>
                            <p class="text-dark mb-0 mt-0">21st-Century Digital Educator (Guru Digital Abad 21)</p>
                        </div>
                        <div class="d-flex align-items-center box-city">
                            <i class='bx bx-map fs-4 text-dark'></i>
                            <p class="text-dark mb-0 mt-0">Jakarta</p>
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

@endsection
