<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

class ProjectController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        SEOMeta::setTitle('Projects · Jesus Ordosgoitty');
        SEOMeta::setDescription("I am collaborating with local organizations building the software infrastructure of the future, but I also do freelance and remote work for national companies and clients overseas.");
        OpenGraph::setDescription("I am collaborating with local organizations building the software infrastructure of the future, but I also do freelance and remote work for national companies and clients overseas.");
        OpenGraph::setTitle('Projects · Jesus Ordosgoitty');
        OpenGraph::setSiteName('Projects · Jesus Ordosgoitty');

        return view('projects', [
            'intro' => 'Projects'
        ]);
    }
}
