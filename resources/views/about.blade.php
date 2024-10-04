@extends("layouts.landing")

@section("landing-content")
    <!-- START::HERO -->
    <section class="container-fluid py-100 d-flex justify-content-center position-relative" style="background-image: url('{{ asset("/assets/images/about-hero.png") }}'); background-size: cover; background-position: center;">
        <div class="overlay position-absolute w-100 h-100" style="background: rgba(0, 0, 0, 0.5); top: 0; left: 0;"></div>
        <div class="wrap text-center position-relative" style="max-width: 700px;">
            <h1 class="h1 text-white text-center">
                TemanCerita: <span class="text-gradient-blue">Sahabat Setia</span><br/>
                Saat Kamu <span class="text-gradient-pink">Butuh</span>
            </h1>
        </div>
    </section>
    <!-- END::HERO -->


    <div class="container-fluid bg-primary">


    <section class="container d-flex py-100">
      <div class="row d-flex align-items-center row-gap-5 row-gap-lg-0">
        <div class="col-12 order-lg-first order-last col-lg-5">
          <h2 class="h2 text-white mb-24">Apa Itu <span class="text-gradient-pink">TemanCurhat</span> </h2>
          <p class="h4 text-gray mb-48">TemanCurhat adalah sebuah platform yang dirancang untuk membantu kamu melewati masa-masa sulit dengan <span class="text-gradient-pink-2"><strong>dukungan emosional</strong></span> yang kamu butuhkan. Kami percaya bahwa setiap orang berhak mendapatkan pendengar yang <span class="text-gradient-pink-2"><strong>empatik</strong></span>, khususnya dalam situasi yang penuh tekanan dan kesulitan mental.</p>
          <a href="/dashboard.html" class="green-button h5">
              MULAI SEKARANG <img src="{{ asset("/assets/images/icons/zap.svg") }}" alt="zap">
          </a>
        </div>
        <div class="col-12 col-lg-6 order-first order-lg-last offset-lg-1">
          <img src="{{ asset("/assets/images/yoga-login.png") }}" alt="robo" class="img-fluid img-border">
        </div>
      </div>
    </section>


    <section class="container d-flex py-100">
      <div class="row d-flex align-items-center row-gap-5 row-gap-lg-0">
        <div class="col-12 col-lg-6 order-first order-lg-first">
          <img src="{{ asset("/assets/images/about-hero.png") }}" alt="why" class="img-fluid img-border">
        </div>
        <div class="col-12 order-lg-last order-last offset-lg-1 col-lg-5">
          <h2 class="h2 text-white mb-24"><span class="text-gradient-pink">Mengapa</span> TemanCurhat Hadir</h2>
          <p class="h4 text-gray">Gangguan kesehatan mental rentan pada remaja. Data Kementerian Kesehatan menunjukkan <span class="text-gradient-pink-2"><strong>6,1%</strong></span> penduduk Indonesia berusia 15 tahun ke atas mengalami gangguan <span class="text-gradient-pink-2"><strong>kesehatan mental,</strong></span> tetapi hanya sedikit yang mencari bantuan profesional. Kami hadir untuk mengisi kekosongan ini dengan menyediakan platform yang mudah diakses dan nyaman digunakan.</p>
        </div>
      </div>
    </section>


    <!-- <section class="container d-flex py-100">
      <div class="row d-flex align-items-center row-gap-5 row-gap-lg-0">
        <div class="col-12 order-lg-first order-last col-lg-5">
          <h2 class="h2 text-white mb-24"><span class="text-gradient-pink">Misi</span> TemanCurhat</h2>
          <p class="h4 text-gray">TemanCurhat adalah sebuah platform yang dirancang untuk membantu kamu melewati masa-masa sulit dengan <span class="text-gradient-pink-2"><strong>dukungan emosional</strong></span> yang kamu butuhkan. Kami percaya bahwa setiap orang berhak mendapatkan pendengar yang <span class="text-gradient-pink-2"><strong>empatik</strong></span>, khususnya dalam situasi yang penuh tekanan dan kesulitan mental.</p>
        </div>
        <div class="col-12 col-lg-6 order-first order-lg-last offset-lg-1">
          <img src="/assets/images/robo.png" alt="robo" class="img-fluid">
        </div>
      </div>
    </section>     -->


    <!-- START::WORK -->
    <section class="container d-flex flex-column justify-content-center py-100">
      <div class="row mb-24">
        <div class="col-12 d-flex flex-column align-items-center justify-content-center">
          <div class="wrap" style="max-width: 500px;">
            <h2 class="h2 text-white text-center mb-24">Jangan Diam-Diam Aja, <span class="text-gradient-pink">Curhat</span> Yuk! <span class="text-gradient-pink-2">Sat-Set</span> Mudah Banget!</h2>
            <p class="h4 text-gray text-center mb-24">Gausah ragu atau malu, TemanCurhat siap jadi teman terbaikmu saat butuh!</p>
          </div>
        </div>
      </div>
      <div class="row" style="row-gap: 48px;">
        <div class="col-12 col-md-4 text-center">
          <img src="{{ asset("/assets/images/steps/mulai-chat.svg") }}" alt="step-1" class="img-fluid mb-24">
          <h3 class="h3 text-white">1. Mulai Chat</h3>
        </div>
        <div class="col-12 col-md-4 text-center">
          <img src="{{ asset("/assets/images/steps/response.svg") }}" alt="step-2" class="img-fluid mb-24">
          <h3 class="h3 text-white">2. Dengar Respon</h3>
        </div>
        <div class="col-12 col-md-4 text-center">
          <img src="{{ asset("/assets/images/steps/result.svg") }}" alt="step-3" class="img-fluid mb-24">
          <h3 class="h3 text-white">3. Dapatkan Saran</h3>
        </div>
      </div>
    </section>
     <!--END::WORK  -->


    <!-- START::FEATURES -->
    <section id="features" class="container d-flex flex-column justify-content-center py-100">
      <h2 class="h2 text-white text-center mb-24">Kenapa Memilih <span class="text-gradient-pink">TemanCurhat</span></h2>
      <div class="d-flex justify-content-center text-center">
        <div id="cards">
          <div class="card">
            <div class="card-content">
              <div class="card-image">
                <img src="{{ asset("/assets/images/icons/feature-4.svg") }}" alt="feature-4">
              </div>
              <div class="card-info-wrapper">
                <div class="card-info">
                  <div class="card-info-title">
                    <h3 class="h3 text-white">Anonim & Aman</h3>
                    <p class="h6 text-gray text-center">Tenang aja! dentitasmu terlindungi, ceritamu aman.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-content">
              <div class="card-image">
                <img src="{{ asset("/assets/images/icons/feature-5.svg") }}" alt="feature-5">
              </div>
              <div class="card-info-wrapper">
                <div class="card-info">
                  <div class="card-info-title">
                    <h3 class="h3 text-white">Respon Empatik & Positif</h3>
                    <p class="h6 text-gray text-center">Feedback mendukung dan mengerti perasaan.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-content">
              <div class="card-image">
                <img src="{{ asset("/assets/images/icons/feature-3.svg") }}" alt="feature-3">
              </div>
              <div class="card-info-wrapper">
                <div class="card-info">
                  <div class="card-info-title">
                    <h3 class="h3 text-white">Solusi Permasalahan</h3>
                    <p class="h6 text-gray text-center">Dapatkan saran dari AI kami ketika anda curhat.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-content">
              <div class="card-image">
                <img src="{{ asset("/assets/images/icons/feature-1.svg") }}" alt="feature-1">
              </div>
              <div class="card-info-wrapper">
                <div class="card-info">
                  <div class="card-info-title">
                    <h3 class="h3 text-white">Pendengar Setia</h3>
                    <p class="h6 text-gray text-center">Selalu siap dengarkan curhatanmu kapan aja.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-content">
              <div class="card-image">
                <img src="{{ asset("/assets/images/icons/feature-2.svg") }}" alt="feature-2">
              </div>
              <div class="card-info-wrapper">
                <div class="card-info">
                  <div class="card-info-title">
                    <h3 class="h3 text-white">Mudah Diakses</h3>
                    <p class="h6 text-gray text-center">Bisa diakses kapan dan di mana saja melalui website.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-content">
              <div class="card-image">
                <img src="{{ asset("/assets/images/icons/feature-6.svg") }}" alt="feature-6">
              </div>
              <div class="card-info-wrapper">
                <div class="card-info">
                  <div class="card-info-title">
                    <h3 class="h3 text-white">Mudah Diakses</h3>
                    <p class="h6 text-gray text-center">Bisa diakses kapan dan di mana saja melalui website.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END::FEATURES -->


    <!-- START::TESTIMONIALS -->
    <section id="testimonial" class="container-fluid py-100">
      <div class="text-center text-white h2">
        Apa Kata Mereka Tentang<br>Teknologi <span class="text-gradient-pink">AI Kami</span> 🥳
      </div>

      <!-- TESTI DEKSTOP VERSION -->
        <div class="slider d-none d-lg-block">
            <div class="item ">
              <p>
                “Terima kasih sarannya, AI ini sangat mengerti keluhan saya dan perasaan saya”
              </p>
              <div class="wrap d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                  <img src="{{ asset("/assets/images/faq.png") }}" alt="pp-4" class="photo-profile mr-16">
                  <div class="wrap">
                    <h3 class="h3">Agus Wijayanto</h3>
                    <h4 class="h4">Mahasiswa</h4>
                  </div>
                </div>
                <h3 class="h3">⭐️⭐️⭐️⭐️</h3>
              </div>
            </div>
            <div class="item ">
              <p>
                “Sangat lega rasanya sudah curhat banyak masalah kehidupan ke AI  ini, recommend banget!”
              </p>
              <div class="wrap d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                  <img src="{{ asset("/assets/images/faq.png") }}" alt="pp-4" class="photo-profile mr-16">
                  <div class="wrap">
                    <h3 class="h3">Frederick Octo</h3>
                    <h4 class="h4">Mahasiswa</h4>
                  </div>
                </div>
                <h3 class="h3">⭐️⭐️⭐️⭐️⭐️</h3>
              </div>
            </div>
            <div class="item ">
              <p>
                “Ini sangat membantu saya dalam mencari nasehat kesehatan mental saya”
              </p>
              <div class="wrap d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                  <img src="{{ asset("/assets/images/faq.png") }}" alt="pp-4" class="photo-profile mr-16">
                  <div class="wrap">
                    <h3 class="h3">Kevin Pierre</h3>
                    <h4 class="h4">Mahasiswa</h4>
                  </div>
                </div>
                <h3 class="h3">⭐️⭐️⭐️⭐️⭐️</h3>
              </div>
            </div>
            <div class="item ">
              <p>
                “Keren banget, dia bisa paham apa yang aku rasakan, aku hanyalah haty mungyl hello kitty”
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                  <img src="{{ asset("/assets/images/faq.png") }}" alt="pp-4" class="photo-profile mr-16">
                  <div class="wrap">
                    <h3 class="h3">Terrano</h3>
                    <h4 class="h4">Mahasiswa</h4>
                  </div>
                </div>
                <h3 class="h3">⭐️⭐️⭐️⭐️</h3>
              </div>
            </div>
            <button id="next">></button>
            <button id="prev"><</button>
        </div>

      <!-- TESTI MOBILE VERSION -->
      <div class="carousel-left d-lg-none my-5">

        <div class="carousel-wrapper-left">
          <div class="card-testimonial mr-24">
            <p>
              “Terima kasih sarannya, AI ini sangat mengerti keluhan saya dan perasaan saya”
            </p>
            <div class="wrap d-flex justify-content-between align-items-center">
              <div class="d-flex align-items-center">
                <img src="{{ asset("/assets/images/faq.png") }}" alt="pp-4" class="photo-profile mr-16">
                <div class="wrap">
                  <h3 class="h3">Agus Wijayanto</h3>
                  <h4 class="h4">Mahasiswa</h4>
                </div>
              </div>
              <h3 class="h3">⭐️⭐️⭐️⭐️</h3>
            </div>
          </div>
          <div class="card-testimonial mr-24">
            <p>
              “Sangat lega rasanya sudah curhat banyak masalah kehidupan ke AI  ini, recommend banget!”
            </p>
            <div class="wrap d-flex justify-content-between align-items-center">
              <div class="d-flex align-items-center">
                <img src="{{ asset("/assets/images/faq.png") }}" alt="pp-4" class="photo-profile mr-16">
                <div class="wrap">
                  <h3 class="h3">Frederick Octo</h3>
                  <h4 class="h4">Mahasiswa</h4>
                </div>
              </div>
              <h3 class="h3">⭐️⭐️⭐️⭐️⭐️</h3>
            </div>
          </div>
          <div class="card-testimonial mr-24">
            <p>
              “Ini sangat membantu saya dalam mencari nasehat kesehatan mental saya”
            </p>
            <div class="wrap d-flex justify-content-between align-items-center">
              <div class="d-flex align-items-center">
                <img src="{{ asset("/assets/images/faq.png") }}" alt="pp-4" class="photo-profile mr-16">
                <div class="wrap">
                  <h3 class="h3">Kevin Pierre</h3>
                  <h4 class="h4">Mahasiswa</h4>
                </div>
              </div>
              <h3 class="h3">⭐️⭐️⭐️⭐️⭐️</h3>
            </div>
          </div>
          <div class="card-testimonial mr-24">
            <p>
              “Keren banget, dia bisa paham apa yang aku rasakan, aku hanyalah haty mungyl hello kitty”
            </p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="d-flex align-items-center">
                <img src="{{ asset("/assets/images/faq.png") }}" alt="pp-4" class="photo-profile mr-16">
                <div class="wrap">
                  <h3 class="h3">Terrano</h3>
                  <h4 class="h4">Mahasiswa</h4>
                </div>
              </div>
              <h3 class="h3">⭐️⭐️⭐️⭐️</h3>
            </div>
          </div>
        </div>

        <div class="carousel-wrapper-left">
          <div class="card-testimonial mr-24">
            <p>
              “Terima kasih sarannya, AI ini sangat mengerti keluhan saya dan perasaan saya”
            </p>
            <div class="wrap d-flex justify-content-between align-items-center">
              <div class="d-flex align-items-center">
                <img src="{{ asset("/assets/images/faq.png") }}" alt="pp-4" class="photo-profile mr-16">
                <div class="wrap">
                  <h3 class="h3">Agus Wijayanto</h3>
                  <h4 class="h4">Mahasiswa</h4>
                </div>
              </div>
              <h3 class="h3">⭐️⭐️⭐️⭐️</h3>
            </div>
          </div>
          <div class="card-testimonial mr-24">
            <p>
              “Sangat lega rasanya sudah curhat banyak masalah kehidupan ke AI  ini, recommend banget!”
            </p>
            <div class="wrap d-flex justify-content-between align-items-center">
              <div class="d-flex align-items-center">
                <img src="{{ asset("/assets/images/faq.png") }}" alt="pp-4" class="photo-profile mr-16">
                <div class="wrap">
                  <h3 class="h3">Frederick Octo</h3>
                  <h4 class="h4">Mahasiswa</h4>
                </div>
              </div>
              <h3 class="h3">⭐️⭐️⭐️⭐️⭐️</h3>
            </div>
          </div>
          <div class="card-testimonial mr-24">
            <p>
              “Ini sangat membantu saya dalam mencari nasehat kesehatan mental saya”
            </p>
            <div class="wrap d-flex justify-content-between align-items-center">
              <div class="d-flex align-items-center">
                <img src="{{ asset("/assets/images/faq.png") }}" alt="pp-4" class="photo-profile mr-16">
                <div class="wrap">
                  <h3 class="h3">Kevin Pierre</h3>
                  <h4 class="h4">Mahasiswa</h4>
                </div>
              </div>
              <h3 class="h3">⭐️⭐️⭐️⭐️⭐️</h3>
            </div>
          </div>
          <div class="card-testimonial mr-24">
            <p>
              “Keren banget, dia bisa paham apa yang aku rasakan, aku hanyalah haty mungyl hello kitty”
            </p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="d-flex align-items-center">
                <img src="{{ asset("/assets/images/faq.png") }}" alt="pp-4" class="photo-profile mr-16">
                <div class="wrap">
                  <h3 class="h3">Terrano</h3>
                  <h4 class="h4">Mahasiswa</h4>
                </div>
              </div>
              <h3 class="h3">⭐️⭐️⭐️⭐️</h3>
            </div>
          </div>
        </div>

        <div class="carousel-wrapper-left">
          <div class="card-testimonial mr-24">
            <p>
              “Terima kasih sarannya, AI ini sangat mengerti keluhan saya dan perasaan saya”
            </p>
            <div class="wrap d-flex justify-content-between align-items-center">
              <div class="d-flex align-items-center">
                <img src="{{ asset("/assets/images/faq.png") }}" alt="pp-4" class="photo-profile mr-16">
                <div class="wrap">
                  <h3 class="h3">Agus Wijayanto</h3>
                  <h4 class="h4">Mahasiswa</h4>
                </div>
              </div>
              <h3 class="h3">⭐️⭐️⭐️⭐️</h3>
            </div>
          </div>
          <div class="card-testimonial mr-24">
            <p>
              “Sangat lega rasanya sudah curhat banyak masalah kehidupan ke AI  ini, recommend banget!”
            </p>
            <div class="wrap d-flex justify-content-between align-items-center">
              <div class="d-flex align-items-center">
                <img src="{{ asset("/assets/images/faq.png") }}" alt="pp-4" class="photo-profile mr-16">
                <div class="wrap">
                  <h3 class="h3">Frederick Octo</h3>
                  <h4 class="h4">Mahasiswa</h4>
                </div>
              </div>
              <h3 class="h3">⭐️⭐️⭐️⭐️⭐️</h3>
            </div>
          </div>
          <div class="card-testimonial mr-24">
            <p>
              “Ini sangat membantu saya dalam mencari nasehat kesehatan mental saya”
            </p>
            <div class="wrap d-flex justify-content-between align-items-center">
              <div class="d-flex align-items-center">
                <img src="{{ asset("/assets/images/faq.png") }}" alt="pp-4" class="photo-profile mr-16">
                <div class="wrap">
                  <h3 class="h3">Kevin Pierre</h3>
                  <h4 class="h4">Mahasiswa</h4>
                </div>
              </div>
              <h3 class="h3">⭐️⭐️⭐️⭐️⭐️</h3>
            </div>
          </div>
          <div class="card-testimonial mr-24">
            <p>
              “Keren banget, dia bisa paham apa yang aku rasakan, aku hanyalah haty mungyl hello kitty”
            </p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="d-flex align-items-center">
                <img src="{{ asset("/assets/images/faq.png") }}" alt="pp-4" class="photo-profile mr-16">
                <div class="wrap">
                  <h3 class="h3">Terrano</h3>
                  <h4 class="h4">Mahasiswa</h4>
                </div>
              </div>
              <h3 class="h3">⭐️⭐️⭐️⭐️</h3>
            </div>
          </div>
        </div>

      </div>

    </section>
    <!-- END::TESTIMONIALS -->


    </div>
@endsection
