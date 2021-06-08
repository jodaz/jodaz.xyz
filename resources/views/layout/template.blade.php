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
                    <a class="header-navlink" href="{{ route('home') }}">
                        {{ __('home') }}
                    </a>
                    <a class="header-navlink" href="{{ route('about') }}">
                        {{ __('about') }}
                    </a>
                    <a class="header-navlink" href="{{ route('projects') }}">
                        {{ __('projects') }}
                    </a>
                    <a class="header-navlink" href="https://blog.jodaz.xyz/" target="_blank">
                        {{ __('writings') }}
                    </a>
                    <div class="flex aic lang--container">
                        @foreach (language()->allowed() as $code => $name)
                            <a href="{{ language()->back($code) }}" class="header-navlink" title="{{ $name }}">{{ $code }}</a>
                        @endforeach
                    </div>
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
                    <h2 class="container-title"><span class="ac s">#</span>
                        {{ __('Get in touch') }}
                    </h2>
                    <p class="container-subtitle">
                       {{ __('Whether you are interested to do business with me, want to chat about some of my content, or just want to hang out, I am happy to talk to you.') }}
                    </p>
                    <p class="container-subtitle">
                    {{ __('My preferred ways of contact is via') }} <a title="Telegram" href="https://t.me/j0daz" class="l">Telegram</a>
                    {{ __('and') }} <a href="mailto:jesuodz@gmail.com" class="l" title="Email">email</a>.
                    </p>
                    <p class="container-subtitle">
                        {{  __('Feel free to check out my social media presence below to get to know me better.') }}
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
                <a title="Telegram" target="_blank" href="https://t.me/j0daz">
                    <img src="{{ asset('assets/icons/telegram.svg') }}" class="social-icon" alt="telegram" />
                </a>
                <a title="Instagram" target="_blank" href="https://instagram.com/j0daz">
                    <img src="{{ asset('assets/icons/instagram.svg') }}" class="social-icon" alt="instagram" />
                </a>
                <a title="Hasnode" target="_blank" href="https://hasnode.com/@jodaz">
                    <img src="{{ asset('assets/icons/hashnode.svg') }}" class="social-icon" alt="hashnode" />
                </a>
            </div>
            <div class="row credits tc">
                <small>{{ __('Made at 127.0.0.1 with a lot of coffee') }}</small>
                </br>
                <small>© {{ now()->year }} <a href="{{ url('/') }}" class="l ac">jodaz</a></small>
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
