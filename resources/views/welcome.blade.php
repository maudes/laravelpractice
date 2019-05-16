<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
            <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>The Smurfs</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Backstage</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                     <img src="https://upload.wikimedia.org/wikipedia/en/thumb/e/e3/The_Smurfs_logo.svg/1200px-The_Smurfs_logo.svg.png";>
                </div>

                <div class="links">
                    <!--<a href="https://laravel.com/docs">Docs</a>-->
                    <a href="/about">About us</a>
                    <a href="/article">Characters</a>
                    <a href="https://en.wikipedia.org/wiki/The_Smurfs" target="_blank">Wikipedia</a>
                    <a href="https://www.google.com/search?q=the+smurfs&source=lnms&tbm=nws&sa=X&ved=0ahUKEwjssaiBopviAhUHEqYKHSpcBLQQ_AUIECgD&biw=1280&bih=721" target="_blank">Recent News</a>
                    <a href="https://github.com/maudes/laravelpractice" target="_blank">GitHub</a>
                </div>
            </div>
        </div>
    </body>
    <footer class="bg-dark fixed-bottom text-white mt-4">   
         <div class="text-right small"; style="padding:15px 20px";>©2019 Maude practices Laravel.</div>
    </footer>
</html>
