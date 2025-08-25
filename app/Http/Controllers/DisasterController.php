<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disaster;

class DisasterController extends Controller
{
    public function addData(Request $request)
    {
        $data = $request->validate([
            'area' => 'required|string',
            'longitude' => 'required|string',
            'lattitude' => 'required|string',
            'image' => 'required|image',
            'env_reading' => 'required|string',
            'analysis' => 'required|string',
        ]);

        // Handle image upload
       if ($request->hasFile('image')) {
            $filename = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $data['image'] = $request->file('image')->storeAs('disaster', $filename, 'public');
        }

        Disaster::create($data);

        return response()->json(200);
    }
}
