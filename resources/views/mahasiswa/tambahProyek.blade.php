@extends("layouts.mahasiswa")
@section("content")

        {{-- Open Tambah --}}
        <section>
            <div class="container-lg tambah mt-3">
                <p class="fs-3 text-center">TAMBAH PROYEK</p>
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <form action="{{ route("add_project") }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="Nama proyek" class="form-label">Nama proyek</label>
                                <input required type="text" class="form-control" name="tittle" id="Nama proyek" placeholder="Nama proyek">
                                @error('tittle')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="Bidang proyek" class="form-label">Bidang proyek</label>
                                <input required type="text" class="form-control" name="type" id="Bidang proyek" placeholder="Bidang proyek">
                                @error('type')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="Lokasi proyek" class="form-label">Lokasi proyek</label>
                                <input required type="text" class="form-control" name="location" id="Lokasi proyek" placeholder="Lokasi proyek">
                                @error('location')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="Status kegiatan" class="form-label">Status kegiatan</label>
                                <select required name="status" id="" class="form-control">
                                    <option value="Buka">Buka</option>
                                    <option value="Tutup">Tutup</option>
                                </select>
                                @error('status')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="No Telp/ Whatsapp" class="form-label">No Telp/ Whatsapp</label>
                                <input required type="text" class="form-control" name="contact" id="No Telp/ Whatsapp" placeholder="No Telp/ Whatsapp">
                                @error('contact')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
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