@extends('layouts.landing')

@section('landing-content')

    <section class="container my-3 text-center">
        <h1 class="text-center text-white h2">How Great is Your <span class="text-gradient-pink">Pancasila</span> Knowledge?</h1>
    </section>

    <section class="container table-responsive my-3 " style="border-radius: 16px !important;">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2" style="border-radius: 16px !important; border: #a60800 2px solid; box-shadow: 0 0 15px #a60800;">
                <table class="my-5 mx-4 bg-b w-100 text-white">
                  <tbody>
                        <tr>
                            <td colspan="3" class="text-center pb-5"><h2 style="color: #a60800">Garuda</h2><h2>Leaderboard</h2></td>
                        </tr>
                    @foreach ($items as $item)
                        <tr class="py-3">
                          <th scope="row"><h3>{{ $loop->iteration }}</h3></th>
                          <td><h3>{{ $item->name }}</h3></td>
                          <td class="text-end px-5 py-3"><h3>{{ $item->score }}</h3></td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="container my-3 text-center">
        <p class="h4 text-gray mb-48 mx-auto" style="max-width: 720px;">
            Want to test how deep your understanding of Pancasila values ​​is? Take our quiz! Each correct answer will collect Garuda Points that bring you closer to the top of the leaderboard. Are you ready to be a pioneer who fosters the spirit of nationalism?
        </p>

        <a href="{{ route('quizPage') }}" class="green-button h5">
            Start Quiz Now!
        </a>
    </section>

@endsection
