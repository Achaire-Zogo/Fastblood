<?php

namespace App\Http\Controllers\director\Association;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\BloodBank;
use App\Models\Groupe;
class CreerAssociationController extends Controller
{
    public function index()
    {  
        $banks =BloodBank::where("enabled","1")->get();
        return view('director.association.creerAssociation')->with('bank',$banks);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Groupe::create([
           'name' => $request->input('name'),
            'description' => $request->input('description'),
            'enabled' => 1
        ]);
        return redirect('/dashboard/listeAssociation/director');
    }
}
