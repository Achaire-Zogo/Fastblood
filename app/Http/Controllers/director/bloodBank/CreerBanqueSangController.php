<?php

namespace App\Http\Controllers\director\bloodBank;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use  App\Models\BloodBank;
class CreerBanqueSangController extends Controller
{
    public function index()
    {   $users = User::where("enabled","1")->where('role_id','4')->get();   

        return view('director.bloodBank.creerBanqueSang')->with('users',$users);
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        BloodBank::create([
            'user_id' => $request->input('user_id'),
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'enabled' => 1
        ]);
        return redirect('/dashboard/listeBanqueSang/director');
    
    }

}
