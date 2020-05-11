<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\Newsmain_Model;

class NewsmainController extends Controller
{
    protected $newsmain;
    public function __construct(Newsmain_Model $newsmain)
    {
        $this->newsmain = $newsmain;
    }
    public function index(){
        $newsList = $this->newsmain->getNewsList();
        isset($newsList[0])?$newsList:null;
        return view('frontend.news-main',compact('newsList'));
    }
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function show($id)
    {
        $newsShow = $this->newsmain->getNewsById($id);
        return view('frontend.news-show',compact('newsShow'));
    }
}
