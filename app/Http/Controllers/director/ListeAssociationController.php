<?php

namespace App\Http\Controllers\director;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Groupe;
class ListeAssociationController extends Controller
{
    public function index()
    {        
        $groupes =Groupe::where("enabled","1")->get();
        return view('director.listeAssociation')->with('groupe',$groupes);
    }
    public function compteur()
    {        
        $groupes = DB::table('blood_bank')->get()->count();
        dd($groupes);
        return view('director.index', compact('groupes'));
    }
}
