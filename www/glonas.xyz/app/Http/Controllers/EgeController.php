<?php

namespace App\Http\Controllers;

use App\Http\Models\Ege_Model;
use Illuminate\Http\Request;

class EgeController extends Controller
{
    public function __construct(Ege_Model $EgeModel)
    {
        $this->Ege = $EgeModel;
    }
    public function index(){
        $data = $this->Ege->getEge()->first();
        return view('Fronted.EGE',compact('data'));
    }
}
