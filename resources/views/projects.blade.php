@extends('layout.template')

@section('content')
<section class="flex container container--light">
    <div class="flex row justify--center">
        <p class="container-subtitle">As an employee I'm currently working with local organizations of the region building the software infrastructure of the future, but I also do freelance and remote work for national companies and clients overseas.</p>
    </div>
</section>
<section class="flex container container--primary">
    <h2 class="container-title">Current and past partnerships</h2>
    <div class="flex row justify--center">
        <a href="https://somoscarupano.com.ve" target="_blank" title="Alcaldia de Bermudez">
            <img
                src="{{ asset('assets/img/bermudez_logo.webp') }}"
                alt="bermudez-logo"
                height="150px"
                width="170px"
            />
        </a>
    </div>
</section>
@endsection
