<?php

namespace App\Http\Controllers;

use App\Models\Trayectos;
use Illuminate\Http\Request;

class TrayectosController extends Controller
{
    public function IndexT(Request $request){
        $trayectos = Trayectos::all();
        return view('Trayectos.IndexT',compact('trayectos'));
    }
    public function guardar(Request $request){
        if($request->isMethod('GET')){
            return view('Trayectos.FormGuardarT');
        }else if($request->isMethod('POST')){
            Trayectos::create($request->all());
            return redirect('/');
        }
    }
    public function EditarFOrmT($id){
        $registro = Trayectos::findOrFail($id);
        return view('Trayectos.EditarT',compact('registro'));
    }
    public function update(Request $request, $id){
        $registro = Trayectos::findOrFail($id);
        $registro->update($request->all());
        return redirect('/');
    }
    public function delete($id){
        $registro = Trayectos::findOrFail($id);
        $registro->delete();
        return redirect('/');
    }
}
