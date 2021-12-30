<?php

namespace App\Http\Controllers\director;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\BloodBank;
class validerBanqueSangController extends Controller
{
    public function index()
    {   
        $banks =BloodBank::where("enabled","0")->get();     
        return view('director.validerBanqueSang')->with('bank',$banks);
    }
}
