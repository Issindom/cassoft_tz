<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users_cassoft;

class MainController extends Controller
{
    public function registration_check(Request $request){

        $valid = $request->validate([
            'email' => 'required|min:7|max:40',
            'password' => 'required|min:8|max:20'
        ]);
        
        $user = new Users_cassoft();
        $user->email = $request->input('email');
        $user->email = $request->input('mailing');
        $user->email = $request->input('password');

        $user->save();

        return view('new_user');
    }


}

