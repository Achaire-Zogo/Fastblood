<?php

namespace App\Http\Controllers\director;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class ListeGroupeSanguinController extends Controller
{
    public function index()
    {        
        $banks =DB::table('blood_banks')->where("enabled","1")->get();
      //  dd($banks);
        return view('director.groupeSanguin.listegroupeAB')->with('bank',$banks);
    
    }
    public function groupeA()
    {        
        $banks =DB::table('blood_banks')->where("enabled","1")->get();
      //  dd($banks);
        return view('director.groupeSanguin.listegroupeA')->with('bank',$banks);
    
    }
    public function groupeB()
    {        
        $banks =DB::table('blood_banks')->where("enabled","1")->get();
      //  dd($banks);
        return view('director.groupeSanguin.listegroupeB')->with('bank',$banks);
    
    }
    public function groupeO()
    {        
        $banks =DB::table('blood_banks')->where("enabled","1")->get();
      //  dd($banks);
        return view('director.groupeSanguin.listegroupeO')->with('bank',$banks);
    
    }
}
