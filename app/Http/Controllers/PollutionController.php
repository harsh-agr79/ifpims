<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class PollutionController extends Controller {
    public function pollution( Request $request ) {
        $result[ 'data' ] = DB::table( 'pollution' )->orderBy('id', 'desc')->get();
        return view( 'pollution' , $result);
    }

    public function waterdata() {
        $result[ 'data' ] = DB::table( 'water_data' )->paginate( 50000 );
        return view( 'watersample', $result );
    }

    public function airdata() {
        $result[ 'data' ] = DB::table( 'air_data' )->paginate( 50000 );
        return view( 'airsample', $result );
    }

    public function addData(Request $request){
        $file = $request->file('image');
            
        // Generate unique filename
        $image_name = time() . '_' . pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $ext = $file->getClientOriginalExtension();
        $image_fullname = $image_name . '.' . $ext;
        $upload_path = 'pollution/';

        // Move the uploaded file to the specified upload path
        $file->move(public_path($upload_path), $image_fullname);
        DB::table('pollution')->insert([
            'area'=>$request->post('area'),
            'longitude'=>$request->post('longitude'),
            'lattitude'=>$request->post('lattitude'),
            'image'=>$upload_path . $image_fullname,
            'env_reading'=>$request->post('env_reading'),
            'analysis'=>$request->post('analysis')
        ]);

        return response()->json(200);
    }
}
