@extends("layouts.organisasi")
@section("content")

        {{-- Open Tambah --}}
        <section>
            <div class="container-lg tambah mt-3">
                <p class="fs-3 text-center">EDIT KEGIATAN</p>
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <form action="" method="">
                            @csrf
                            <div class="mb-3">
                                <label for="Nama kegiatan" class="form-label">Nama kegiatan</label>
                                <input type="text" class="form-control" name="" id="Nama kegiatan" placeholder="Nama kegiatan">
                            </div>
                            <div class="mb-3">
                                <label for="Jenis kegiatan" class="form-label">Jenis kegiatan</label>
                                <select name="" id="" class="form-control">
                                    <option selected>Jenis kegiatan</option>
                                    <option value="Magang">Magang</option>
                                    <option value="Proyek">Proyek</option>
                                    <option value="Beasiswa">Beasiswa</option>
                                    <option value="Volunteer">Volunteer</option>
                                    <option value="Kerja Paruh Waktu">Kerja Paruh Waktu</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="Lokasi kegiatan" class="form-label">Lokasi kegiatan</label>
                                <input type="text" class="form-control" name="" id="Lokasi kegiatan" placeholder="Lokasi kegiatan">
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
                                <label for="Link pendaftaran" class="form-label">Link pendaftaran</label>
                                <input type="text" class="form-control" name="" id="Link pendaftaran" placeholder="Link pendaftaran">
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