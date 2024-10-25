@extends('layouts.landing')
@push('push_css_before')
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endpush

@section('landing-content')

    <!-- START::CONTENT -->
     <section class="container py-100">
      <div class="row">

        <div class="col-10 col-lg-6 offset-1 offset-lg-3 mb-48">
          <div class="d-flex justify-content-center">
            <h1 class="h1 text-white">Garuda Points: {{ Auth::user()->score }}</h1>
          </div>
        </div>

        <div class="col-10 col-lg-6 offset-1 offset-lg-3">
          <form action="{{ route('quizSubmit', Auth::user()->id) }}" method="POST" class="card-question">
            @csrf
            @method('PUT')
            <h3 class="h3 text-white">{{ $question->question }}</h3>
            @if($question->difficulty === 'hard')
                <span style="padding: 12px 18px; background-color:red !important;" class="badge rounded-pill text-bg-danger">Hard</span>
            @elseif ($question->difficulty === 'medium')
                <span style="padding: 12px 18px; background-color:yellow !important; color:black !important;" class="badge rounded-pill text-bg-warning">Medium</span>
            @elseif($question->difficulty === 'low')
                <span style="padding: 12px 18px; background-color: green !important;" class="badge rounded-pill text-bg-success">Easy</span>
            @endif
            <div class="answer mt-16">

            <input type="hidden" name="level" value="{{ $question->difficulty }}">

            @foreach ($answers as $answer)
              <div class="form-check mb-8">
                <input class="form-check-input" type="radio" value="{{ $answer->value }}" name="answer" id="flexRadioDefault{{ $answer->id }}">
                <label class="form-check-label" for="flexRadioDefault{{ $answer->id }}">
                  {{ $answer->answer }}
                </label>
              </div>
            @endforeach

              <button class="btn btn-danger px-3 mt-2" style="background-color: red;">
                Check <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
              </button>

            </div>
          </form>

      </div>
     </section>
    <!-- END::CONTENT -->

@endsection

@push('push_js_after')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        //message with toastr
        @if(session()->has('success'))

            toastr.success('{{ session('success') }}', 'Correct Answer!');

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'Wrong Answer!');

        @endif
    </script>
@endpush

