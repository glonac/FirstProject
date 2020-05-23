<?php

namespace App\Http\Controllers;
use App\Http\Models\Main_Model;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function __construct(Main_Model $mainModel)
    {
        $this->main = $mainModel;
    }
    public function index(){
        $data = $this->main->getmain();
        return view('Fronted.main',compact('data'));
    }
}
