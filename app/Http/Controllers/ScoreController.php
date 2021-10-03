<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\Score;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard/score/index', [
            'scores' => Score::all(),
            'clubs' => Club::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $data = $request->validate(
            [
                'gm' => 'required|integer',
                'gk' => 'required|integer'
            ]
        );
        $data['club_id'] = $request->club_id;
        if ($request->gm > $request->gk) {
            $data['menang'] = '1';
            $data['kalah'] = '0';
            $data['seri'] = '0';
        }
        if ($request->gm < $request->gk) {
            $data['menang'] = '0';
            $data['kalah'] = '1';
            $data['seri'] = '0';
        }
        if ($request->gm == $request->gk) {
            $data['menang'] = '0';
            $data['kalah'] = '0';
            $data['seri'] = '1';
        }

        Score::create($data);
        return redirect('/scores')->with('success', 'Score telah ditambahkan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function show(Score $score)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function edit(Score $score)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Score $score)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function destroy(Score $score)
    {
        //
    }
}
