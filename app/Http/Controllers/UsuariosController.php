<?php

namespace App\Http\Controllers;
use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index(Request $request){
        $usuarios = Usuarios::all();
        return view('Usuarios.indexUs',compact('usuarios'));
    }
    public function guardar(Request $request){
        if($request->isMethod('GET')){
            return view('Usuarios.FormGuardarU');
        }else if($request->isMethod('POST')){
            Usuarios::create($request->all());
            return redirect('/');
        }
    }
    public function editarFormU($id){
        $registro = Usuarios::findOrFail($id);
        return view('Usuarios.Editar',compact('registro'));
    }
    public function update(Request $request, $id){
        $registro = Usuarios::findOrFail($id);
        $registro->update($request->all());
        return redirect('/');
    }
    public function delete($id){
        $registro = Usuarios::findOrFail($id);
        $registro->delete();
        return redirect('/');
    }
}
