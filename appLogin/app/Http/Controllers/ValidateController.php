<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidateRequest;

class ValidateController extends Controller
{
    
     public function create()
        {
            return view('index');
        }
    
     public function store(ValidateRequest $request) {
         $validatedData = $request->validated();
         $nombre=$request->input('login');
         if($nombre=='juan'){
             return response()->view('vistas.login');
         }else{
             return redirect()->action('ValidateController@create',$nombre);
         }
       
        
        
        
    }
}
