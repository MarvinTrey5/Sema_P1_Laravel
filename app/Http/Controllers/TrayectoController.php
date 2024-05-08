<?php

namespace App\Http\Controllers;

use App\Models\Trayecto;
use Illuminate\Http\Request;

class TrayectoController extends Controller
{
    public function IndexT(Request $request){
        $trayecto = Trayecto::all();
        return view('Trayecto.IndexT',compact('trayecto'));
    }
    public function guardar(Request $request){
        if($request->isMethod('GET')){
            return view('Trayecto.FormGuardarT');
        }else if($request->isMethod('POST')){
            Trayecto::create($request->all());
            return redirect('/');
        }
    }
    public function EditarFOrmT($id){
        $registro = Trayecto::findOrFail($id);
        return view('Trayecto.EditarT',compact('registro'));
    }
    public function update(Request $request, $id){
        $registro = Trayecto::findOrFail($id);
        $registro->update($request->all());
        return redirect('/');
    }
    public function delete($id){
        $registro = Trayecto::findOrFail($id);
        $registro->delete();
        return redirect('/');
    }
}
