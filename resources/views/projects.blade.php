@extends('layout.template')

@section('content')
<section class="flex container container--primary">
    <div class="row t--left">
        <h2 class="container--title"><span class="dpc s">#</span> Projects</h2>
        <p>As an employee I'm currently working with local organizations of the region building the software infrastructure of the future, but I also do freelance and remote work for national companies and clients overseas.</p>
    </div>
    <div class="row">
        <div class="row project">
            <div class="project-title">
                <h3 class="container--title">SAUCO</h3>
                <small class="project-title--brief i">
                    Sistema de Atención Único al Contribuyente
                </small>
            </div>
            <p>
                The Single Taxpayer Service System (SAUCO, spanish accronym) is a financial and catastral platform for the Venezuelan tax administration system that maintains control of taxpayers, companies, vehicles and real state as well as their financial statement.
            </p>
            <p>
                The pilot project is deployed in the Bermudez Municipality.
            </p>
            <small class="s i"> (*) As of June, 2021 I am actively working on the development of the cadastral system, the financial reports funcionality and migrating from the old financial system.</small>
            <p>
                <span class="s">Technologies</span>: React.js (Typescript), Laravel, PostgreSQL.
            </p>
        </div>
        <hr class="separator separator--dark"></hr>
    </div>
    <div class="row">
        <p>Would like to see more? See my <a href="https://github.com/jodaz" class="l l--light">Github profile</a>.</p>
    </div>
</section>
<section class="flex container container--dark">
    <div class="row tc">
        <h2 class="q">In every new venture, time must be our unit of account.</h2>
    </div>
</section>
<section class="flex container container--light">
    <div class="row t--left">
        <h2 class="container--title"><span class="ac s">#</span> Packages and utilities</h2>
        <p>Overtime, I had to build some stuff to customize frammeworks or just make my job a lot more easier and quickier. Here is some of my best repositories:</p>
    </div>
    <div class="row">
        <ul>
            <li>
                <a
                    href="https://github.com/jodaz/ra-laravel-client"
                    class="link l--light s"
                >ra-Laravel-Client</a>
             A laravel focused JSON-API client for the React Admin Frammework.
            </li>
            <li>
                <a
                    href="https://github.com/jodaz/scripts"
                    class="link l--light s"
                >scripts</a>
             Collection of scripts and utilities. Interesting stuff is right here!.
            </li>
        </ul>
    </div>
</section>
@endsection
