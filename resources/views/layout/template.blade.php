<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layout.head')
    <body>
        @include('layout.header')
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
        @include('layout.footer')
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
