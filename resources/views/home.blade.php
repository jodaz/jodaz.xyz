@extends('layout.template')

@section('content')
<section class="flex container container--light">
    <div class="row">
        <p>I am a software developer passionate for building pretty websites and web applications at vanguard</p>
        <p>I like to design my products from the grown up, from the data model to the user experience and interface.</p>
        <p>I specialize in the latest technology trends, using backend frammeworks as Laravel and Nodejs and frontend libraries as React.js</p>
        <p>Be sure to have a closer look at my <a href="{{ route('projects') }}" title="Projects" class="l ac">work</a> or get to know more about my <a href="{{ route('about') }}" class="l ac" title="About me">interests</a>.</p>
    </div>
</section>
<section class="flex container container--primary jc" id="writings">
    <div class="row hide" id="article-title">
        <h2><span class="dpc s">#</span> Latest articles</h2>
        <p>Once in a while, I write blog articles. Here are the most recent onces:</p>
    </div>
    <div class="lds-ring show" id="writings-loader"><div></div><div></div><div></div><div></div></div>
    <div class="flex hide" id="articles"></div>
    <div class="flex row jc hide" id="read-more">
        <a class="button button--dark" href="https://blog.jodaz.xyz">
            Read more
        </a>
    </div>
</section>
@endsection
