<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SchoolRequest;
use App\Http\Models\Services_Model;

class ServicesController extends Controller
{
    public function __construct(Services_Model $serviceModel)
    {
        $this->service = $serviceModel;
    }

    /**
     * Получение записей услуг
     */
    public function index(){
        $data = $this->service->getServices();
        return view('Fronted.Services',compact('data'));
    }
}
