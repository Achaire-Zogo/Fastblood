<?php

namespace App\Http\Controllers\directeur;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BloodBank;
use App\Models\User;
use App\Models\Region;
use App\Models\BloodBankManager;
use Session;

class BloodBankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $mailsRespo=array();
        $mailsGest=array();
      //  $banks=Region::where('enabled',1)->get();
         $banks=BloodBank::where('enabled',1)->get();
         $i=0;
         foreach ($banks as $b) {
            if ($b['user_id']!=null) {
                 $user=User::where('id',$b['user_id'])->first();
                 $mailsRespo[$i]=$user['email'];
            }
            else{
                 $mailsRespo[$i]='non defini' ;
            }
           
            $gest=BloodBankManager::where('blood_bank_id',$b['id'])->first();
            if ($gest!=null) {
                  $gestname=User::where('id',$gest['user_id'])->first();
             $mailsGest[$i]=$gestname['email'];
            }
            else{
                 $mailsGest[$i]='non defini' ;
            }

            
             $i++;}
        return view('director/listBank', ['banks'=>$banks, 'respo'=>$mailsRespo, 'gest'=>$mailsGest]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('director/addBank');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view('director/detailBank'); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
       return view('director/editBank'); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $req=BloodBank::where('id',request('id'))->update([ 'enabled'=>0 ]);
        return redirect("directeur/dashboard");
    }
}
