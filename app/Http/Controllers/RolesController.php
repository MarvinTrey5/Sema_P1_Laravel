<?php

namespace App\Http\Controllers;
use App\Models\Roles;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function IndexR(Request $request){
        $roles = Roles::all();
        return view('Roles.IndexR',compact('roles'));
    }
    public function guardar(Request $request){
        if($request->isMethod('GET')){
            return view('Roles.FormGuardarR');
        }else if($request->isMethod('POST')){
            Roles::create($request->all());
            return redirect('/');
        }
    }
    public function EditarFormR($id){
        $registro = Roles::findOrFail($id);
        return view('Roles.EditarR',compact('registro'));
    }
    public function update(Request $request, $id){
        $registro = Roles::findOrFail($id);
        $registro->update($request->all());
        return redirect('/');
    }
    public function delete($id){
        $registro = Roles::findOrFail($id);
        $registro->delete();
        return redirect('/');
    }
}
