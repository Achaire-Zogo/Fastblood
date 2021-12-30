<?php

namespace App\Http\Controllers\director\responsable;

use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class CreerResponsableController extends Controller
{
    public function index()
    {       
        return view('director.responsable.creerResponsable');
    }
    public function store(Request $request)
    {    
       //s dd($request); 
        User::create([
            'role_id' => 3,
            'name' => $request->input('name'),
            'telephone' => $request->input('phone'),
            'email' => $request->input('email'),
            'enabled' => 1,
            'password' => Hash::make($request->input('password'))
        ]);
        return redirect('/dashboard/listeResponsable/director');
    }
}
