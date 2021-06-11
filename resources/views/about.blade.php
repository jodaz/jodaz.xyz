@extends('layout.template')

@section('content')
<section class="flex container container--light">
    <div class="row">
        <div class="row project">
            <div class="flex fdcr project-content">
                <div class="project-description">
                    <p>
                        {{ __('Hello! My name is Jesus Ordosgoitty and I am a software developer based in Carupano, Venezuela.') }}
                    </p>
                    <p>
                    {{ __("I love to fix problems, as well as making things pretty and easy to use through development and coding. Also I can't stop learning new things; the more, the better.") }}
                    </p>
                    <p>
                        {{ __("Want to see a downloadable curriculum? Check the versions") }}
                        <a
                            href="{{ asset('assets/files/cv-en.pdf') }}"
                            title="English CV"
                            class="l ac"
                            target="_blank"
                        >{{ __("English") }}</a>
                        {{ __("or") }}
                        <a
                            href="{{ asset('assets/files/cv-es.pdf') }}"
                            title="English CV"
                            class="l ac"
                            target="_blank"
                        >{{ __("Spanish") }}</a>.
                    </p>
                </div>
                <div class="flex jc alc fdc project-image">
                    <img src="{{ asset('assets/img/photo.jpeg') }}" class="photo-profile" alt="Jesús Ordosgoitty" />
                </div>
            </div>
        </div>
    </div>
</section>
<section class="flex container container--primary">
    <div class="row">
        <h2 class="container--title"><span class="dpc s">#</span> {{ __("Experience") }}</h2>
    </div>
    <div class="row">
        <div class="row">
            <h3 class="container--subtitle"><a href="https://jodaz.xyz" title="Alcaldía de Bermúdez Website" class="l">{{ __('Freelance Software Developer') }}</a><small class="i"> — {{ __('Dec') }}. 2020, {{ __('today') }}</small></h3>
            <h3 class="container--subtitle"><a href="https://somoscarupano.com.ve" title="Alcaldía de Bermúdez Website" class="l">Alcaldía de Bermudez</a><small class="i"> — Sept. 2019, {{ __('today') }}</small></h3>
            <p>{{ __("Head of Web Development & Digital Marketing") }} <small class="i"> — Nov. 2020</small></p>
            <p>{{ __('Software Developer & Technical Support') }}<small class="i"> — Sept. 2019</small></p>
        </div>
    </div>
    <div class="row">
        <h2 class="container--title"><span class="dpc s">#</span> {{ __("Uses") }}</h2>
        <div class="row">
            <h3>{{ __("Systems, Languages and Frammeworks") }}</h3>
            <ul>
                <li>
                    <a href="https://ubuntu.com/" class="l l--light">Ubuntu</a>
                    {{ __("and flavors are my preferred OS systems.") }}
                </li>
                <li>{{ __("Generally I deploy my apps with") }}
                    <a href="https://pm2.keymetrics.io/" class="l l--light">PM2</a>
                    {{ __("and") }}
                    <a href="https://httpd.apache.org/" class="l l--light">Apache2</a>
                    web server.
                </li>
                <li><a href="https://www.typescriptlang.org/" class="l l--light">Typescript</a>
                    {{ __("and") }}
                    <a href="https://www.php.net/" class="l l--light">PHP</a>
                    {{ __("are currently my preferred programming languages for working.") }}
                </li>
                <li>{{ __("I implement") }} <a href="https://www.python.org/" class="l l--light">Python</a>,
                <a href="https://en.wikipedia.org/wiki/Bash_(Unix_shell)" class="l l--light">Bash</a> {{ __("and") }}
                <a href="https://developer.mozilla.org/en-US/docs/Learn/JavaScript/First_steps/What_is_JavaScript" class="l l--light">Javascript</a>
                    {{ __("for task automation, utilities and migration tools.") }}
                </li>
                <li>{{ __("As backend frammeworks") }}, <a href="https://laravel.com/" class="l l--light">Laravel</a> {{ __("and") }}
                    <a href="https://expressjs.com/" class="l l--light">Express</a> /
                    <a href="https://nodejs.org/" class="l l--light">Node.js</a> are really useful.</li>
                <li>
                    <a href="https://www.postgresql.org/" class="l l--light">PostgreSQL</a>,
                    <a href="https://www.mongodb.com" class="l l--light">MongoDB</a> {{ __("and") }}
                    <a href="https://www.mysql.com/" class="l l--light">MySQL</a>
                    {{ __("are my prefered database management systems.") }}
                </li>
                <li>{{ __("I found") }}
                    <a href="http://knexjs.org/" class="l l--light">Knex.js</a>
                    {{ __("is a very useful library for upgrading or changing a database.") }}
                </li>
                <li>{{ __("Finally") }},
                    <a href="https://reactjs.org/" class="l l--light">React.js</a>
                    {{ __("and") }} <a href="https://marmelab.com/react-admin/" class="l l--light">React Admin</a>
                    {{ __("are my goto libraries for building user interfaces.") }}
                </li>
                <li>{{ __("Should I mention I like") }}
                    <a href="https://redux.js.org/" class="l l--light">Redux</a> / <a href="https://redux-saga.js.org/" class="l l--light">ReduxSaga</a>,
                    <a href="https://final-form.org/react" class="l l--light">React Final Form</a>, <a href="https://reacttraining.com/react-router/" class="l l--light">React Router</a> {{ __("and") }} <a href="https://material-ui.com/" class="l l--light">MaterialUI</a> ?.</li>
            </ul>
        </div>
        <div class="row">
            <h3>Editor</h3>
            <ul>
                <li>{{ __("I usually switch between Vim and VS Code for coding.") }}</li>
            </ul>
        </div>
        <div class="row">
            <h3>{{ __("Desktop Apps") }}</h3>
            <ul>
                <li>Main browser: <a href="https://brave.com" class="l l--light">Brave</a>- Best chrome without Google.</li>
                <li>Secondary browser: <a href="https://www.chromium.org" class="l l--light">Chromium</a> - Second best chrome without Google.</li>
                <li>Default search engine: Google. </li>
            </ul>
        </div>
    </div>
    <div class="row">

    </div>
</section>
<section class="flex container container--light">
    <div class="row">
        <h2 class="container--title"><span class="ac s">#</span> {{ __("Education") }}</h2>
        <div class="row">
            <h3 class="container--subtitle">Universidad de Oriente, ext. Carupano<small class="i"> — Sept. 2016, {{ __('today') }}?</small></h3>
            <small class="i">* Maybe I dropped out of college, maybe I didn't. I don't know, college is a hard issue in Venezuela, and the Covid-19 didn't help neither.</small>
            <h3 class="container--subtitle">freeCodeCamp, {{ __('Full Stack Web Development') }}<small class="i"> — {{ __('Jan') }}. 2017, {{ __('Dec') }}. 2018</small></h3>
        </div>
    </div>
    <div class="row">
        <h2 class="container--title"><span class="ac s">#</span> {{ __("Interests") }}</h2>
    </div>
    <div class="row">

    </div>
</section>
@endsection
