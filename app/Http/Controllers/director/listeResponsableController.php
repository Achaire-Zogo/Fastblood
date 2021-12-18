<?php

namespace App\Http\Controllers\director;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class listeResponsableController extends Controller
{
    public function index()
    {

        $users = User::where("role_id","3")->get();
        return view('director.listeResponsable')->with('users',$users);
    }
}
