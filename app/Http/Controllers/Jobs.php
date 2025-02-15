<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Jobs extends Controller
{
    
    public function table(){
        return view('visualisation.table');
    }
  
   
    public function update(){
        return view('home.update');
    }
}
