<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {!! SEO::generate() !!}
        <!-- Fonts -->
        <link href="{{ asset('css/website/main.css') }}" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;700&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
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
                    <a class="header-navlink" href="{{ route('home') }}" title="Home">home</a>
                    <a class="header-navlink" href="{{ route('about') }}" title="About">about</a>
                    <a class="header-navlink" href="{{ route('projects') }}" title="Projects">projects</a>
                    <a class="header-navlink" href="https://blog.jodaz.xyz/" target="_blank" title="Writings">writings</a>
                </div>
            </nav>
        </header>
        <main class="main">
            <section class="home" style="background-image: url({{ $landingPhoto }})">
                <div class="home-intro">
                    <h1 class="home-title">{{ $intro }}</h1>
                    @isset($brief)
                    <h2 class="q">
                    {{ $brief }}
                    </h2>
                    @endisset
                </div>
            </section>
            @yield('content')
            <section class="flex container container--dark contact">
                <div class="row">
                    <h2 class="container-title"><span class="ac s">#</span> Get in touch</h2>
                    <p class="container-subtitle">
                        Whether you are interested to do business with me, want to chat about some of my content, or just want to hang out, I am happy to talk to you.
                    </p>
                    <p class="container-subtitle">
                    My preferred way of contact is via <a title="Twitter" href="https://twitter.com/@jodaz_" class="l">Twitter</a>
                    or <a href="mailto:jesuodz@gmail.com" class="l" title="Email">email</a>.
                    </p>
                    <p class="container-subtitle">
                    Feel free to check out my social media presence below to get to know me better.
                    </p>
                </div>
            </section>
        </main>
        <footer class="flex container">
            <div class="flex row jc social">
                <a title="LinkedIn" target="_blank" href="https://www.linkedin.com/in/jodaz">
                    <img src="{{ asset('assets/icons/linkedin.svg') }}" class="social-icon" alt="linkedin" />
                </a>
                <a title="Github" target="_blank" href="https://github.com/jodaz">
                    <img src="{{ asset('assets/icons/github.svg') }}" class="social-icon" alt="github" />
                </a>
                <a title="Twitter" target="_blank" href="https://twitter.com/jodaz_">
                    <img src="{{ asset('assets/icons/twitter.svg') }}" class="social-icon" alt="twitter" />
                </a>
                <a title="Instagram" target="_blank" href="https://instagram.com/j0daz">
                    <img src="{{ asset('assets/icons/instagram.svg') }}" class="social-icon" alt="instagram" />
                </a>
            </div>
            <div class="row credits tc">
                <span>Made at 127.0.0.1</span>
                </br>
                <span>© {{ now()->year }} <a href="{{ url('/') }}" class="l ac">jodaz</a></span>
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
