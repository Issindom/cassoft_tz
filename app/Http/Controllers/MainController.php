<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function registration_check(Request $request){

        $valid = $request->validate([
            'login' => 'required|min:7|max:40',
            'password' => 'required|min:8|max:20'
        ])
    }
}
