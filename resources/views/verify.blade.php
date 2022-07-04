@extends("layouts.navbar")
@section("content")

    {{-- Open Verify --}}

    <section>
        <div class="container-lg py-5">
            <div>
                <div class="col-md-6 mx-auto text-center position-absolute top-50 start-50 translate-middle">
                    <h3 class="fw-bold">Verifikasi Email</h3>
                    <div>
                        <p class="fw-bold mb-0">
                            Silahkan pencet link verifikasi yang terdapat pada email anda 
                        </p>
                        <p class="mt-0">Jika belum menerima link, silahkan tunggu dalam <span></span></p>
                        <button class="btn btn-dark" type="button">Dapatkan link</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Close Verify --}}
    <script>
        setTimeout(() => {
            
        }, 59000);
    </script>
    
@endsection