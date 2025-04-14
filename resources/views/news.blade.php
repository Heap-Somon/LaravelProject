@extends('template')
@section('title')
  News
@endsection
@section('content')
<main class="shop news-blog">
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-title">
                                NEWS BLOG
                            </h3>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($latestNews as $latestNew)
                            <div class="col-3">
                                <figure>
                                    <div class="thumbnail">
                                        <a href="news_detail2/{{ $latestNew -> id }}">
                                            <img src="https://127.0.0.1/products/{{ $latestNew -> thumbnail }}" alt="">
                                        </a>
                                    </div>
                                    <div class="detail">
                                        <h5 class="title">{{ $latestNew -> title }}</h5>
                                    </div>
                                </figure>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </main>
@endsection