<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

class ProjectController extends Controller
{
    protected $translations = [
        'es' => [
            'description' => 'Trabajo con organizaciones de la región construyendo la infraestructura de software del futuro, pero también realizo trabajo autónomo y remoto para empresas nacionales y clientes en el extranjero.',
            "title" => "Proyectos · Jesús Ordosgoitty",
            'landingTitle' => 'Proyectos',
            'landingQuote' => "\"Coraje, creatividad y comprensión son requerimientos para cambiar el mundo.\""
        ],
        'en' => [
            'description' => 'I am collaborating with local organizations building the software infrastructure of the future, but I also do freelance and remote work for national companies and clients overseas.',
            "title" => "Projects · Jesus Ordosgoitty",
            'landingTitle' => 'Projects',
            'landingQuote' => "\"Courage, creativity and understanding are requirements to change the world.\""
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
        $locale = App::getLocale();
        SEOMeta::setTitle($this->translations[$locale]['title']);
        SEOMeta::setDescription($this->translations[$locale]['description']);
        OpenGraph::setDescription($this->translations[$locale]['description']);
        OpenGraph::setTitle($this->translations[$locale]['title']);

        return view('projects', [
            'landingPhoto' => 'assets/img/projects2.jpg',
            'intro' => $this->translations[$locale]['landingTitle'],
            'brief' => $this->translations[$locale]['landingQuote']
        ]);
    }
}
