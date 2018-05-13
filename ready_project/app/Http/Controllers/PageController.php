<?php

namespace App\Http\Controllers;



use App\Post;
use App\Match;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Collection;

class PageController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $match = Match::orderBy('match_date', 'desc')->paginate(10);
        $model = Post::orderBy('created_at', 'desc')->paginate(8);
        $last = Post::orderBy('created_at', 'desc')->paginate(1);
        $random = Post::inRandomOrder()->paginate(1);
//        return view('pages.index', compact('title'));
        return view('pages.index', ['model' => $model, 'last' => $last, 'random' => $random, 'match' => $match]);
    }

    public function about()
    {
        return view('pages.about');
    }
}
