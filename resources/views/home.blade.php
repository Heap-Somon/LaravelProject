@extends('template')

@section('title')
  Index
@endsection
@section('content')
<main class="home">
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-title">
                                NEW PRODUCTS
                            </h3>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($latestProducts as $latestProduct)
                            <div class="col-3">
                                <figure>
                                    <div class="thumbnail">
                                        @if($latestProduct->sale_price>0)
                                            <div class="status">
                                                Promotion
                                            </div>
                                        @endif
                                    </div>
                                    <a href="/news_detail/{{ $latestProduct -> id }}">
                                        <img src="https://127.0.0.1/products/{{ $latestProduct -> thumbnail }}" alt="" style="width:250px; height: 300px;">
                                    </a>
                                    <div class="detail">
                                        <div class="price-list">
                                            @if($latestProduct-> sale_price < 0 || $latestProduct-> sale_price == 0)
                                                <div class="regular-price">US {{ $latestProduct->regular_price }}</div>
                                            @endif
                                            @if ($latestProduct-> sale_price > 0)
                                                <div class="regular-price"><strike>US {{ $latestProduct->regular_price }}</strike></div>
                                                <div class="sale-price ">% -{{ number_format(($latestProduct-> sale_price * 100)  / $latestProduct -> regular_price,2) }}</div>
                                            @endif
                                        </div>
                                        <h5 class="title">{{ $latestProduct->name }}</h5>
                                    </div>
                                </figure>
                            </div>
                        @endforeach
                        
                    </div>
                </div>
            </section>

            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-title">
                                PROMOTION PRODUCTS
                            </h3>
                        </div>
                    </div>
                    <div class="row">
                        <!-- If this error accur -->
                        <!-- syntax error, unexpected token ")", expecting "->" or "?->" or "{" or "[" -->
                        <!-- It means that you have a syntax error in your blade file -->
                         <!-- Solution is: check $ in for each loop -->
                        @foreach ($promotionProducts as $promotionProduct)
                            <div class="col-3">
                                <figure>
                                    <div class="thumbnail">
                                            <!-- <div class="status">
                                            Promotion
                                        </div>  -->
                                        <a href="/news_detail/{{ $promotionProduct -> id }}">
                                            <img src="https://127.0.0.1/products/{{ $promotionProduct -> thumbnail }}" alt="" style="width:250px; height: 300px;">
                                        </a>
                                    </div>
                                    <div class="detail">
                                        <div class="price-list">
                                            <!-- <div class="price d-none">US </div> -->
                                            <div class="regular-price "><strike> US {{$promotionProduct -> regular_price}}</strike></div>
                                            @if ($promotionProduct-> sale_price > 0)
                                                <div class="sale-price ">% -{{ number_format(($promotionProduct-> sale_price * 100)  / $promotionProduct -> regular_price,2) }}</div>
                                            @endif
                                    </div>
                                    <h5 class="title">{{$promotionProduct -> name}}</h5>
                                </figure>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>  
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-title">
                                POPULAR PRODUCTS
                            </h3>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($mostViewedProducts as $mostViewedProduct)
                            <div class="col-3">
                                <figure>
                                    <div class="thumbnail">
                                        <!-- <div class="status">
                                            Promotion
                                        </div>  -->
                                        <a href="/news_detail/{{ $mostViewedProduct -> id }}">
                                            <img src="https://127.0.0.1/products/{{ $mostViewedProduct -> thumbnail }}" alt="" style="width:250px; height: 300px;">
                                        </a>
                                    </div>
                                    <div class="detail">
                                        <div class="price-list">
                                            <div class="price d-none">US 10</div>
                                            @if($mostViewedProduct-> sale_price < 0 || $mostViewedProduct-> sale_price == 0)
                                                <div class="regular-price">US {{ $mostViewedProduct->regular_price }}</div>
                                            @endif
                                            @if ($mostViewedProduct-> sale_price > 0)
                                                <div class="regular-price"><strike>US {{ $mostViewedProduct->regular_price }}</strike></div>
                                                <div class="sale-price ">% -{{ number_format(($mostViewedProduct-> sale_price * 100)  / $mostViewedProduct -> regular_price,2) }}</div>
                                            @endif
                                        </div>
                                        <h5 class="title">{{$mostViewedProduct -> name}}</h5>
                                    </div>
                                </figure>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

        </main>  
@endsection
