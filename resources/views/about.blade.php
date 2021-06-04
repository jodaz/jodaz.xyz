@extends('layout.template')

@section('content')
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
@endsection
