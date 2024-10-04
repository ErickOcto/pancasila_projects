@extends("layouts.landing")

@section("landing-content")

    <!-- START::HERO -->
    <section class="container-fluid py-100 d-flex justify-content-center position-relative" style="background-image: url('/assets/images/asesmen.jpg'); background-size: cover; background-position: center;">
        <div class="overlay position-absolute w-100 h-100" style="background: rgba(0, 0, 0, 0.5); top: 0; left: 0;"></div>
        <div class="wrap text-center position-relative" style="max-width: 700px;">
            <h1 class="h1 text-white text-center mb-48">
                Selamat Datang di<br><span class="text-gradient-pink-2">Halaman Asesmen</span>
            </h1>
            <p class="h4 text-white mb-48">Di sini, kamu bisa melakukan tes sederhana yang bisa membantu kamu memahami kondisi kesehatan mentalmu. Jangan khawatir, semua data yang kamu bagikan akan aman dan rahasia.</p>
            <a href="#test" class="green-button h5">
                MULAI SEKARANG <img src="/assets/images/icons/zap.svg" alt="zap">
            </a>
        </div>
    </section>
    <!-- END::HERO -->

    <!-- START::WHY  -->
    <section class="container d-flex align-items-center py-100">
      <div class="row d-flex align-items-center">

        <div class="col-10 offset-1 offset-lg-0 col-lg-6">
          <h2 class="h2 text-white mb-48">Kenapa <span class="text-gradient-pink">Perlu</span> Tes?</h2>
          <p class="h4 text-gray">Kadang, kita merasa cemas, stres, atau galau tanpa tahu sebabnya. Tes ini bisa membantu kamu mengenali perasaanmu dan memberikan gambaran tentang apa yang sedang kamu alami.</p>
        </div>

        <div class="col-10 offset-1 offset-lg-0 col-lg-6">
          <img src="/assets/images/asesmen.jpg" alt="" class="img-fluid img-border">
        </div>

      </div>
    </section>
    <!-- END::WHY -->


    <!-- START::WORK -->
    <section class="container d-flex flex-column justify-content-center py-100">
      <div class="row mb-24 text-center">
        <div class="text-white h2"><span class="text-gradient-pink-2">Mudah</span> Banget!</div>
      </div>
      <div class="row" style="row-gap: 48px;">
        <div class="col-12 col-md-4 text-center">
          <img src="/assets/images/steps/choose.svg" alt="step-1" class="img-fluid mb-24">
          <h3 class="h3 text-white">1. Pilih Tes</h3>
        </div>
        <div class="col-12 col-md-4 text-center">
          <img src="/assets/images/steps/answer.svg" alt="step-2" class="img-fluid mb-24">
          <h3 class="h3 text-white">2. Jawab Kuis</h3>
        </div>
        <div class="col-12 col-md-4 text-center">
          <img src="/assets/images/steps/advice.svg" alt="step-3" class="img-fluid mb-24">
          <h3 class="h3 text-white">3. Dapatkan Hasil</h3>
        </div>
      </div>
    </section>
     <!--END::WORK  -->


    <!-- START::FACT  -->
    <section class="container d-flex align-items-center py-100">
      <div class="row">
        <div class="col-10 offset-1 col-lg-6 offset-lg-3">
          <h2 class="h2 text-white text-center mb-48">Ingat, kami di sini untuk membantu. <span class="text-gradient-pink-2">Kamu nggak sendirian.</span></h2>

          <p class="h4 text-gray text-center">Kalau butuh teman ngobrol atau merasa perlu cerita, chat dengan AI kami yang selalu siap mendengarkan dan memberikan feedback positif.</p>
        </div>
      </div>
    </section>
    <!-- END::FACT -->


    <!-- START::TESTS -->
    <section id="test" class="container d-flex flex-column justify-content-center py-100">
        <h2 class="h2 text-white text-center mb-24">Pilih <span class="text-gradient-pink">Tes</span> Yang Kamu Mau</h2>
        @php
            $assessments = json_decode($assessmentList, true);
        @endphp
        <div class="row">
            <div class="col-10 offset-1">
                <div class="row row-gap-5">
                    @forelse ($assessments as $assessment)
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="card-test">
                            <div class="d-flex flex-column row-gap-3 justify-content-center align-items-center p-5">
                                <img src="/assets/images/icons/feature-6.svg" alt="phq">
                                <h3 class="h3 text-white text-center">
                                    {{ $assessment["name"] }}
                                </h3>
                                <button type="button" class="tertiary-button w-100 border-0" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        data-name="{{ $assessment['name'] }}" data-description="{{ $assessment['description'] }}">
                                    Lihat Detail
                                </button>
                            </div>
                        </div>
                    </div>
                    @empty
                    <p class="text-center text-white">Tidak ada tes yang tersedia saat ini.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </section>
    <!-- END::TESTS -->


    <!-- START::MODAL -->
    @include("components.assessment-modal")
    <!-- END::MODAL -->


    @push("push_js_after")
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var assessments = JSON.parse(@json($assessmentList));

            console.log(Array.isArray(assessments));
            console.log(assessments);
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#exampleModal').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget);
                var name = button.data('name');
                var description = button.data('description');

                var modal = $(this);
                modal.find('.modal-title').text('Detail : ' + name);
                modal.find('#modalDescription').text(description);
            });
        });
    </script>
    @endpush

@endsection
