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
                        <p class="mt-0 mb-3">Jika belum menerima link, silahkan tunggu dalam <span id="countdown">60 detik</span></p>
                        <button class="btn btn-dark btnLink" type="button" disabled>Dapatkan link</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Close Verify --}}
    <script>
        let countdown = document.getElementById("countdown"),
            btnLink = document.querySelector(".btnLink"),
            i = 59
        setInterval(() => {
            
            countdown.innerHTML = i + " detik"
            i--
            if ( i <= 0){
                countdown.innerHTML = "0 detik"
                btnLink.removeAttribute("disabled",'')
            }

        }, 1000);
    </script>
    
@endsection