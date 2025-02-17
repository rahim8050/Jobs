<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function table(){
        return view('visualisation.table');
    }
  
   public function jobs (){
    $jobs = [
        'name'=> 'oceanic',
        'description'=>'this is the best orum to study php in total awareness',
        'status'=> 'accepted',
    ];
    return view('users.jobs', compact('jobs'));
   }
    public function update(){
        return view('home.update');
    }
}
