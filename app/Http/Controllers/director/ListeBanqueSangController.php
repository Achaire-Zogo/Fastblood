<?php

namespace App\Http\Controllers\director;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\BloodBank;

class ListeBanqueSangController extends Controller
{
    public function index()
    {        
      
    $banks =BloodBank::where("enabled","1")->get();
    return view('director.listeBanqueSang')->with('bank',$banks);

   }
}
