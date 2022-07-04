@extends("layouts.navbar")
@section("content")

        {{-- Open Register --}}
        <section>
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <h3 class="text-center">Reset Password</h3>
                        <form action="" method="">
                            <div class="mb-3">
                                <label for="password" class="form-label">Password Baru</label>
                                <div class="position-relative">
                                    <input type="password" class="form-control mata2Input" name="" id="password" placeholder="Password">
                                    <i class="bx bx-show position-absolute top-50 end-0 translate-middle fs-4 mata2"></i>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Konfirmasi Password</label>
                                <div class="position-relative">
                                    <input type="password" class="form-control mata3Input" name="" id="password" placeholder="Konfirmasi password">
                                    <i class="bx bx-show position-absolute top-50 end-0 translate-middle fs-4 mata3"></i>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-dark w-100">Reset Password</button>
                            </div>
                        </form>
                </div>
            </div>
        </section>
        {{-- Close Register --}}

@endsection
