<?php

namespace App\Http\Controllers;

use App\Match;
use Illuminate\Http\Request;

class MatchController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $model = Match::orderBy('id', 'asc')->paginate(10);
        return view('match.index')->with('model', $model);
    }

    public function table()
    {
        //
        $model = Match::orderBy('match_date', 'asc')->paginate(10);
        return view('match.table')->with('model', $model);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if(Auth::user()->role_id == 3) {
            return view('permission');
        }
        return view('match.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'first_team' => 'required',
            'second_team' => 'required',
            'first_score' => 'required',
            'second_score' => 'required',
            'match_date' => 'required',
        ]);

        $model = new Match();
        $model->first_team = $request->input('first_team');
        $model->second_team = $request->input('second_team');
        $model->first_score = $request->input('first_score');
        $model->second_score = $request->input('second_score');
        $model->match_date = $request->input('match_date');
        $model->save();


        return redirect('/match')->with('success', 'Match is Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $model = Match::find($id);
        return view('match.show')->with('model', $model);
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
        $model = Match::find($id);

        return view('match.edit')->with('model', $model);
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
        //
        $this->validate($request, [
            'first_team' => 'required',
            'second_team' => 'required',
            'first_score' => 'required',
            'second_score' => 'required',
            'match_date' => 'required',
        ]);

        $model = Match::find($id);
        $model->first_team = $request->input('first_team');
        $model->second_team = $request->input('second_team');
        $model->first_score = $request->input('first_score');
        $model->second_score = $request->input('second_score');
        $model->match_date = $request->input('match_date');
        $model->save();

        return redirect('/match')->with('success', 'Match is Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        if(Auth::user()->role_id == 3) {
            return view('permission');
        }
        $model = Match::find($id);
        $model->delete();
        return redirect('/match')->with('success', 'Match is Deleted');
    }
}
