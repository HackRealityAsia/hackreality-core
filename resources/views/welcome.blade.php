<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HackRealityAsia | Core</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    {{--TODO: #1. Compile this inline style, if necessary, to the application's stylesheet--}}
    {{--TODO: #2. Make the landing page responsive--}}
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        #landing-video {
            position: fixed;
            top: 0;
            left: 0;
            min-height: 100%;
            min-width: 100%;
        }

        #landing-content {
            position: fixed;
            text-align: center;
        }

        #landing-content__links {
            position: relative;
            top: 50vh;
            color: white;

        }
        .landing-content__text-logo {
            position: relative;
            max-width: 60%;
            margin: 0 auto;
        }

        .landing-content__links {
            text-decoration: none;
            padding: 15px 50px;
            color: white;
            background-color: #45CAFD;
        }
    </style>
</head>
<body class="container">
<section>
    <video id="landing-video"
           src="http://hackreality.asia/hackreality-assets/HackRealityWebVideoBG.webm"
           type="video/webm"
           autoplay="autoplay"
           muted="muted"
           loop>
    </video>
</section>
<section id="landing-content">
    <img class="landing-content__text-logo" src="{{ asset('images/logo_text_long.png') }}" alt="">
    @if (Route::has('login'))
        <div id="landing-content__links">
            @if(Auth::check())
                <a class="landing-content__links" href="{{ url('/home') }}">BACK TO CORE</a>
            @else
                <a class="landing-content__links" href="{{ route('login') }}">LOGIN TO CORE</a>
            @endif
        </div>
    @endif
</section>
</body>
</html>
