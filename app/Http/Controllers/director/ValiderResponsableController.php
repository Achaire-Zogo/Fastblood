<?php

namespace App\Http\Controllers\director;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class ValiderResponsableController extends Controller
{
    public function index()
    {

        $users = User::where("enabled","1")->where("role_id","3")->get();
        return view('director.validerResponsable')->with('users',$users);
    }
}
