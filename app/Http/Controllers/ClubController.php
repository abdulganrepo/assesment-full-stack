<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.club.index', [
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
        return view('dashboard/club/create');
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
                'club_name' => 'required',
                'logo' => 'image|file|max:2048',

            ]
        );

        if ($request->file('logo')) {
            $data['logo'] = $request->file('logo')->store('logo');
        }

        Club::create($data);
        return redirect('/clubs')->with('success', 'Club telah ditambahkan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function show(Club $club)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function edit(Club $club)
    {
        //
        return view('dashboard/club/edit', [
            'club' => $club
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Club $club)
    {
        //
        $data = $request->validate(
            [
                'club_name' => 'required',
                'logo' => 'image|file|max:2048',

            ]
        );

        if ($request->file('logo')) {
            if ($request->oldLogo) {
                Storage::delete($request->oldLogo);
            }
            $data['logo'] = $request->file('logo')->store('logo');
        }

        Club::where('id', $club->id)->update($data);
        return redirect('/clubs')->with('success', 'Club telah diupdate !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function destroy(Club $club)
    {
        //
        if ($club->logo) {
            Storage::delete($club->logo);
        }

        Club::destroy($club->id);
        return redirect('/clubs')->with('success', 'Club telah dihapus !');
    }
}
