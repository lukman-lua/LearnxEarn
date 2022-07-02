@extends("layouts.navbar")
@section("content")

        {{-- Open Register --}}
        <section>
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <img src={{ url("images/login-1.png") }} alt="" class="img-fluid register-img">
                    </div>
                    <div class="col-md-5">
                        <h3 class="text-center">Daftar akun Learn X Earn</h3>
                        <form action="" method="">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" name="" id="email" placeholder="Email">
                                <small class="form-text text-muted">Silahkan masukan email kamu</small>
                            </div>
                            <div class="mb-3">
                                <label for="role" class="form-label">Role</label>
                                <select class="form-select" name="" id="">
                                    <option selected>Pilih role kamu</option>
                                    <option value="0">Mahasiswa</option>
                                    <option value="1">Organisasi</option>
                                </select>
                                <small class="form-text text-muted">Silahkan masukan email kamu</small>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control mata2Input" name="" id="password" placeholder="Password">
                                    <i class="bx bx-show position-absolute top-50 end-0 translate-middle fs-4 mata2"></i>
                                </div>
                                <small class="form-text text-muted">Silahkan masukan password kamu</small>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Konfirmasi Password</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control mata3Input" name="" id="password" placeholder="Konfirmasi password">
                                    <i class="bx bx-show position-absolute top-50 end-0 translate-middle fs-4 mata3"></i>
                                </div>
                                <small class="form-text text-muted">Silahkan konfirmasi password kamu</small>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-dark w-100">Masuk</button>
                            </div>
                        </form>
                        <div class="d-flex mb-3">
                            <div class="col-5">
                                <hr>
                            </div>
                            <div class="col-2">
                                <p class="mb-0 text-center mt-1">Atau</p>
                            </div>
                            <div class="col-5">
                                <hr>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <p>Sudah punya akun? Ayo <button class="btn btn-light p-0" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Masuk sekarang</button></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- Close Register --}}

@endsection