<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\http\Request;

class UserController extends Controller {

    public function postSignUP(Request $request){

        $first_name = $request["first_name"];
        $email = $request["email"];
        $password = bcrypt($request["password"]);

        $user = new User();
        $user->first_name = $first_name;
        $user->email = $email;
        $user->password = $password;

        $user->save();

        return redirect()->back();
    }

    public function postSignIn(){



    }
}