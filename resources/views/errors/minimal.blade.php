<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <style>
        .page_404 {
            padding: 40px 0;
            background: #fff;
            font-family: 'Nunito', sans-serif;
        }

        .page_404 img {
            width: 100%;
        }

        .four_zero_four_bg {
            background-image: url(https://cdn.dribbble.com/users/285475/screenshots/2083086/dribbble_1.gif);
            height: 400px;
            background-position: center;
            background-repeat: no-repeat;
            width: 50%;
            margin: 0 auto;
            display: block;
            position: relative;
        }

        .four_zero_four_bg h1 {
            font-size: 80px;
        }

        .four_zero_four_bg h3 {
            font-size: 80px;
        }

        .link_404 {
            color: #fff !important;
            padding: 10px 20px;
            background: #39ac31;
            margin: 20px 0;
            display: inline-block;
            text-decoration: none;
        }

        .contant_box_404 {
            margin-top: 0px;
        }

        .text-center {
            text-align: center;
        }

        .sheep {
            display: inline-block;
            position: absolute;
            font-size: 1em;
            right: 15%;
            bottom: 16%;
            transform: scale(0.8);
        }

        .sheep * {
            transition: transform 0.3s;
        }

        .sheep .top {
            position: relative;
            top: 0;
            animation: bob 1s infinite;
        }

        .sheep:hover .head {
            transform: rotate(0deg);
        }

        .sheep:hover .head .eye {
            width: 1.25em;
            height: 1.25em;
        }

        .sheep:hover .head .eye:before {
            right: 30%;
        }

        .sheep:hover .top {
            animation-play-state: paused;
        }

        .sheep .head {
            display: inline-block;
            width: 5em;
            height: 5em;
            border-radius: 100%;
            background: #211e21;
            vertical-align: middle;
            position: relative;
            top: 1em;
            transform: rotate(30deg);
        }

        .sheep .head:before {
            content: '';
            display: inline-block;
            width: 80%;
            height: 50%;
            background: #211e21;
            position: absolute;
            bottom: 0;
            right: -10%;
            border-radius: 50% 40%;
        }

        .sheep .head:hover .ear.one,
        .sheep .head:hover .ear.two {
            transform: rotate(0deg);
        }

        .sheep .head .eye {
            display: inline-block;
            width: 1em;
            height: 1em;
            border-radius: 100%;
            background: white;
            position: absolute;
            overflow: hidden;
        }

        .sheep .head .eye:before {
            content: '';
            display: inline-block;
            background: black;
            width: 50%;
            height: 50%;
            border-radius: 100%;
            position: absolute;
            right: 10%;
            bottom: 10%;
            transition: all 0.3s;
        }

        .sheep .head .eye.one {
            right: -2%;
            top: 1.7em;
        }

        .sheep .head .eye.two {
            right: 2.5em;
            top: 1.7em;
        }

        .sheep .head .ear {
            background: #211e21;
            width: 50%;
            height: 30%;
            border-radius: 100%;
            position: absolute;
        }

        .sheep .head .ear.one {
            left: -10%;
            top: 5%;
            transform: rotate(-30deg);
        }

        .sheep .head .ear.two {
            top: 2%;
            right: -5%;
            transform: rotate(20deg);
        }

        .sheep .body {
            display: inline-block;
            width: 7em;
            height: 7em;
            border-radius: 100%;
            background: white;
            position: relative;
            vertical-align: middle;
            margin-right: -3em;
        }

        .sheep .legs {
            display: inline-block;
            position: absolute;
            top: 80%;
            left: 10%;
            z-index: 1;
        }

        .sheep .legs .leg {
            display: inline-block;
            background: #141214;
            width: 0.5em;
            height: 2.5em;
            margin: 0.2em;
        }

        .sheep:before {
            content: '';
            display: inline-block;
            position: absolute;
            top: 112%;
            width: 100%;
            height: 10%;
            border-radius: 100%;
            background: rgba(0, 0, 0, 0.4);
        }

        @keyframes bob {
  0% {
    top: 0;
  }
  50% {
    top: 0.2em;
  }
}
    </style>
</head>

<body>

    <section class="page_404">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 ">
                    <div class="col-sm-10 col-sm-offset-1  text-center">
                        <div class="four_zero_four_bg">
                            <h1 class="text-center">@yield('code') ERROR</h1>

                            <div class="sheep">
                                <span class="top">
                                    <div class="body"></div>
                                    <div class="head">
                                        <div class="eye one"></div>
                                        <div class="eye two"></div>
                                        <div class="ear one"></div>
                                        <div class="ear two"></div>
                                    </div>
                                </span>
                                <div class="legs">
                                    <div class="leg"></div>
                                    <div class="leg"></div>
                                    <div class="leg"></div>
                                    <div class="leg"></div>
                                </div>
                            </div>

                        </div>

                        <div class="contant_box_404">
                            @yield('message')
                            <a href="{{ URL::to('/') }}" class="link_404">Go to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>