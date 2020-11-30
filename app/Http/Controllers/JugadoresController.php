<?php

namespace App\Http\Controllers;

use App\Models\jugadores;
use Illuminate\Http\Request;

class JugadoresController extends Controller
{
    public function index(){
        $Jugadores=jugadores::all();
        return view('Jugadores.index',compact('Jugadores'));
    }
    public function create(){
        return view('Jugadores.create');
}
    public function store(Request $request){
        $jugador=jugadores::create($request->all());
        return redirect()->route('jugador.index');
    }
    public function show($id){
        $jugador=jugadores::find($id);
        return view('Jugadores.show',compact('jugador'));
    }
    public function destroy($id){
        $jugador=jugadores::find($id)->delete();
        return redirect()->route('jugador.index');
    }
    public function edit($id){
        $jugador=jugadores::find($id);
        return view('Jugadores.edit',compact('jugador'));
    }
    public function update(Request $request,$id){
        $jugador=jugadores::find($id)->update($request->all());
        return redirect()->route('jugador.show',$id);
    }


}
