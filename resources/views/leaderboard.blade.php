@extends('layouts.landing')

@section('landing-content')

    <section class="container my-3 text-center">
        <h1 class="text-center text-white h2">How Great is Your <span class="text-gradient-pink">Pancasila</span> Knowledge?</h1>
    </section>

    <section class="container table-responsive my-3" style="border-radius: 16px; !important">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">
                <table class="table table-hover" style="border-radius: 16px; !important">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th class="text-end" scope="col">Garuda Points</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td class="text-end px-5">50</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td class="text-end px-5">40</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Larry the Bird</td>
                      <td class="text-end px-5">30</td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td>Larry the Bird</td>
                      <td class="text-end px-5">30</td>
                    </tr>
                    <tr>
                      <th scope="row">5</th>
                      <td>Larry the Bird</td>
                      <td class="text-end px-5">30</td>
                    </tr>
                  </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="container my-3 text-center">
        <p class="h4 text-gray mb-48 mx-auto" style="max-width: 720px;">
            Want to test how deep your understanding of Pancasila values ​​is? Take our quiz! Each correct answer will collect Garuda Points that bring you closer to the top of the leaderboard. Are you ready to be a pioneer who fosters the spirit of nationalism?
        </p>

        <a href="#" class="green-button h5">
            Start Quiz Now!
        </a>
    </section>

@endsection
