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
                        <form enctype="multipart/form-data" action="{{ route("profile") }}" method="post">
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
                                <input value="{{ $user->email ?? "" }}" disabled type="email" class="form-control" id="email" placeholder="Email">
                            </div>
                            <div class="mb-3">
                                <label for="Nama Lengkap" class="form-label">Nama Lengkap</label>
                                <input required value="{{ $profile->full_name ?? "" }}" type="text" class="form-control" name="full_name" id="Nama Lengkap" placeholder="Nama Lengkap">
                                @error('full_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="Jurusan" class="form-label">Jurusan</label>
                                <input value="{{ $profile->department ?? "" }}" required type="text" class="form-control" name="department" id="Jurusan" placeholder="Jurusan">
                                @error('department')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="Fakultas" class="form-label">Fakultas</label>
                                <input value="{{ $profile->faculty ?? "" }}" required type="text" class="form-control" name="faculty" id="Fakultas" placeholder="Fakultas">
                                @error('faculty')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="Universitas" class="form-label">Universitas</label>
                                <input value="{{ $profile->univeristy ?? "" }}" required type="text" class="form-control" name="univeristy" id="Universitas" placeholder="Universitas">
                                @error('univeristy')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="Kota tinggal sekarang" class="form-label">Kota Tinggal Sekarang</label>
                                <input value="{{ $profile->city ?? "" }}" required type="text" class="form-control" name="city" id="Kota Tinggal Sekarang" placeholder="Kota Tinggal Sekarang">
                                @error('city')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="Provinsi tinggal sekarang" class="form-label">Provinsi tinggal sekarang</label>
                                <input value="{{ $profile->province ?? "" }}" required type="text" class="form-control" name="province" id="Provinsi tinggal sekarang" placeholder="Provinsi tinggal sekarang">
                                @error('province')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="Hobi" class="form-label">Hobi</label>
                                <div class="d-flex d-hobi">
                                </div>
                                <div class="input-group">
                                    <input type="text" class="form-control input-hobi">
                                    <span class="input-group-text border-dark btn-add-hobi">
                                        <i class='bx bx-plus'></i>
                                    </span>
                                </div>
                                <input value="" type="text" class="form-control hobi" name="hobi" id="Hobi" placeholder="Hobi" hidden>
                                <small>Tekan kembali hobi, jika ada salah</small>
                            </div>
                            <div class="mb-3">
                                <label for="Keahlian" class="form-label">Keahlian</label>
                                <div class="d-flex d-ahli">
                                </div>
                                <div class="input-group">
                                    <input type="text" class="form-control input-ahli">
                                    <span class="input-group-text border-dark btn-add-ahli">
                                        <i class='bx bx-plus'></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control ahli" name="keahlian" id="Keahlian" placeholder="Keahlian" hidden>
                                <small>Tekan kembali keahlian, jika ada salah</small>
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

            let divHobi = document.querySelector(".d-hobi"),
                inputHobi = document.querySelector(".input-hobi"),
                btnAddHobi = document.querySelector(".btn-add-hobi"),
                hobi = document.querySelector(".hobi"),
                arr = []

            let hobiss = "{{$hobi}}".split(',');



            btnAddHobi.onclick = () =>{
                let button = document.createElement("BUTTON"),
                    span = document.createElement("SPAN")
                button.type = "button"
                button.classList.add("btn", "btn-secondary", "rounded-pill", "p-1", "px-3", "text-light", "mb-3", "btn-hobi", "me-1")
                if(inputHobi.value == ""){
                    console.log("Silahkan isi terlebih dahulu")
                }else{
                    button.innerHTML = inputHobi.value
                    button.appendChild(span)
                    divHobi.appendChild(button)
                    arr.push(`${inputHobi.value}`)
                    hobi.value = arr
                    inputHobi.value = ""
                }
                let btnHobi = document.querySelectorAll(".btn-hobi span")
                for(let i = 0; i < btnHobi.length; i++){
                    btnHobi[i].parentElement.onclick = (e) =>{
                        btnHobi[i].parentElement.remove()
                        arr = arr.slice(i+1)
                        hobi.value = arr;
                    }
                }
            }

            hobiss.forEach(function (value) {
                inputHobi.value = value;
                btnAddHobi.click();
            })

            let divAhli = document.querySelector(".d-ahli"),
                inputAhli = document.querySelector(".input-ahli"),
                btnAddAhli = document.querySelector(".btn-add-ahli"),
                ahli = document.querySelector(".ahli"),
                arrr = []
            
            btnAddAhli.onclick = () =>{
                let button = document.createElement("BUTTON"),
                    span = document.createElement("SPAN")
                button.type = "button"
                button.classList.add("btn", "btn-secondary", "rounded-pill", "p-1", "px-3", "text-light", "mb-3", "btn-ahli", "me-1")
                if(inputAhli.value == ""){
                    console.log("Silahkan isi terlebih dahulu")
                }else{
                    button.innerHTML = inputAhli.value
                    button.appendChild(span)
                    divAhli.appendChild(button)
                    arrr.push(inputAhli.value)
                    ahli.value = arrr
                    inputAhli.value = ""
                }
                let btnAhli = document.querySelectorAll(".btn-ahli span")
                for(let i = 0; i < btnAhli.length; i++){
                    btnAhli[i].parentElement.onclick = (e) =>{
                        btnAhli[i].parentElement.remove()
                        arrr = arrr.slice(i+1)
                        ahli.value = arrr
                    }
                }
            }

            let ahliss = "{{$keahlian}}".split(',');
            ahliss.forEach(function (value) {
                inputAhli.value = value;
                btnAddAhli.click();
            })


        </script>
    
@endsection