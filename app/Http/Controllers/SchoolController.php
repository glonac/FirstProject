<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SchoolRequest;

class SchoolController extends Controller
{
    public function submit(SchoolRequest $req) {
    }
    public function sendFormData(Request $request){
        return response()->json(['data'=>$request->all()]);
    }
}
