@extends('layout.template')

@section('content')
<section class="flex container container--primary">
    <div class="row t--left">
        <h2 class="container--title"><span class="dpc s">#</span> {{ __('Projects') }}</h2>
        <p>{{ __("As an employee I'm currently working with local organizations of the region building the software infrastructure of the future, but I also do freelance and remote work for national companies and clients overseas.") }}</p>
    </div>
    <div class="row">
        <div class="row project">
            <div class="project-title">
                <h3 class="container--title">SAUCO</h3>
                <p class="project-title--brief i">
                    {{ __('Single Taxpayer Service System') }}
                </p>
            </div>
            <div class="flex fdc project-content">
                <div class="flex jc alc fdc project-image">
                    <img src="{{ asset('assets/img/sauco.png') }}" alt="Sauco" />
                </div>
                <div class="project-description">
                    <p>
                        {{ __('It is a financial and catastral platform for the Venezuelan tax administration system that maintains control of taxpayers, companies, vehicles and real state as well as their financial statement.') }}
                    </p>
                    <p>
                        {{ __('The pilot project is deployed in the Bermudez Municipality') }}.
                    </p>
                    <small class="s i"> (*) {{ __('As of June, 2021 I am actively working on the development of the cadastral system, the financial reports funcionality and migrating from the old financial system') }}.</small>
                    <p>
                        <span class="s">{{ __('Technologies') }}</span>: React.js (Typescript), Laravel, PostgreSQL.
                    </p>
                </div>
            </div>
        </div>
        <hr class="separator separator--dark"></hr>
    </div>
    <div class="row">
        <p>{{ __('Would like to see more? See my') }} <a href="https://github.com/jodaz" class="l l--light">{{ __('Github profile') }}</a>.</p>
    </div>
</section>
<section class="flex container container--dark">
    <div class="row tc">
        <h2 class="q">{{ __('In every new venture, time must be our unit of account.') }}</h2>
    </div>
</section>
<section class="flex container container--light">
    <div class="row t--left">
        <h2 class="container--title"><span class="ac s">#</span> {{ __('Packages and utilities') }}</h2>
        <p>{{ __('Overtime, I had to build some stuff to customize frameworks or just make my job a lot more easier and quicker. Here is some of my best repositories') }}:</p>
    </div>
    <div class="row">
        <ul>
            <li>
                <a
                    href="https://github.com/jodaz/ra-laravel-client"
                    class="link l--light s"
                >ra-laravel-client</a>
             {{ __('A laravel focused JSON-API client for the React Admin Frammework') }}.
            </li>
            <li>
                <a
                    href="https://github.com/jodaz/scripts"
                    class="link l--light s"
                >scripts</a>
             {{ __('Collection of scripts and utilities. Interesting stuff is right here!') }}.
            </li>
        </ul>
    </div>
</section>
@endsection
