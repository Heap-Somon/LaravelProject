@extends('template')
@section('title')
Shop
@endsection
@section('content')
<main>
    <main class="shop">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-9">
                        <div class="row">
                            @foreach ($listProducts as $listProduct)
                            <div class="col-4">
                                <figure>
                                    <div class="thumbnail">
                                        @if ($listProduct -> sales_price > 0)
                                        <div class="status">
                                            Promotion
                                        </div>
                                        @endif
                                        <a href="/news_detail/{{ $listProduct -> id }}">
                                            <img src="http://127.0.0.1/products/{{  $listProduct -> thumbnail  }}" alt="" style="width:250px; height: 300px;">
                                        </a>
                                    </div>
                                    <div class="detail">
                                        <div class="price-list">
                                            <div class="regular-price "><strike> US {{ $listProduct -> regular_price }}</strike></div>
                                            @if($listProduct -> sales_price > 0)
                                            <div class="sale-price ">US {{ $listProduct -> sales_price }}</div>
                                            <div class="sale-price text-danger"> {{ number_format(($listProduct -> sales_price * 100) / $listProduct -> regular_price,2)}} % Off</div>
                                            @endif
                                        </div>
                                        <h5 class="title">{{ $listProduct -> name }}</h5>
                                    </div>
                                </figure>
                            </div>
                            @endforeach
                            <div class="col-12">
                                {{ $listProducts -> links('pagination::bootstrap-5') }}
                            </div>
                        </div>
                    </div>
                    <div class="col-3 filter">
                        <h4 class="title">Category</h4>
                        <ul>
                            <li>
                                <a href="/shop">ALL</a>
                            </li>
                            @foreach ($listCategories as $listCategory)
                            <li class="filter-category">
                                <a category="{{ $listCategory -> id }}" >{{ $listCategory -> name }}</a>
                            </li>
                            @endforeach
                        </ul>

                        <!-- <h4 class="title mt-4">Price</h4>
                                <div class="block-price mt-4">
                                    <a href="/shop?price=max">High</a>
                                    <a href="/shop?price=min">Low</a>
                                </div>
            
                                <h4 class="title mt-4">Promotion</h4>
                                <div class="block-price mt-4">
                                    <a href="/shop?promotion=true">Promotion Product</a>
                                </div> -->

                    </div>
                </div>
            </div>
        </section>

    </main>
</main>
@endsection
@section('script')
<script>
    // Ensures the script runs only after the page is fully loaded.
    $(document).ready(function() {
        // Selects all category links (<a> inside .filter-category list items).
        $('.filter ul .filter-category a').on('click', function(e) {
            // Stops the link from navigating to /shop.
            e.preventDefault();
            // Retrieves the category attribute value from the clicked <a>.
            const category = $(this).attr('category')
            console.log(category);
            
            // Sends an AJAX request to the server.
            $.ajax({
                // The URL to which the request is sent.
                url: '/product/filter',
                // The type of request.
                method: 'GET',                // The data to be sent with the request.
                data: {
                    category
                },
                // The function to be executed if the request is successful.
                success: function(response) {
                    // Replaces the content of the .row inside .col-9 with the response.
                    $('.container .row .col-9 .row').html(response);
                    console.log("AJAX Success:", response); // Debug: Log the server response
                },
                // The function to be executed if the request fails.
                error: function() {
                    console.log("error");
                }
            })

        })
    });
</script>
<!-- Why we use ajax -->
<!-- When you click on the category link, the page will not reload -->
<!-- The content of the page will be replaced with the response from the server -->
@endsection