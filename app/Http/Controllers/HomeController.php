<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

class HomeController extends Controller
{
    protected $translations = [
        'en' => [
            'description' => 'Full-Stack Software Developer based in Venezuela | React.js, Laravel, Node.js, Express.js, MongoDB, PostgreSQL and more.',
            'brief' => "Software developer, life-long learner",
            'title' => "Jesus Ordosgoitty · Software Developer"
        ],
        'es' => [
            'description' => 'Desarrollador Full-Stack de Venezuela | React.js, Laravel, Node.js, Express.js, MongoDB, PostgreSQL y más',
            "title" => "Jesus Ordosgoitty · Desarrollador de Software",
            'brief' => "Desarrollador de software"
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

        return view('home', [
            'landingPhoto' => 'assets/img/home.jpeg',
            'intro' => "Jesus Ordosgoitty",
            'brief' => $this->translations[$locale]['brief']
        ]);
    }
}
