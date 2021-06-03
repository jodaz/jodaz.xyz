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
                <div class="flex button" id="button">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </div>
                <div class="flex menu" id="menu">
                    <a class="header-navlink" href="https://blog.jodaz.xyz">blog</a>
                    <!-- <a class="header-navlink" href="#work">work</a>
                    <a class="header-navlink" href="#writings">writings</a> -->
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
            <section class="flex about" id="about">
                <div class="about-title">
                    <h2>WhoAmI</h2>
                </div><div class="about-photo">
                    <img src="{{ asset('/assets/img/profile.jpg') }}">
                </div>
                <div class="about-bio">
                    <p>
                        I am a web developer based in Carupano, Venezuela.
                    </p>
                    <p>I love to solve problems as well as making things pretty and easy to use. I can't stop learning new things; the more, the better.
                    In my free time, I enjoy to design and code interfaces, algorithm exercises and web development projects.
                    </p>
                    <p>For the front-end I usually work with Javascript, either standalone or including a frammework like ReactJS.
                    I also make the web pretty by using CSS and, whenever needed, use a design frammework like Bootstrap.
                    </p>
                    <p>For the back-end I work with Javascript, Node.JS, Express and MongoDB.
                    </p>
                </div>
            </section>
            <!--
            <section class="work" id="work">
                <h2>My work</h2>
                <section class="project">
                    <div>
                        <div class="project-title">
                            <h3>ShurtIt!</h3>
                        </div>
                        <div class="project-description">
                            <p>Url Shortener microservice made with Node.js and MongoDB for the back-end, and vanilla CSS and Javascript in the front-end.</p>
                        </div>
                        <div class="project-links flex">
                            <a class="project-link" href="https://shurtit.glitch.me/" target="_blank">
                                live
                            </a>
                            <a class="project-link" href="https://github.com/jesuodz/shurtit" target="_blank">
                                code
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="project-image">
                            <img src="/assets/shurtit.png">
                        </div>
                    </div>
                </section>
            </section>
             -->
            <section class="flex writings" id="writings">
                <div class="writings-title hide" id="artitle-title">
                    <h2>Latest articles</h2>
                </div>
                <div class="lds-ring show" id="writings-loader"><div></div><div></div><div></div><div></div></div>
            </section>
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
