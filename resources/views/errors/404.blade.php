<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layout.head')
    <body>
        @include('layout.header')
        <main class="main">
            <section class="home container--dark">
                <div class="home-intro container--light">
                    <h1 class="home-title">404 - Página no encontrada =(</h1>
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
