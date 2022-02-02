<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActualiterController extends Controller
{
    //

    public function actualite()
    {
        return view('formations.actualite');
    }
}
