<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProfileResource;
use App\Profile;
use Illuminate\Http\Request;

class ApiSystemController extends Controller
{

    public function index()
    {
        $items = Profile::all();
        return response()->json(['data' => ProfileResource::collection($items)], 200);
    }

    public function store(Request $request)
    {
        $item = Profile::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth,
            'height_in_centimeter' => $request->height_in_centimeter,
            'weight_in_pounds' => $request->weight_in_pounds,
            'address' => $request->address,
            'contact_no' => $request->contact_no,
            'email' => $request->email
        ]);
        if ($item) {
            return response()->json(['data' => "Added"], 200);
        } else {
            return response()->json(['data' => "Error Occured!"], 500);
        }
        
    }
}
