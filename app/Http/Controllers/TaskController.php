<?php

namespace App\Http\Controllers;

use App\Models\Organisators;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
      $tasks = response()->json(Organisators::all());
      return $tasks;   
    }
    public function show($id)
    {
      $tasks = response()->json(Organisators::find($id));
      return $tasks;   
    }
    public function destroy($id)
    {
      Organisators::find($id)->delete();
    }


    public function newView()
    {
      $organisators =Organisators::all();   
      return view('tash.new', ['organisators' => $organisators]);
    }
    
}
