<?php

namespace App\Http\Controllers;
use App\Models\Objetos;
use Illuminate\Http\Request;

class ObjetoController extends Controller
{
    public function IndexO(Request $request){
        $objs = Objetos::all();
        return view('Objetos.IndexO',compact('objs'));
    }
    public function guardar(Request $request){
        if($request->isMethod('GET')){
            return view('Objetos.FormGuardarO');
        }else if($request->isMethod('POST')){
            Objetos::create($request->all());
            return redirect('/');
        }
    }
    public function EditFormO($id){
        $registro = Objetos::findOrFail($id);
        return view('Objetos.EditarO',compact('registro'));
    }
    public function update(Request $request, $id){
        $registro = Objetos::findOrFail($id);
        $registro->update($request->all());
        return redirect('/');
    }
    public function delete($id){
        $registro = Objetos::findOrFail($id);
        $registro->delete();
        return redirect('/');
    }
}
