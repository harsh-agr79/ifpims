<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class DisasterController extends Controller
{
    public function disaster(Request $request){
        $result[ 'data' ] = DB::table( 'disaster' )->get();
        return view('disaster', $result);
    }

    public function addData(Request $request){
        $file = $request->file('image');
            
        // Generate unique filename
        $image_name = time() . '_' . pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $ext = $file->getClientOriginalExtension();
        $image_fullname = $image_name . '.' . $ext;
        $upload_path = 'disaster/';

        // Move the uploaded file to the specified upload path
        $file->move(public_path($upload_path), $image_fullname);
        DB::table('disaster')->insert([
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
