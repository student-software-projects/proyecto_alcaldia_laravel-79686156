<?php

namespace App\Http\Controllers;

use App\Models\equipos;
use Illuminate\Http\Request;

class EquiposController extends Controller
{
    public function index(){
        $Equipos=equipos::all();
        return view('Equipo.index',compact('Equipos'));
    }
    public function create(){
        return view('Equipo.create');
    }
    public function store(Request $request){
        $equipo=equipos::create($request->all());
        return redirect()->route('equipo.index');
    }
    public function show($id){
        $equipo=equipos::find($id);
        return view('Equipo.show',compact('equipo'));
    }
    public function destroy($id){
        $equipo=equipos::find($id)->delete();
        return redirect()->route('equipo.index');
    }
    public function edit($id){
        $equipo=equipos::find($id);
        return view('Equipo.edit',compact('equipo'));
    }
    public function update(Request $request,$id){
        $equipo=equipos::find($id)->update($request->all());
        return redirect()->route('equipo.show',$id);
    }
}
