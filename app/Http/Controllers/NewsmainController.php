<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use App\Http\Models\Newsmain_Model;
use Illuminate\View\View;

class NewsmainController extends Controller
{
    protected $newsmain;
    public function __construct(Newsmain_Model $newsmain)
    {
        $this->newsmain = $newsmain;
    }

    public function index()
    {

        $articlesList = $this->newsmain->getnewsmain();
        $articlesList = isset($articlesList[0]) ? $articlesList : null;
        return view('fronted.news-main', compact('articlesList'));
    }
    /**
     * Show the profile for the given user.
     * @param  int  $id
     * @return Application|Factory|View
     */
    public function show($id)
    {
        $articlesShow = $this->newsmain->getNewsById($id);
        return view('frontend.news-show',compact('articlesShow'));
    }
}
