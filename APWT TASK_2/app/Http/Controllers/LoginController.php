<?php

namespace App\Http\Controllers;
use App\Models\account;
use LDAP\Result;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    function loginsubmit(Request $request)
    {
        $rules = [
                "email"=>"required|exists:users,email",
                "password"=>"required|exists:users,password",
        ];
        
        $messages=[
                'email.exists'=>'No account is found using this mail',
                'password.exists'=>'Password incorrect'
        ];

        $this->validate($request ,$rules,$messages);

           $email=$request->email;
           $password=$request->password;
           $result=account::where('email',$email)->where('password',$password)->first();

          if($result){
            if($result->type=='admin'){
                return view('Admin');
            }
            else{
                return view('user');
            }
          }
          else{
            return redirect('/login');
          }
    }

}
