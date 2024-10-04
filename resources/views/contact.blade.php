@extends("layouts.landing")

@section("landing-content")
    <!-- START::CONTACT -->
    <section class="d-flex">

        <div class="w-50 d-none d-md-block d-flex justify-content-center align-items-center">
            <form action="#" class="w-75 d-grid text-start row-gap-4 m-5">
              <h2 class="h2 text-white"><span class="text-gradient-pink-2">Hubungi</span>
                Kami
              </h2>

              <p class="h6 text-gray">
                Kami di TemanCurhat selalu siap mendengarkan dan membantu kamu. Jika ada pertanyaan, saran, atau butuh informasi lebih lanjut, jangan ragu untuk menghubungi kami.
              </p>

              <div class="d-flex flex-column row-gap-2">
                <label for="name" class="label">Nama</label>
                <input type="text" id="name" class="input-contact" placeholder="Masukkan nama lengkap">
              </div>

              <div class="d-flex flex-column row-gap-2">
                <label for="email" class="label">Email</label>
                <input type="email" id="email" class="input-contact" placeholder="Masukkan email">
              </div>

              <div class="d-flex flex-column row-gap-2">
                <label for="number" class="label">Nomor Telepon</label>
                <input type="text" id="number" class="input-contact" placeholder="Masukkan nomor telepon">
              </div>

              <button class="tertiary-button border-0">Hubungi Sekarang</button>
            </form>
        </div>

        <div class="w-50 d-none d-md-block" style="height: 100vh; background-size: cover; background-image: url('{{ asset("/assets/images/about-hero.png") }}'); background-position: center;">
        </div>
    </section>
    <!-- END::CONTACT -->
@endsection
