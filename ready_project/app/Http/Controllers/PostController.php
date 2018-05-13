<?php

namespace App\Http\Controllers;


use App\Category;
use App\Post;
use App\Match;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Collection;

class PostController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except'=>['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $model = Post::orderBy('id', 'asc')->paginate(2);
        return view('post.index')->with('model', $model);
    }

    public function display($type)
    {
        //
        $match = Match::orderBy('match_date','desc') -> paginate(10);
        $model = Post::all();
        $model = Post::where('category_id', $type)->orderBy('created_at','desc') -> paginate(10);


         return view('post.display', ['model'=> $model, 'match' =>$match]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->role_id == 3) {
            return view('permission');
        }
        $category_id = null;
        //$categories = Category::all();
        $categories = Category::all();
        return view('post.create',['category_id'=>$category_id, 'categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'content' => 'required',
            'image' => 'image|nullable|max:1999'

        ]);

        if($request->hasFile('image')){
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            //just filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //just file extension
            $ext = $request->file('image')->getClientOriginalExtension();
            //filename to store
            $fileToStore = md5(uniqid($filename)).'_'.time().'.'.$ext;
            $path = $request->file('image')->storeAs('public/post_img', $fileToStore);
        }else{
            $fileToStore = 'noimage.jpg';
        }

        $model = new Post();
        $model->title = $request->input('title');
        $model->description = $request->input('description');
        $model->user_id = auth()->user()->id;
        $model->image = $fileToStore;
        $model->content = $request->input('content');
        $model->category_id = $request->input('category_id');
        //print_r($model->category_id);die();
        $model->save();

        return redirect('/post')->with('success', 'Post is Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = Post::find($id);
        return view('post.show')->with('model', $model);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        if(Auth::user()->role_id == 3) {
            return view('permission');
        }
        $model = Post::find($id);
        if(auth()->user()->id != $model->user_id){
            return redirect('/post')->with('error', 'Unauthorized page');
        }

        return view('post.edit')->with('model', $model);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //        return view('post.update');
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'content' => 'required',
            'image' => 'image|nullable|max:1999'
        ]);

        if($request->hasFile('image')){
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            //just filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //just file extension
            $ext = $request->file('image')->getClientOriginalExtension();
            //filename to store
            $fileToStore = md5(uniqid($filename)).'_'.time().'.'.$ext;
            $path = $request->file('image')->storeAs('public/post_img', $fileToStore);
        }

        $model = Post::find($id);
        $model->title = $request->input('title');
        $model->description = $request->input('description');
        $model->content = $request->input('content');
        if($request->hasFile('image')){
            $model->image = $fileToStore;
        }
        $model->save();

        return redirect('/post')->with('success', 'Post is Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::user()->role_id == 3) {
            return view('permission');
        }
        $model = Post::find($id);
        if(auth()->user()->id != $model->user_id){
            return redirect('/post')->with('error', 'Unauthorized page');
        }

        if($model->image != 'noimage.jpg'){
            Storage::delete('public/post_img/'.$model->image);
        }

        $model->delete();
        return redirect('/post')->with('success', 'Post is Deleted');
    }






}
