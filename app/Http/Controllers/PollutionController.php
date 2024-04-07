<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PollutionController extends Controller
{
    public function pollution(Request $request){
        return view('pollution');
    }
}
