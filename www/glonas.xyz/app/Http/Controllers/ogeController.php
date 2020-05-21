<?php

namespace App\Http\Controllers;

use App\Http\Models\Oge_Model;
use Illuminate\Http\Request;

class ogeController extends Controller
{
    public function __construct(Oge_Model $OgeModel)
    {
        $this->oge = $OgeModel;
    }
    public function index(){
        $data = $this->oge->getoge()->first();
        return view('Fronted.OGE',compact('data'));
    }
}
