@extends('layout.template')

@section('content')
<section class="flex container container--primary justify--center" id="writings">
    <div class="row hide" id="article-title">
        <h2 class="container-title">Latest articles</h2>
        <p class="container-subtitle">Once in a while, I write blog articles . Here are the most recent onces:</p>
    </div>
    <div class="lds-ring show" id="writings-loader"><div></div><div></div><div></div><div></div></div>
    <div class="flex container hide" id="articles"></div>
    <div class="flex row justify--center hide" id="read-more">
        <a class="button button--dark" href="https://blog.jodaz.xyz">
            Read more
        </a>
    </div>
</section>
@endsection
