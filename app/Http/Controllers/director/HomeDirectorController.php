<?php

namespace App\Http\Controllers\director;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\BloodBank;

 
class HomeDirectorController extends Controller
{
    public function index()
    {        
              
        $groupes = DB::table('blood_banks')->where('enabled','1')->get()->count();
        $user= DB:: table('users')->where('id','1')->get()->count();
        $responsable= DB:: table('users')->where('id','3')->get()->count();  
        $association= DB:: table('groupes')->get()->count();
        $groupeab=DB::table('blood_banks')->get()->sum('num_ab');
        $groupea=DB::table('blood_banks')->get()->sum('num_a');
        $groupeb=DB::table('blood_banks')->get()->sum('num_b');
        $groupeo=DB::table('blood_banks')->get()->sum('num_o');
        //$all=$ab->countBy();
        return view('director.index', compact('groupes','user','responsable','association','groupeab','groupea','groupeb','groupeo'));
    }
    
}
