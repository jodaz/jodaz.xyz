<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

class AboutController extends Controller
{
    protected $translations = [
        'es' => [
            'description' => '¡Hola! soy Jesús Ordosgoitty, un desarrollador full-stack de Venezuela.',
            'landingTitle' => 'Sobre mi',
            'landingQuote' => "\"Cambiar o perecer, no hay otra opción.\"",
            'title' => "Sobre mi · Jesus Ordosgoitty",
        ],
        'en' => [
            'description' => 'Hi! I am Jesus Ordosgoitty, a full-stack software developer from Venezuela',
            "title" => "About · Jesus Ordosgoitty",
            'landingTitle' => 'About me',
            'landingQuote' => "\"To change or to perish, there is no other option.\""
        ]
    ];

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $locale = App::getLocale() ? App::getLocale() : 'en';
        SEOMeta::setTitle($this->translations[$locale]['title']);
        SEOMeta::setDescription($this->translations[$locale]['description']);
        OpenGraph::setDescription($this->translations[$locale]['description']);
        OpenGraph::setTitle($this->translations[$locale]['title']);
        OpenGraph::setTitle($this->translations[$locale]['title']);

        return view('about', [
            'landingPhoto' => 'assets/img/home.jpeg',
            'intro' => $this->translations[$locale]['landingTitle'],
            'brief' => $this->translations[$locale]['landingQuote']
        ]);
    }
}
