@extends('layout.template')

@section('content')
<section class="flex container container--light">
    <div class="flex row jc intro--container">
        <div class="flex intro--icon">
            <img src="{{ asset('assets/icons/code.svg') }}" class="social-icon" alt="code" />
        </div>
        <div class="intro--description">
            <p>{{ __('I am a software developer passionate for building pretty websites and web applications at vanguard.') }}</p>
        </div>
    </div>
    <hr class="separator separator--light"></hr>
    <div class="row">
        <div class="flex row jc intro--container">
            <div class="flex intro--icon">
                <img src="{{ asset('assets/icons/brain.svg') }}" class="social-icon" alt="brain" />
            </div>
            <div class="intro--description">
                <p>{{ __('I like to design my products from the grown up, from the data model to the user experience and interface, taking care of each detail.') }}</p>
            </div>
        </div>
    </div>
    <hr class="separator separator--light"></hr>
    <div class="row">
        <div class="flex row jc intro--container">
            <div class="flex intro--icon">
                <img src="{{ asset('assets/icons/laravel.svg') }}" class="social-icon" alt="laravel" />
            </div>
            <div class="intro--description">
                <p>{{ __('I specialize in the latest technology trends, implementing Laravel and Nodejs in the backend.') }}</p>
            </div>
        </div>
    </div>
    <hr class="separator separator--light"></hr>
    <div class="row">
        <div class="flex row jc intro--container">
            <div class="flex intro--icon">
                <img src="{{ asset('assets/icons/react.svg') }}" class="social-icon" alt="react" />
            </div>
            <div class="intro--description">
                <p>{{ __('As with the frontend, I use React.js or simply vanilla + CSS for developing interfaces.') }}</p>
            </div>
        </div>
    </div>
    <hr class="separator separator--light"></hr>
    <div class="flex row jc">
        <p>{{ __('Be sure to have a closer look at my') }} <a href="{{ route('projects') }}" title="Projects" class="l ac">{{ __('work') }}</a> {{ __('or get to know more about my') }} <a href="{{ route('about') }}" class="l ac" title="About me">{{ __('interests') }}</a>.</p>
    </div>
</section>
<section class="flex container container--primary jc" id="writings">
    <div class="row hide" id="article-title">
        <h2><span class="dpc s">#</span>{{ __(' Latest articles') }}</h2>
        <p>{{ __('Once in a while, I write blog articles. Here are the most recent onces:') }}</p>
    </div>
    <div class="lds-ring show" id="writings-loader"><div></div><div></div><div></div><div></div></div>
    <div class="flex hide" id="articles"></div>
    <div class="flex row jc hide" id="read-more">
        <a class="button button--dark" href="https://blog.jodaz.xyz">
            {{ __('Read more') }}
        </a>
    </div>
</section>
@endsection
