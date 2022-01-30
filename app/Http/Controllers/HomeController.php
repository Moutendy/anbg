<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function formationlibre()
    {
        return view('formations.formationlibre');
    }

    public function suivreformationlibre()
    {
        return view('formations.suivreformationlibre');
    }
}
