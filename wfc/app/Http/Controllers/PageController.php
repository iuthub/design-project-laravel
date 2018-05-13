<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index(){
        $title = 'Football news';
//        return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }
    public function about(){
        return view('pages.about');
    }
}
