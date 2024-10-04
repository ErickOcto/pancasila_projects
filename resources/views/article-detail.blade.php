@extends('layouts.landing')

@section("landing-content")

    <!-- START::HEADLINE -->
    <section class="container bg-primary mt-48">
        <div class="row d-flex">
            <div class="col-10 offset-1 col-lg-8 offset-lg-2">
                <h1 class="h1 text-white text-center mb-48">
                    {{ $article->title }}
                </h1>
                <div class="d-lg-flex mb-5 text-center align-items-center justify-content-center">
                    <div class="d-flex justify-content-center mr-48 mb-3 mb-lg-0 ">
                        <img src="/assets/images/faq.png" alt="author" class="author mr-16">
                        <div class="wrap text-start">
                            <div class="article-category">
                                <span class="text-gradient-pink">{{ $article->blogCategory->name }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="text-white">
                        {{ $article->created_at }}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END::HEADLINE -->


    <!-- START::THUMBNAIL -->
    <section style="height: 60vh; width: 100vw; background-size: cover; background-image: url('{{ asset('/storage/' . $article->thumbnail) }}'); background-position: center;">
    </section>
    <!-- END::THUMBNAIL -->


    <!-- START::CONTENT -->
    <section class="container bg-primary py-100">
        <div class="row d-flex row-gap-5">
            <div class="col-10 col-lg-8 offset-lg-2 offset-1">
                <div class="article-text-content" style="color: white !important;">
                    {!! $article->content !!}
                </div>
            </div>
        </div>
    </section>
    <!-- END::CONTENT -->


    <!-- START::OTHER_ARTICLE -->
    <section class="container bg-primary py-100">
        <div class="row">
            <div class="col-10 col-lg-8 offset-lg-2 offset-1">
                <div class="text-center text-white h2 mb-24">
                  Artikel <span class="text-gradient-pink">Kesehatan</span> Lainnya
                </div>
                <div class="row row-gap-4">
                    @forelse ($articles as $article)
                        <div class="col-6 col-md-4 card-article">
                            <div class="p-1">
                                <div class="card-image-article mb-16 position-relative">
                                    <span class="badge h6 text-primary bg-white position-absolute mt-3" style="top: 12px; right: 12px;">
                                        {{ $article->created_at }}
                                    </span>
                                    <div class="img-article img-fluid" style="background-image: url('{{ asset('/storage/'.$article->thumbnail) }}'); background-size: cover; background-position:center; background-repeat: no-repeat;"></div>
                                </div>
                                <div class="card-content-article">
                                    <div class="h4 text-white title-article">
                                        {{ $article->title }}
                                    </div>
                                </div>
                                <div class="card-cta-article">
                                    <a href="/blogs/{{ $article->slug }}" class="article-button">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center">
                            <h3 class="h3">Tidak Ada Artikel</h3>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </section>
    <!-- END::OTHER_ARTICLE -->

@endsection
