<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidateRequest;

class MiController extends Controller
{
     function forget(){
        return view('vistas.forget');
    }
    
    function login(ValidateRequest $request){
        return view('vistas.login');
    }
}
