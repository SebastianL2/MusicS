<?php

namespace App\Http\Controllers;
use App\Models\Music;
use App\Models\Listener;
use Illuminate\Http\Request;
use Inertia\Inertia;
use DB;

class ListenersController extends Controller
{

    public function index()
    {
        //
        $listeners= Listener::all();
       return Inertia::render('Listener/Index',[
         'listeners'=>$listeners
       ]);

    }

 
    public function create()
    {
        //
    }

  
    public function store(Request $request)
    {
        $request->validate([
          'name'=> 'required|max:150',
          'email'=> 'required|max:80',
          'phone' => 'required|max:15'
        ]);
        $Listener = new Listener($request->input());
        $Listener->save();
        return redirect('Listeners');
    }

    public function show(Listener $Listener)
    {
        //
    }


    public function edit(Listener $Listener)
    {
        //
    }


    public function update(Request $request, Listener $Listener)
    {
        $request->validate([
            'name'=> 'required|max:150',
            'email'=> 'required|max:80',
            'phone' => 'required|max:15',
            'deparment_id'=> 'required|numeric'
          ]);
        
          $Listener->update($request->input());;

          return redirect('Listeners');
    }

  
    public function destroy(Listener $Listener)
    {$Listener -> delete();
        return redirect('Listeners');
    }

    public function ListenerByMusic(){
      
    }
    public function reports(){
      
    }
}
