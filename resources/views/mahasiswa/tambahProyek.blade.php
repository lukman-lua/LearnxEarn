@extends("layouts.mahasiswa")
@section("content")

        {{-- Open Tambah --}}
        <section>
            <div class="container-lg tambah mt-3">
                <p class="fs-3 text-center">TAMBAH PROYEK</p>
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <form action="" method="">
                            @csrf
                            <div class="mb-3">
                                <label for="Nama proyek" class="form-label">Nama proyek</label>
                                <input type="text" class="form-control" name="" id="Nama proyek" placeholder="Nama proyek">
                            </div>
                            <div class="mb-3">
                                <label for="Bidang proyek" class="form-label">Bidang proyek</label>
                                <input type="text" class="form-control" name="" id="Bidang proyek" placeholder="Bidang proyek">
                            </div>
                            <div class="mb-3">
                                <label for="Lokasi proyek" class="form-label">Lokasi proyek</label>
                                <input type="text" class="form-control" name="" id="Lokasi proyek" placeholder="Lokasi proyek">
                            </div>
                            <div class="mb-3">
                                <label for="Status kegiatan" class="form-label">Status kegiatan</label>
                                <select name="" id="" class="form-control">
                                    <option selected>Status kegiatan</option>
                                    <option value="Buka">Buka</option>
                                    <option value="Tutup">Tutup</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="No Telp/ Whatsapp" class="form-label">No Telp/ Whatsapp</label>
                                <input type="text" class="form-control" name="" id="No Telp/ Whatsapp" placeholder="No Telp/ Whatsapp">
                            </div>
                            <div class="mb-3">
                                <label for="Deksripsi kegiatan" class="form-label">Deksripsi kegiatan</label>
                                <textarea type="text" class="form-control" name="" id="Deksripsi kegiatan" placeholder="Deksripsi kegiatan"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="Rincian kegiatan" class="form-label">Rincian kegiatan</label>
                                <input type="text" class="form-control mb-2" name="" id="Rincian kegiatan" placeholder="Rincian kegiatan">
                                <input type="text" class="form-control mb-2" name="" id="Rincian kegiatan" placeholder="Rincian kegiatan">
                                <input type="text" class="form-control mb-2" name="" id="Rincian kegiatan" placeholder="Rincian kegiatan">
                                <input type="text" class="form-control mb-2" name="" id="Rincian kegiatan" placeholder="Rincian kegiatan">
                                <input type="text" class="form-control mb-2" name="" id="Rincian kegiatan" placeholder="Rincian kegiatan">
                                <input type="text" class="form-control" name="" id="Rincian kegiatan" placeholder="Rincian kegiatan">
                            </div>
                            <div class="mb-3">
                                <label for="Link Detail Kegiatan" class="form-label">Link Detail Kegiatan</label>
                                <input type="text" class="form-control" name="" id="Link Detail Kegiatan" placeholder="Link pendaftaran">
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
    
@endsection