<?php

namespace App\Http\Controllers\gestionnaire;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GestionnaireController extends Controller
{
    public function index()
    {        
        return view('gestionnaire.index');
    }
}
