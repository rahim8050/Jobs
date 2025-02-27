<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function index()
    {
        return view('users.jobs', [
            'jobs' => Work::all()
        ]);
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
    public function show(Work $job)
    {
        return view('work.show', [
            'job' => $job
        ]);
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
        return redirect()->route('users.job');
    }
    public function destroy($id)
    {
        return redirect()->route('work.index');
    }
  
  
}
