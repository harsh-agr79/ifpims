<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisasterController extends Controller
{
    public function disaster(Request $request){
        return view('disaster');
    }
}
