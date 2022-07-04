@extends("layouts.organisasi")
@section("content")

        {{-- Open Tambah --}}
        <section>
            <div class="container-lg tambah mt-3">
                <p class="fs-3 text-center">TAMBAH KEGIATAN</p>
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <form action="{{ route("add_event") }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="Nama kegiatan" class="form-label">Nama kegiatan</label>
                                <input required type="text" class="form-control" name="tittle" id="Nama kegiatan" placeholder="Nama kegiatan">
                                @error('tittle')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="Jenis kegiatan" class="form-label">Jenis kegiatan</label>
                                <select required name="type" id="" class="form-control">
                                    <option value="Magang">Magang</option>
                                    <option value="Proyek">Proyek</option>
                                    <option value="Beasiswa">Beasiswa</option>
                                    <option value="Seminar">Seminar</option>
                                    <option value="Workshop">Workshop</option>
                                    <option value="Kepanitiaan">Kepanitiaan</option>
                                    <option value="Volunteer">Volunteer</option>
                                    <option value="Kerja Paruh Waktu">Kerja Paruh Waktu</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="Lokasi kegiatan" class="form-label">Lokasi kegiatan</label>
                                <input required type="text" class="form-control" name="location" id="Lokasi kegiatan" placeholder="Lokasi kegiatan">
                                @error('location')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="Kota" class="form-label">Kota</label>
                                <input required type="text" class="form-control" name="city" id="Lokasi kegiatan" placeholder="Lokasi kegiatan">
                                @error('city')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="Status kegiatan" class="form-label">Status kegiatan</label>
                                <select required name="status" id="" class="form-control">
                                    <option value="Buka">Buka</option>
                                    <option value="Tutup">Tutup</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="Deksripsi kegiatan" class="form-label">Deksripsi kegiatan</label>
                                <textarea required type="text" class="form-control" name="deskripsi" id="Deksripsi kegiatan" placeholder="Deksripsi kegiatan"></textarea>
                                @error('deskripsi')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="Rincian kegiatan" class="form-label">Rincian kegiatan</label>
                                <div class="d-flex d-rincian"></div>
                                <div class="input-group ">
                                    <input type="text" class="form-control input-rincian">
                                    @error('rincian')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <span class="input-group-text border-dark btn-add-rincian">
                                        <i class='bx bx-plus fs-4'></i>
                                    </span>
                                </div>
                                <input required type="text" class="form-control rincian" name="rincian" id="Rincian kegiatan" placeholder="Rincian kegiatan" hidden>
                                <small>Tekan kembali rincian, jika ada salah</small>
                            </div>
                            <div class="mb-3">
                                <label for="Link pendaftaran" class="form-label">Link pendaftaran</label>
                                <input required type="text" class="form-control" name="link_register" id="Link pendaftaran" placeholder="Link pendaftaran">
                                @error('link_register')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="Link Detail Kegiatan" class="form-label">Link Detail Kegiatan</label>
                                <input required type="text" class="form-control" name="link_detail" id="Link Detail Kegiatan" placeholder="Link pendaftaran">
                                @error('link_detail')
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
        {{-- Close Tambah --}}

        <script>

            let divRincian = document.querySelector(".d-rincian"),
                inputRincian = document.querySelector(".input-rincian"),
                btnAddRincian = document.querySelector(".btn-add-rincian"),
                rincian = document.querySelector(".rincian"),
                arr = []
            
            btnAddRincian.onclick = () =>{
                let button = document.createElement("BUTTON"),
                    span = document.createElement("SPAN")
                button.type = "button"
                button.classList.add("btn", "btn-secondary", "rounded-pill", "p-1", "px-3", "text-light", "mb-3", "btn-rincian", "me-1")
                if(inputRincian.value == ""){
                    console.log("Silahkan isi terlebih dahulu")
                }else{
                    button.innerHTML = inputRincian.value
                    button.appendChild(span)
                    divRincian.appendChild(button)
                    arr.push(inputRincian.value)
                    rincian.value = arr
                    inputRincian.value = ""
                }
                let btnRincian = document.querySelectorAll(".btn-rincian span")
                for(let i = 0; i < btnRincian.length; i++){
                    btnRincian[i].parentElement.onclick = (e) =>{
                        btnRincian[i].parentElement.remove()
                        arr = arr.slice(i+1)
                        rincian.value = arr
                    }
                }
            }

        </script>
    
@endsection