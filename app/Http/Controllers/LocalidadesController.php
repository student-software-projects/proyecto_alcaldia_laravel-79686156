<?php

namespace App\Http\Controllers;

    use App\Models\localidades;
    use Illuminate\Http\Request;


    class LocalidadesController extends Controller
    {
        public function index(){
            $Localidades=localidades::all();
            return view('Localidades.index',compact('Localidades'));
        }
        public function create(){
            return view('Localidades.create');
        }
        public function store(Request $request){
            $localidad=localidades::create($request->all());
            return redirect()->route('localidad.index');
        }
        public function show($id){
            $localidad=localidades::find($id);
            return view('Localidades.show',compact('localidad'));
        }
        public function destroy($id){
            $localidad=localidades::find($id)->delete();
            return redirect()->route('localidad.index');
        }
        public function edit($id){
            $localidad=localidades::find($id);
            return view('Localidades.edit',compact('localidad'));
        }
        public function update(Request $request,$id){
            $localidad=localidades::find($id)->update($request->all());
            return redirect()->route('localidad.show',$id);
        }





}
