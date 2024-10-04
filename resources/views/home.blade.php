@extends("layouts.landing")

@section("landing-content")

    <!-- START::FACT  -->
    {{-- <section class="container d-flex align-items-center py-100">
      <div class="row">
        <div class="col-10 offset-1 col-lg-6 offset-lg-3">
          <h2 class="h2 text-white text-center mb-48">Pernah merasa sedih, cemas, atau lelah yang <span class="text-gradient-pink">tak kunjung hilang?</span></h2>

          <p class="h4 text-gray text-center">Kamu mungkin tidak sendirian. Jutaan orang di Indonesia mengalami gangguan mental. Yuk, kenali dirimu lebih baik dengan AI Chat yang dirancang khusus untuk mendapatkan nasihat serta saran yang cocok untukmu secara pribadi</p>
        </div>
      </div>
    </section> --}}
    <!-- END::FACT -->


    <!-- START::CTA -->
    {{-- <section class="container py-100" id="cta">
      <div class="row d-flex align-items-center row-gap-5">
        <div data-aos="fade-right" class="col-12 col-lg-6">
          <img src="{{ asset("/assets/images/illus-1.png") }}" alt="illus-1" class="img-fluid">
        </div>
        <div class="col-10 offset-1 offset-lg-1 col-lg-5 g-5 g-lg-0 align-items-center text-center text-lg-start">
          <h1 class="h1 text-white mb-48 text-lg-start text-gradient-pink">
            Teknologi AI kini hadir untuk dukung kesehatan mentalmu
          </h1>
          <p class="text-gray h4 mb-48 text-lg-start">
            AI kami menggunakan algoritma canggih untuk menganalisis perasaan dan pikiranmu, memberikan hasil yang baik dan rekomendasi yang tepat.
          </p>
          <a class="tertiary-button text-lg-start" href="/dashboard">
            COBA SEKARANG
            <img src="{{ asset("/assets/images/icons/zap.svg") }}" alt="zap">
          </a>
        </div>
      </div>
    </section> --}}
    <!-- END::CTA -->


    <!-- START::FAQ -->
    {{-- <section class="container py-100" id="faq">
      <div class="row d-flex align-items-center row-gap-5">
        <div class="col-12 col-md-5">
          <h1 class="h2 mb-48 text-center">
            <span class="text-gradient-pink-2">Frequently Asked<br>Questions</span> 🧐
          </h1>
          <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item mb-24">
              <h2 class="accordion-header h4">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  Kenapa ambaruwo jadi brand ambassador
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quos minus illum iusto aut debitis consequuntur voluptatem, repellat vero provident quisquam hic optio, iste tenetur enim magni alias, inventore illo!
                </div>
              </div>
            </div>
            <div class="accordion-item mb-24">
              <h2 class="accordion-header h4">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo"
                >
                  1000 Alasan pilih prabowo
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quos minus illum iusto aut debitis consequuntur voluptatem, repellat vero provident quisquam hic optio, iste tenetur enim magni alias, inventore illo!</div>
              </div>
            </div>
            <div class="accordion-item mb-24">
              <h2 class="accordion-header h4">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree"
                >
                  Seberapa fast respon sih AI kami?
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quos minus illum iusto aut debitis consequuntur voluptatem, repellat vero provident quisquam hic optio, iste tenetur enim magni alias, inventore illo!</div>
              </div>
            </div>
            <div class="accordion-item mb-24">
              <h2 class="accordion-header h4">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour"
                >
                  Kenapa ambaruwo jadi brand ambassador
                </button>
              </h2>
              <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quos minus illum iusto aut debitis consequuntur voluptatem, repellat vero provident quisquam hic optio, iste tenetur enim magni alias, inventore illo!</div>
              </div>
            </div>
            <div class="accordion-item mb-24">
              <h2 class="accordion-header h4">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive"
                >
                  Kenapa ambaruwo jadi brand ambassador
                </button>
              </h2>
              <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quos minus illum iusto aut debitis consequuntur voluptatem, repellat vero provident quisquam hic optio, iste tenetur enim magni alias, inventore illo!</div>
              </div>
            </div>
          </div>
        </div>
        <div class="d-none d-md-block col-6 offset-1">
          <img src="{{ asset("/assets/images/faq.png") }}" alt="faq" class="img-fluid img-border">
        </div>
      </div>
    </section> --}}
    <!-- END::FAQ -->


    <!-- START::TESTIMONIAL -->
    <section class="container-fluid py-100" id="testimonial">
      <div class="text-center text-white h2">
        Apa Kata Mereka Tentang<br><span class="text-gradient-pink">epancasila</span> 🥳
      </div>

      <!-- TESTI DEKSTOP VERSION -->
        <div class="slider d-none d-lg-block">

            <div class="item ">
              <div class="h4 mb-24">
                “Terima kasih, Edukasi ini sangat membantu saya dalam memahami pancasila"
              </div>
              <div class="wrap d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                  <div class="wrap">
                    <img src="{{ asset("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTiLhUArRlNqeCuh0F5Bd-APA4b8fwVzUwEHQ&s") }}" alt="pp-4" class="photo-profile mr-16">
                  </div>
                  <div class="wrap">
                    <h4 class="h4">Joko Widodo</h4>
                    <h5 class="h5">Indonesia President</h5>
                  </div>
                </div>
                <h4 class="h4">⭐️⭐️⭐️⭐️</h4>
              </div>
            </div>

            <div class="item ">
              <div class="h4 mb-24">
                “Terima kasih sarannya, AI ini sangat mengerti keluhan saya dan perasaan saya”
              </div>
              <div class="wrap d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                  <div class="wrap">
                    <img src="{{ asset("/assets/images/faq.png") }}" alt="pp-4" class="photo-profile mr-16">
                  </div>
                  <div class="wrap">
                    <h4 class="h4">Agus Wijayanto</h4>
                    <h5 class="h5">Mahasiswa</h5>
                  </div>
                </div>
                <h4 class="h4">⭐️⭐️⭐️⭐️</h4>
              </div>
            </div>


            <button id="next">></button>
            <button id="prev"><</button>
        </div>

      <!-- TESTI MOBILE VERSION -->
      <div class="carousel-left d-lg-none">

        <div class="carousel-wrapper-left">
          <div class="card-testimonial mr-24">
            <div class="mb-24 h4">
              “Terima kasih sarannya, AI ini sangat mengerti keluhan saya dan perasaan saya”
            </div>
            <div class="wrap d-flex justify-content-between align-items-center">
              <div class="d-flex align-items-center">
                <div class="wrap">
                  <img src="{{ asset("/assets/images/faq.png") }}" alt="pp-4" class="photo-profile mr-16">
                </div>
                <div class="wrap">
                  <h3 class="h3">Agus Wijayanto</h3>
                  <h4 class="h4">Mahasiswa</h4>
                </div>
              </div>
              <h3 class="h3">⭐️⭐️⭐️⭐️</h3>
            </div>
          </div>
          <div class="card-testimonial mr-24">
            <div class="mb-24 h4">
              “Terima kasih sarannya, AI ini sangat mengerti keluhan saya dan perasaan saya”
            </div>
            <div class="wrap d-flex justify-content-between align-items-center">
              <div class="d-flex align-items-center">
                <div class="wrap">
                  <img src="{{ asset("/assets/images/faq.png") }}" alt="pp-4" class="photo-profile mr-16">
                </div>
                <div class="wrap">
                  <h3 class="h3">Agus Wijayanto</h3>
                  <h4 class="h4">Mahasiswa</h4>
                </div>
              </div>
              <h3 class="h3">⭐️⭐️⭐️⭐️</h3>
            </div>
          </div>
          <div class="card-testimonial mr-24">
            <div class="mb-24 h4">
              “Terima kasih sarannya, AI ini sangat mengerti keluhan saya dan perasaan saya”
            </div>
            <div class="wrap d-flex justify-content-between align-items-center">
              <div class="d-flex align-items-center">
                <div class="wrap">
                  <img src="{{ asset("/assets/images/faq.png") }}" alt="pp-4" class="photo-profile mr-16">
                </div>
                <div class="wrap">
                  <h3 class="h3">Agus Wijayanto</h3>
                  <h4 class="h4">Mahasiswa</h4>
                </div>
              </div>
              <h3 class="h3">⭐️⭐️⭐️⭐️</h3>
            </div>
          </div>
          <div class="card-testimonial mr-24">
            <div class="mb-24 h4">
              “Terima kasih sarannya, AI ini sangat mengerti keluhan saya dan perasaan saya”
            </div>
            <div class="wrap d-flex justify-content-between align-items-center">
              <div class="d-flex align-items-center">
                <div class="wrap">
                  <img src="{{ asset("/assets/images/faq.png") }}" alt="pp-4" class="photo-profile mr-16">
                </div>
                <div class="wrap">
                  <h3 class="h4">Agus Wijayanto</h3>
                  <h4 class="h5">Mahasiswa</h4>
                </div>
              </div>
              <h3 class="h3">⭐️⭐️⭐️⭐️</h3>
            </div>
          </div>
        </div>

        <div class="carousel-wrapper-left">
          <div class="card-testimonial mr-24">
            <div class="mb-24 h4">
              “Terima kasih sarannya, AI ini sangat mengerti keluhan saya dan perasaan saya”
            </div>
            <div class="wrap d-flex justify-content-between align-items-center">
              <div class="d-flex align-items-center">
                <div class="wrap">
                  <img src="{{ asset("/assets/images/faq.png") }}" alt="pp-4" class="photo-profile mr-16">
                </div>
                <div class="wrap">
                  <h3 class="h3">Agus Wijayanto</h3>
                  <h4 class="h4">Mahasiswa</h4>
                </div>
              </div>
              <h3 class="h3">⭐️⭐️⭐️⭐️</h3>
            </div>
          </div>
          <div class="card-testimonial mr-24">
            <div class="mb-24 h4">
              “Terima kasih sarannya, AI ini sangat mengerti keluhan saya dan perasaan saya”
            </div>
            <div class="wrap d-flex justify-content-between align-items-center">
              <div class="d-flex align-items-center">
                <div class="wrap">
                  <img src="{{ asset("/assets/images/faq.png") }}" alt="pp-4" class="photo-profile mr-16">
                </div>
                <div class="wrap">
                  <h3 class="h3">Agus Wijayanto</h3>
                  <h4 class="h4">Mahasiswa</h4>
                </div>
              </div>
              <h3 class="h3">⭐️⭐️⭐️⭐️</h3>
            </div>
          </div>
          <div class="card-testimonial mr-24">
            <div class="mb-24 h4">
              “Terima kasih sarannya, AI ini sangat mengerti keluhan saya dan perasaan saya”
            </div>
            <div class="wrap d-flex justify-content-between align-items-center">
              <div class="d-flex align-items-center">
                <div class="wrap">
                  <img src="{{ asset("/assets/images/faq.png") }}" alt="pp-4" class="photo-profile mr-16">
                </div>
                <div class="wrap">
                  <h3 class="h3">Agus Wijayanto</h3>
                  <h4 class="h4">Mahasiswa</h4>
                </div>
              </div>
              <h3 class="h3">⭐️⭐️⭐️⭐️</h3>
            </div>
          </div>
          <div class="card-testimonial mr-24">
            <div class="mb-24 h4">
              “Terima kasih sarannya, AI ini sangat mengerti keluhan saya dan perasaan saya”
            </div>
            <div class="wrap d-flex justify-content-between align-items-center">
              <div class="d-flex align-items-center">
                <div class="wrap">
                  <img src="{{ asset("/assets/images/faq.png") }}" alt="pp-4" class="photo-profile mr-16">
                </div>
                <div class="wrap">
                  <h3 class="h4">Agus Wijayanto</h3>
                  <h4 class="h5">Mahasiswa</h4>
                </div>
              </div>
              <h3 class="h3">⭐️⭐️⭐️⭐️</h3>
            </div>
          </div>
        </div>

        <div class="carousel-wrapper-left">
          <div class="card-testimonial mr-24">
            <div class="mb-24 h4">
              “Terima kasih sarannya, AI ini sangat mengerti keluhan saya dan perasaan saya”
            </div>
            <div class="wrap d-flex justify-content-between align-items-center">
              <div class="d-flex align-items-center">
                <div class="wrap">
                  <img src="{{ asset("/assets/images/faq.png") }}" alt="pp-4" class="photo-profile mr-16">
                </div>
                <div class="wrap">
                  <h3 class="h3">Agus Wijayanto</h3>
                  <h4 class="h4">Mahasiswa</h4>
                </div>
              </div>
              <h3 class="h3">⭐️⭐️⭐️⭐️</h3>
            </div>
          </div>
          <div class="card-testimonial mr-24">
            <div class="mb-24 h4">
              “Terima kasih sarannya, AI ini sangat mengerti keluhan saya dan perasaan saya”
            </div>
            <div class="wrap d-flex justify-content-between align-items-center">
              <div class="d-flex align-items-center">
                <div class="wrap">
                  <img src="{{ asset("/assets/images/faq.png") }}" alt="pp-4" class="photo-profile mr-16">
                </div>
                <div class="wrap">
                  <h3 class="h3">Agus Wijayanto</h3>
                  <h4 class="h4">Mahasiswa</h4>
                </div>
              </div>
              <h3 class="h3">⭐️⭐️⭐️⭐️</h3>
            </div>
          </div>
          <div class="card-testimonial mr-24">
            <div class="mb-24 h4">
              “Terima kasih sarannya, AI ini sangat mengerti keluhan saya dan perasaan saya”
            </div>
            <div class="wrap d-flex justify-content-between align-items-center">
              <div class="d-flex align-items-center">
                <div class="wrap">
                  <img src="{{ asset("/assets/images/faq.png") }}" alt="pp-4" class="photo-profile mr-16">
                </div>
                <div class="wrap">
                  <h3 class="h3">Agus Wijayanto</h3>
                  <h4 class="h4">Mahasiswa</h4>
                </div>
              </div>
              <h3 class="h3">⭐️⭐️⭐️⭐️</h3>
            </div>
          </div>
          <div class="card-testimonial mr-24">
            <div class="mb-24 h4">
              “Terima kasih sarannya, AI ini sangat mengerti keluhan saya dan perasaan saya”
            </div>
            <div class="wrap d-flex justify-content-between align-items-center">
              <div class="d-flex align-items-center">
                <div class="wrap">
                  <img src="{{ asset("/assets/images/faq.png") }}" alt="pp-4" class="photo-profile mr-16">
                </div>
                <div class="wrap">
                  <h3 class="h4">Agus Wijayanto</h3>
                  <h4 class="h5">Mahasiswa</h4>
                </div>
              </div>
              <h3 class="h3">⭐️⭐️⭐️⭐️</h3>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- END::TESTIMONIAL -->


    <!-- START::ARTICLE -->
    {{-- <section class="container py-100" id="article">
      <div class="text-center text-white h2 mb-24">
        Artikel <span class="text-gradient-pink">Kesehatan</span> Kami
      </div>
        @php
            $articles = json_decode($dataJson, true);
        @endphp
        <div class="row row-gap-4">
        @forelse ($articles as $article)
          <div class="col-6 col-md-4 col-lg-3 card-article">
            <div class="p-1">
              <div class="card-image-article mb-16 position-relative">
                <span class="badge h6 text-primary bg-white position-absolute mt-3" style="top: 12px; right: 12px;">{{ $article['created_at'] }}</span>
                <div class="img-article img-fluid" style="background-image: url('{{ asset('/storage/'.$article["thumbnail"]) }}'); background-size: cover; background-position:center; background-repeat: no-repeat;"></div>
              </div>
              <div class="card-content-article">
                <!-- <div class="h6 text-gray">
                  Admin123
                </div>        -->
                <div class="h4 text-white title-article">
                  {{ $article['title'] }}
                </div>
              </div>
              <div class="card-cta-article">
                <a href="/article/{{ $article['slug'] }}" class="article-button">Baca Selengkapnya</a>
              </div>
            </div>
          </div>
        @empty
        <div class="col-12 text-center">
            <h3 class="h3 text-white my-5">Tidak Ada Artikel</h3>
        </div>
        @endforelse
        </div>
    </section> --}}
    <!-- END::ARTICLE -->

    @push("push_js_after")
    {{-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            var dataJson = @json($dataJson);

            var articles = JSON.parse(dataJson);

            console.log(Array.isArray(articles));
            console.log(articles);

        });
    </script> --}}
    @endpush

@endsection
