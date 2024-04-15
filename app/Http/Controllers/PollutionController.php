<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class PollutionController extends Controller {
    public function pollution( Request $request ) {
        return view( 'pollution' );
    }

    public function waterdata() {
   $result['data'] = DB::table('water_data')->paginate(50000);
   return view("watersample", $result);
    }
    public function airdata() {
        $result['data'] = DB::table('water_data')->paginate(50000);
        return view("watersample", $result);
         }
}
