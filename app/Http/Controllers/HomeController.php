<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Artesaos\SEOTools\Facades\SEOMeta;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        SEOMeta::setTitle('Jesus Ordosgoitty · Software Developer');

        return view('home', [
            'landingPhoto' => 'assets/img/home.jpeg',
            'intro' => 'Jesus Ordosgoitty',
            'brief' => 'Software developer, life-long learner.'
        ]);
    }
}
