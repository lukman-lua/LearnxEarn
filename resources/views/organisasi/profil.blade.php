@extends("layouts.organisasi")
@section("content")

        {{-- Open Profile --}}
        <section>
            <div class="container-lg mt-3">
                <p class="fs-3">Profil Organisasi/Instansi</p>
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
                                <label for="Nama organisasi/instansi" class="form-label">Nama organisasi/instansi</label>
                                <input type="text" class="form-control" name="" id="Nama organisasi/instansi" placeholder="Nama organisasi/instansi">
                            </div>
                            <div class="mb-3">
                                <label for="Bidang organisasi/instansi" class="form-label">Bidang organisasi/instansi</label>
                                <input type="text" class="form-control" name="" id="Bidang organisasi/instansi" placeholder="Bidang organisasi/instansi">
                            </div>
                            <div class="mb-3">
                                <label for="Alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" name="" id="Alamat" placeholder="Alamat">
                            </div>
                            <div class="mb-3">
                                <label for="Kota" class="form-label">Kota</label>
                                <input type="text" class="form-control" name="" id="Kota" placeholder="Kota">
                            </div>
                            <div class="mb-3">
                                <label for="Provinsi" class="form-label">Provinsi</label>
                                <input type="text" class="form-control" name="" id="Provinsi" placeholder="Provinsi">
                            </div>
                            <div class="mb-3">
                                <label for="Link Website" class="form-label">Link Website</label>
                                <input type="text" class="form-control" name="" id="Link Website" placeholder="Link Website">
                            </div>
                            <div class="mb-3">
                                <label for="Instagram" class="form-label">Instagram</label>
                                <input type="text" class="form-control" name="" id="Instagram" placeholder="Instagram">
                            </div>
                            <div class="mb-3">
                                <label for="Twitter" class="form-label">Twitter</label>
                                <input type="text" class="form-control" name="" id="Twitter" placeholder="Twitter">
                            </div>
                            <div class="mb-3">
                                <label for="Facebook" class="form-label">Facebook</label>
                                <input type="text" class="form-control" name="" id="Facebook" placeholder="Facebook">
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