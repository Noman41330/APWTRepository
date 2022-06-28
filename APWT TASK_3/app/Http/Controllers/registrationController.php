<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use App\Models\account;
use LDAP\Result;

class registrationController extends Controller
{
    function submit(Request $request)
    {
        $rules = [
            "name"=>"required|max:20|min:5",
                //"email"=>"required|email|unique:users,email",
                "email"=>"required|email|email",
                'password' =>[
                    'required',
                    Password::min(8)->letters()->numbers()->mixedCase()->symbols()
                ],
                "conf_password"=>"same:password"
        ];
        
        $messages=[
            "required"=>"Please fillup this field",
            "name.max"=>"Name should not exceed 10 characters",
            'conf_password.same'=> " Does not match Password & confirm password",
        ];

        $this->validate($request ,$rules,$messages);
        
        $user = new account();
        $user->name = $request->name;
        $user->email =$request->email;
        $user->password =$request->password;
        $user->save();

        
        return redirect('/');

    }
}
