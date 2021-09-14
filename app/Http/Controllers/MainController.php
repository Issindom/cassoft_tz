<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Users_cassoft;
use Illuminate\Support\Facades\Hash;


class MainController extends Controller
{
    public function registration_check(Request $request){

        $valid = $request->validate([
            'email' => 'required|min:7|max:40',
            'password' => 'required|min:8|max:20'
        ]);

        //проверка почты
        
        

        // шифрование пароля
        $pass = Hash::make($request->input('password'));
        
        
        $user = new Users_cassoft();
        $user->email = $request->input('email');
        $user->mailing =(boolean) $request->input('mailing');
        $user->password = $pass;
        $user->save();

        return view('new_user');
    }


}

