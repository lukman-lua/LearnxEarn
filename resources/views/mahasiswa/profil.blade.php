@extends("layouts.mahasiswa")
@section("content")

        {{-- Open Profile --}}
        <section>
            <div class="container-lg mt-3">
                <p class="fs-3">Profil Saya</p>
                <div class="col-md-6 mx-auto mb-3 d-flex justify-content-between">
                    <button type="button" class="btn btn-light btn-change aktiv btnData">Data diri</button>
                    <button type="button" class="btn btn-light btn-change btnPass">Ganti Password</button>
                </div>
                <div class="row">
                    <div class="col-md-6 mx-auto profilData d-block">
                        <img src={{ url("images/login-1.png") }} alt="" class="profile-img border rounded-circle p-3 border-dark mx-auto d-block">
                        <form action="" method="">
                            <div class="mb-3">
                                <label for="foto" class="form-label">Upload Foto</label><br>
                                <input type="file" name="" id="foto" class="form-control border-0">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="" id="email" placeholder="Email">
                            </div>
                            <div class="mb-3">
                                <label for="Nama Lengkap" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" name="" id="Nama Lengkap" placeholder="Nama Lengkap">
                            </div>
                            <div class="mb-3">
                                <label for="NIM" class="form-label">NIM</label>
                                <input type="text" class="form-control" name="" id="NIM" placeholder="NIM">
                            </div>
                            <div class="mb-3">
                                <label for="Telepon" class="form-label">Telepon</label>
                                <input type="tel" class="form-control" name="" id="Telepon" placeholder="Telepon">
                            </div>
                            <div class="mb-3">
                                <label for="Jurusan" class="form-label">Jurusan</label>
                                <input type="text" class="form-control" name="" id="Jurusan" placeholder="Jurusan">
                            </div>
                            <div class="mb-3">
                                <label for="Fakultas" class="form-label">Fakultas</label>
                                <input type="text" class="form-control" name="" id="Fakultas" placeholder="Fakultas">
                            </div>
                            <div class="mb-3">
                                <label for="Universitas" class="form-label">Universitas</label>
                                <input type="text" class="form-control" name="" id="Universitas" placeholder="Universitas">
                            </div>
                            <div class="mb-3">
                                <label for="Kota tinggal sekarang" class="form-label">Kota Tinggal Sekarang</label>
                                <input type="text" class="form-control" name="" id="Kota Tinggal Sekarang" placeholder="Kota Tinggal Sekarang">
                            </div>
                            <div class="mb-3">
                                <label for="Provinsi tinggal sekarang" class="form-label">Provinsi tinggal sekarang</label>
                                <input type="text" class="form-control" name="" id="Provinsi tinggal sekarang" placeholder="Provinsi tinggal sekarang">
                            </div>
                            <div class="mb-3">
                                <label for="Hobi" class="form-label">Hobi</label>
                                <input type="text" class="form-control" name="" id="Hobi" placeholder="Hobi">
                            </div>
                            <div class="mb-3">
                                <label for="Keahlian" class="form-label">Keahlian</label>
                                <input type="text" class="form-control" name="" id="Keahlian" placeholder="Keahlian">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-dark">Simpan</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 mx-auto profilPass d-none">
                        <form action="" method="">
                            <div class="mb-3">
                                <label for="Passward lama" class="form-label">Passward lama</label>
                                <input type="password" class="form-control" name="" id="Passward lama" placeholder="Passward lama">
                            </div>
                            <div class="mb-3">
                                <label for="Password baru" class="form-label">Password baru</label>
                                <input type="password" class="form-control" name="" id="Password baru" placeholder="Password baru">
                            </div>
                            <div class="mb-3">
                                <label for="Konfirmasi password" class="form-label">Konfirmasi password</label>
                                <input type="password" class="form-control" name="" id="Konfirmasi password" placeholder="Konfirmasi password">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-dark">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        {{-- Close Profile --}}

        {{-- JS --}}
        <script>
            let btnData = document.querySelector(".btnData"),
                btnPass = document.querySelector(".btnPass"),
                profilData = document.querySelector(".profilData"),
                profilPass = document.querySelector(".profilPass")

            btnData.onclick = () =>{
                profilData.classList.replace("d-none", "d-block")
                profilPass.classList.replace("d-block", "d-none")
                btnData.classList.add("aktiv")
                btnPass.classList.remove("aktiv")
            }
            btnPass.onclick = () =>{
                profilData.classList.replace("d-block", "d-none")
                profilPass.classList.replace("d-none", "d-block")
                btnData.classList.remove("aktiv")
                btnPass.classList.add("aktiv")
            }
        </script>
    
@endsection