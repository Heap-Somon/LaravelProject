<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title')</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ url('theme.css') }}" rel="stylesheet">
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css'" rel="stylesheet"> -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>    
        <header>
            <div class="container">
                <div class="logo">
                    <a href="">
                        <h1>
                            KH FASHION
                        </h1> 
                    </a>
                </div>
                <ul class="menu">
                    <li>
                        <a href="/">HOME</a>
                    </li>
                    <li>
                        <a href="/shop/">SHOP</a>
                    </li>
                    <li>
                        <a href="news/">NEWS</a>
                    </li>
                </ul>
                <div class="search">
                    <form>
                        <input type="text" name="s" id="search-box" class="box" placeholder="SEARCH HERE">
                        <img width="25" height="25" style="margin-left: 180px;" class="position-absolute" src="{{ url('search.png') }}" alt="">
                    </form>
                </div>
            </div>
        </header>
        <div class="content">
            @yield('content')
        </div>
        <footer>
            <span>
                AllRight Recieved @ 2023
            </span>
        </footer>

    </body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    @yield('script')
    <script>
        $(document).ready(function(){
            $('#search-box').on('keyup',function(e){
                let filter = e.target.value;
                $.ajax({
                    url : '/search/',
                    method : 'GET',
                    data : {
                        filter
                    },
                    success :function(response){
                        console.log("AJAX Success:", response); // Debug: Log the server response
                        $('.content').html(response);
                    },
                    error :function (message, status, xhr){
                        console.log("AJAX Error:", message.responseText); // Debug: Log the error message
                    }
                })
            })
        })
    </script>
</html>