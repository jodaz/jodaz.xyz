<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

class AboutController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        SEOMeta::setTitle('About · Jesus Ordosgoitty');
        SEOMeta::setDescription("Hi!, my name is Jesus Ordosgoitty, a 98 born guy full-stack software developer from Venezuela");

        OpenGraph::setDescription("Hi!, my name is Jesus Ordosgoitty, a 98 born guy full-stack software developer from Venezuela");
        OpenGraph::setTitle('About');
        OpenGraph::setSiteName('About · Jesus Ordosgoitty');

        return view('about', [
            'intro' => 'About · Jesus Ordosgoitty'
        ]);
    }
}
