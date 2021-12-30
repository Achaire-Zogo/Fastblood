<?php

namespace App\Http\Controllers\director;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Groupe;
class ValiderAssociationController extends Controller
{
    public function index()
    {      
        $groupes =Groupe::where("enabled","0")->get();
        return view('director.validerAssociation')->with('groupe',$groupes);  
        
    }
}
