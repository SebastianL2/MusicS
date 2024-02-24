<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MusicController extends Controller
{
 
    public function index()
    {
        //
        $musics = Music::all();
        return Inertia::render('Musics/Index',['musics'=>$musics]);

    }

    public function create()
    {
        //
        return Inertia:: render( ('Musics/create'));
    }

  
    public function store(Request $request)
    {
        //
        $request ->validate(['name'=>'required|max:100']);
        $music = new Music ($request->input());
        $music -> save();
        return redirect('musics');

    }

    public function show(Music $music)
    {
        //

    }

 
    public function edit(Music $music)
    {
        //
        return Inertia::render('Musics/Edit',['music' => $music]);
    }

 
    public function update(Request $request, Music $music)
    {
        //
        $request->validate(['name'=>'required|max:100']);
        $music -> update($request->all());
        return redirect('musics');
    }

    public function destroy(Music $music)
    {
        //
        $music ->delete();
        return redirect('musics');

    }
}
