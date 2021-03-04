<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Stuck;

class StuckController extends Controller
{
    public function index(){

        $stucks = Stuck::latest()->get();
        return view('index', compact('stucks'));
    }

    public function post(Request $request){

        $validator = $request->validate([ 
            'title' => ['required', 'string'], 
            'price' => ['required', 'integer'],
            'caption' => ['required', 'string'],
        ]);

        Stuck::create([
            'title' => $request->title,
            'price' => $request->price,
            'caption' => $request->caption,
        ]);
        return back();
    }
}
