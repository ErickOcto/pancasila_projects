@extends('layouts.landing')

@section('landing-content')
    <!-- START::HERO -->
    <section class="container-fluid py-100 d-flex justify-content-center position-relative" style="background-image: url('/assets/images/podcast.jpg'); background-size: cover; background-position: center;">
        <div class="overlay position-absolute w-100 h-100" style="background: rgba(0, 0, 0, 0.5); top: 0; left: 0;"></div>
        <div class="wrap text-center position-relative" style="max-width: 700px;">
            <h1 class="h1 text-white text-center">
                <span class="text-gradient-pink-2">{{ $blog_name->name }}</span> Article
            </h1>
        </div>
    </section>
    <!-- END::HERO -->



    <!-- START::CONTENT -->
    <section class="container bg-primary mt-48">
        <div class="row d-flex row-gap-5">

            <div class="col-12 col-lg-8 flex-nowrap order-last order-lg-first">
                <form action="{{ route('searchArticle') }}" method="GET" class="input-group flex-nowrap mb-48">
                    @csrf
                    <input type="text" name="search" class="form-control search text-white" placeholder="Search article" aria-label="Username" aria-describedby="addon-wrapping">
                    <button class="tertiary-button" type="button" id="button-addon2">Search</button>
                </form>
                <div class="row">

                    <p class="h3 text-white mb-48
                    "><span class="text-gradient-pink">{{ $count }}</span> {{ $blog_name->name }} Article Founded</p>

                    <div class="row">
                        @foreach ($articles as $article)
                            {{-- <div class="divider-2"></div> --}}
                            <a href="/blogs/{{ $article['slug'] }}" class="card-article-page text-decoration-none my-2">
                                <div class="d-flex align-items-center p-1">
                                    <div class="card-image-article-page">
                                        <div class="img-article-page"
                                            style="background-image: url('{{ asset('/storage/' . $article['thumbnail']) }}'); background-size: cover; background-position:center; background-repeat: no-repeat;">
                                        </div>
                                    </div>
                                    <div class="card-content-article-page">
                                        <div class="h6 text-white">
                                            <strong>{{ $article['author_name'] }}</strong> <span class="text-gray">in</span>
                                            <span
                                                class="text-gradient-pink-2"><strong>{{ $article->blogCategory->name }}'s</strong></span> Category
                                        </div>
                                        <div class="h4 text-white title-article">
                                            {{ $article['title'] }}
                                        </div>
                                        <div class="h6 text-gray">{{ $article['created_at'] }}</div>
                                    </div>
                                </div>
                            </a>
                        @endforeach

                        {{ $articles->links() }}

                    </div>

                </div>
            </div>

            <div class="col-12 col-lg-3 offset-lg-1 order-first order-lg-last article-right-card sticky-lg-top">
                <div class="content">
                    <div class="title mb-3">
                        Article Categories
                    </div>

                    <div class="flex-wrap">
                        @foreach ($categories as $category)
                            <a href="{{ route('articleCategory', $category->id) }}" class="badge text-decoration-none h6 text-primary badge-category {{ request()->is('articleCategory/' . $category->id) ? 'active' : null }}">
                                {{ $category->name }}
                            </a>
                        @endforeach
                    </div>

                    <hr class="divider-2">

                    <div class="title mt-1 mb-3">
                        Artikel Pilihan
                    </div>
                    @forelse ($chosenArticles as $data)
                        <div class="d-flex align-items-center mb-4">
                            <img src="{{ asset('/storage/' . $data['thumbnail']) }}" alt="faq"
                                class="img-picked-article mr-8" style="border-radius: 8px;">

                            <a href="/blogs/{{ $data['slug'] }}" class=" title-article text-white">
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
@endsection
