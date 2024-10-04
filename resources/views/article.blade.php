@extends('layouts.landing')

@section('landing-content')
    <!-- START::HERO -->
    <section class="container-fluid py-100 d-flex justify-content-center position-relative"
        style="background-image: url('{{ asset('/assets/images/podcast.jpg') }}'); background-size: cover; background-position: center;">
        <div class="overlay position-absolute w-100 h-100" style="background: rgba(0, 0, 0, 0.5); top: 0; left: 0;"></div>
        <div class="wrap text-center position-relative" style="max-width: 700px;">
            <h1 class="h1 text-white text-center">
                Artikel <span class="text-gradient-pink-2">Kesehatan</span>
            </h1>
        </div>
    </section>
    <!-- END::HERO -->


    @php
        $dataJson = json_decode($dataJson, true);
    @endphp


    <!-- START::CONTENT -->
    <section class="container bg-primary mt-48">
        <div class="row d-flex row-gap-5">

            <div class="col-12 col-lg-8 flex-nowrap order-last order-lg-first">
                <form action="{{ route('searchArticle') }}" class="input-group flex-nowrap mb-48" method="POST"
                    style="border-radius: 12px">
                    @csrf
                    <input type="text" name="search" class="form-control search text-white" placeholder="Cari Artikel"
                        aria-label="Username" aria-describedby="addon-wrapping">
                    <button class="tertiary-button" type="submit" id="button-addon2">Cari</button>
                </form>

                <div id="articles-container"></div>

                <div class="row">
                    @if ($dataJson['total_articles_count'] > 0)
                        <h3 class="h3 text-white mb-48"><span
                                class="text-gradient-pink-2">{{ $dataJson['total_articles_count'] }}</span> Artikel
                            Kesehatan Ditemukan</h3>
                    @else
                        <h3 class="h3 text-white mb-48">Artikel Kesehatan Tidak Ditemukan</h3>
                    @endif
                    @foreach ($dataJson['latest_articles'] as $article)
                        <div class="divider-2"></div>
                        <a href="/article/{{ $article['article_slug'] }}" class="card-article-page text-decoration-none">
                            <div class="d-flex align-items-center p-1">
                                <div class="card-image-article-page">
                                    <div class="img-article-page"
                                        style="background-image: url('{{ asset('/storage/' . $article['article_thumbnail']) }}'); background-size: cover; background-position:center; background-repeat: no-repeat;">
                                    </div>
                                </div>
                                <div class="card-content-article-page">
                                    <div class="h6 text-white">
                                        <strong>{{ $article['author_name'] }}</strong> <span class="text-gray">in</span>
                                        <span
                                            class="text-gradient-pink-2"><strong>{{ $article['category_name'] }}</strong></span>
                                    </div>
                                    <div class="h4 text-white title-article">
                                        {{ $article['article_title'] }}
                                    </div>
                                    <div class="h6 text-gray">{{ $article['article_created_at'] }}</div>
                                </div>
                            </div>
                        </a>
                    @endforeach

                </div>
            </div>

            <div class="col-12 col-lg-3 offset-lg-1 order-first order-lg-last article-right-card sticky-lg-top">
                <div class="content">
                    <div class="title mb-3">
                        Kategori Artikel
                    </div>

                    <div class="flex-wrap">
                        @forelse ($dataJson['chosen_categories'] as $category)
                            <a href="/article-category.html"
                                class="badge text-decoration-none h6 text-primary badge-category">
                                {{ $category['name'] }}
                            </a>
                        @empty
                            <h5 class="h5 text-white">Tidak ada kategori</h5>
                        @endforelse
                    </div>

                    <hr class="divider-2">

                    <div class="title mt-1 mb-3">
                        Artikel Pilihan
                    </div>

                    @forelse ($dataJson['chosen_articles'] as $data)
                        <div class="d-flex align-items-center mb-4">
                            <img src="{{ asset('/storage/' . $data['thumbnail']) }}" alt="faq"
                                class="img-picked-article mr-8" style="border-radius: 8px;">

                            <a href="/article/{{ $data['slug'] }}" class=" title-article text-white">
                                {{ $data['title'] }}
                            </a>
                        </div>
                    @empty
                    @endforelse

                </div>
            </div>
        </div>
    </section>
    <!-- END::CONTENT -->

    @push('push_js_after')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                document.querySelector('form').addEventListener('submit', function(e) {
                    e.preventDefault();

                    console.log('Submitting form with data:', new URLSearchParams(new FormData(this))
                    .toString());

                    fetch('{{ route('searchArticle') }}', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/x-www-form-urlencoded',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                    .getAttribute('content')
                            },
                            body: new URLSearchParams(new FormData(this))
                        })
                        .then(response => {
                            console.log('Response Status:', response.status);
                            console.log('Response Type:', response.type);

                            if (!response.ok) {
                                console.error('Network response was not ok:', response.statusText);
                                throw new Error('Network response was not ok.');
                            }
                            return response.json();
                        })
                        .then(data => {
                            console.log('Data received from server:', data);

                            const articlesContainer = document.querySelector('#articles-container');
                            articlesContainer.innerHTML = '';

                            if (data.latest_articles.length === 0) {
                                articlesContainer.innerHTML = '<p class="text-white h4">Artikel tidak ditemukan</p>';
                            } else {
                                data.latest_articles.forEach(article => {
                                    const articleHtml = `
                                <div class="divider-2"></div>
                                <a href="/article/${article.slug}" class="card-article-page text-decoration-none">
                                    <div class="d-flex align-items-center p-1">
                                        <div class="card-image-article-page">
                                            <div class="img-article-page" style="background-image: url('{{ asset('/storage') }}/${article.thumbnail}'); background-size: cover; background-position:center; background-repeat: no-repeat;"></div>
                                        </div>
                                        <div class="card-content-article-page">
                                            <div class="h6 text-white">
                                                <strong>${article.author_name}</strong> <span class="text-gray">in</span> <span class="text-gradient-pink-2"><strong>${article.category_name}</strong></span>
                                            </div>
                                            <div class="h4 text-white title-article">
                                                ${article.title}
                                            </div>
                                            <div class="h6 text-gray">${article.created_at}</div>
                                        </div>
                                    </div>
                                </a>
                            `;
                                    articlesContainer.innerHTML += articleHtml;
                                });
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                        });
                });
            });
        </script>


        {{-- <script>
            document.addEventListener('DOMContentLoaded', function() {
                var dataJson = @json($dataJson);
                console.log(dataJson);

                document.querySelector('form').addEventListener('submit', function(e) {
                    e.preventDefault();

                    fetch('{{ route('searchArticle') }}', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/x-www-form-urlencoded',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                    .getAttribute('content')
                            },
                            body: new URLSearchParams(new FormData(this))
                        })
                        .then(response => response.json())
                        .then(data => {
                            const articlesContainer = document.querySelector('#articles-container');
                            articlesContainer.innerHTML = '';

                            data.latest_articles.forEach(article => {
                                const articleHtml = `
                            <div class="divider-2"></div>
                            <a href="/article/${article.article_slug}" class="card-article-page text-decoration-none">
                                <div class="d-flex align-items-center p-1">
                                    <div class="card-image-article-page">
                                        <div class="img-article-page" style="background-image: url('{{ asset('/storage') }}/${article.article_thumbnail}'); background-size: cover; background-position:center; background-repeat: no-repeat;"></div>
                                    </div>
                                    <div class="card-content-article-page">
                                        <div class="h6 text-white">
                                            <strong>${article.author_name}</strong> <span class="text-gray">in</span> <span class="text-gradient-pink-2"><strong>${article.category_name}</strong></span>
                                        </div>
                                        <div class="h4 text-white title-article">
                                            ${article.article_title}
                                        </div>
                                        <div class="h6 text-gray">${article.article_created_at}</div>
                                    </div>
                                </div>
                            </a>
                        `;
                                articlesContainer.innerHTML += articleHtml;
                            });
                        })
                        .catch(error => console.error('Error:', error));
                });
            });
        </script> --}}
    @endpush
@endsection
