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
                        @if($user->profile_pict)
                            <img src={{ \Illuminate\Support\Facades\Storage::url($user->profile_pict) }} alt="" class="profile-img border rounded-circle border-dark mx-auto d-block">
                        @else
                            <img src={{ url("images/login-1.png") }} alt="" class="profile-img border rounded-circle p-3 border-dark mx-auto d-block">
                        @endif
                        <form enctype="multipart/form-data" action="{{ route("my_profile") }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="foto" class="form-label">Upload Foto</label><br>
                                <input type="file" name="profile_pict" id="foto" class="form-control border-0">
                                @error('profile_pict')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input value="{{ $user->email ?? "" }}" disabled type="email" class="form-control" name="email" id="email" placeholder="Email">
                            </div>
                            <div class="mb-3">
                                <label for="Nama organisasi/instansi" class="form-label">Nama organisasi/instansi</label>
                                <input required value="{{ $user->name ?? "" }}" type="text" class="form-control" name="name" id="Nama organisasi/instansi" placeholder="Nama organisasi/instansi">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="Nama Universitas/PT/CV/dll" class="form-label">Nama Universitas/PT/CV/dll</label>
                                <input required value="{{ $profile->second_name ?? "" }}" type="text" class="form-control" name="second_name" id="Nama Universitas/PT/CV/dll" placeholder="Nama Universitas/PT/CV/dll">
                                @error('second_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="Bidang organisasi/instansi" class="form-label">Bidang organisasi/instansi</label>
                                <input required value="{{ $profile->sector ?? "" }}" type="text" class="form-control" name="sector" id="Bidang organisasi/instansi" placeholder="Bidang organisasi/instansi">
                                @error('sector')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="Alamat" class="form-label">Alamat</label>
                                <input required value="{{ $profile->alamat ?? "" }}" type="text" class="form-control" name="alamat" id="Alamat" placeholder="Alamat">
                                @error('alamat')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="Kota" class="form-label">Kota</label>
                                <input required value="{{ $profile->city ?? "" }}" type="text" class="form-control" name="city" id="Kota" placeholder="Kota">
                                @error('city')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="Provinsi" class="form-label">Provinsi</label>
                                <input required value="{{ $profile->province ?? "" }}" type="text" class="form-control" name="province" id="Provinsi" placeholder="Provinsi">
                                @error('province')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="Link Website" class="form-label">Link Website</label>
                                <input required value="{{ $profile->link_website ?? "" }}" type="text" class="form-control" name="link_website" id="Link Website" placeholder="Link Website">
                                @error('link_website')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="Instagram" class="form-label">Instagram</label>
                                <input value="{{ $profile->instagram ?? "" }}" type="text" class="form-control" name="instagram" id="Instagram" placeholder="Instagram">
                            </div>
                            <div class="mb-3">
                                <label for="Twitter" class="form-label">Twitter</label>
                                <input value="{{ $profile->twitter ?? "" }}" type="text" class="form-control" name="twitter" id="Twitter" placeholder="Twitter">
                            </div>
                            <div class="mb-3">
                                <label for="Facebook" class="form-label">Facebook</label>
                                <input value="{{ $profile->facebook ?? "" }}" type="text" class="form-control" name="facebook" id="Facebook" placeholder="Facebook">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-dark">Simpan</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 mx-auto profilPass d-none">
                        <form action="{{ route("update_password") }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="Passward lama" class="form-label">Passward lama</label>
                                <input required type="password" class="form-control" name="current_password" id="Passward lama" placeholder="Passward lama">
                                @error('current_password')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="Password baru" class="form-label">Password baru</label>
                                <input required type="password" class="form-control" name="new_password" id="Password baru" placeholder="Password baru">
                                @error('new_password')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="Konfirmasi password" class="form-label">Konfirmasi password</label>
                                <input required type="password" class="form-control" name="confirm_password" id="Konfirmasi password" placeholder="Konfirmasi password">
                                @error('confirm_password')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
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