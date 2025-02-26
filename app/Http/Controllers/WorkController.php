<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function index()
    {
        return view('work.index');
    }
    public function create()
    {
        return view('work.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        return redirect()->route('work.index');
    }
    public function show($id)
    {
        return view('work.show');
    }
    public function edit($id)
    {
        return view('work.edit');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        return redirect()->route('work.index');
    }
    public function destroy($id)
    {
        return redirect()->route('work.index');
    }
  
  
}
