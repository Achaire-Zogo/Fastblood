<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use App\Models\BloodBank;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function signuppage () {
        $role=Role::all();
        $bb=BloodBank::all();
               return view('auth/register',['role'=>$role, 'bank'=>$bb]);
}
public function signup () {
    request()->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
        'telephone'=> ['required'],
        'role_id'=>['required', 'int']
],['password.min'=>'pour plus de securite veuillez saisir un mot de passe d\'au moins 8 caracteres']);
// dd($path);
$membre= User::create(['email'=>request('email'), 'name'=>request('name'),  'role_id'=>request('role_id'), 'telephone'=>request('telephone'), 'password'=>bcrypt(request('password'))]);
if (request('bank_id')!=null) {
   // $bank= BloodBank::create(['user_id'=>$membre->id, 'name'=>'name',  'role_id'=>request('role_id'), 'telephone'=>request('telephone'), 'password'=>bcrypt(request('password'))]);
    $bank=(BloodBank::where('id',request('bank_id')))->update(['user_id'=>$membre->id]);
}
if (request('name_bank')!=null && request('address')!=null) {
     $bank= BloodBank::create(['user_id'=>$membre->id, 'name'=>request('name_bank'),  'address'=>request('address')]);
      }
return view('auth/login');
}
}
