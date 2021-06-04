<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {!! SEO::generate() !!}
        <!-- Fonts -->
        <link href="{{ asset('css/website/main.css') }}" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
    </head>
    <body>
        <header class="flex header" id="header">
            <nav class="header-nav">
                <div class="flex button-menu" id="button">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </div>
                <div class="flex menu" id="menu">
                    <a class="header-navlink" href="{{ route('home') }}">home</a>
                    <a class="header-navlink" href="{{ route('about') }}">about</a>
                    <a class="header-navlink" href="https://blog.jodaz.xyz/" target="_blank">writings</a>
                </div>
            </nav>
        </header>
        <main class="main">
            <section class="home" style="background-image: url(assets/img/home.jpeg)">
                <div class="home-intro">
                    <h1 class="home-title">Hello!</h1>
                    <h1 class="home-title">I'm Jesus Ordosgoitty</h1>
                    <h2 class="home-subtitle">and I
                        <img src="{{ asset('/assets/icons/hearth.svg') }}" height='16px' width='16px'>
                        software development
                    </h2>
                </div>
            </section>
            @yield('content')
        </main>
        <footer class="footer flex">
            <div class="flex social">
                <a target="_blank" href="https://www.linkedin.com/in/jodaz">
                    <img src="{{ asset('assets/icons/linkedin.svg') }}" class="social-icon" alt="linkedin" />
                </a>
                <a target="_blank" href="https://github.com/jodaz">
                    <img src="{{ asset('assets/icons/github.svg') }}" class="social-icon" alt="github" />
                </a>
                <a target="_blank" href="https://twitter.com/jodaz_">
                    <img src="{{ asset('assets/icons/twitter.svg') }}" class="social-icon" alt="twitter" />
                </a>
                <a target="_blank" href="https://instagram.com/j0daz">
                    <img src="{{ asset('assets/icons/instagram.svg') }}" class="social-icon" alt="instagram" />
                </a>
            </div>
            <div class="credits">
                <span>Made at 127.0.0.1</span>
                </br>
                <span>© {{ now()->year }} <a href="{{ url('/') }}">jodaz</a></span>
            </div>
        </footer>
    </body>
    <script src="{{ asset('js/website/app.js') }}"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ config('custom.analytics') }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', "{{ config('custom.analytics') }}");
    </script>
</html>