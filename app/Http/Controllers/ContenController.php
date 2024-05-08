<?php

namespace App\Http\Controllers;
use App\Models\Conten;
use Illuminate\Http\Request;

class ContenController extends Controller
{
    public function indexC(Request $request){
        $contents = Conten::all();
        return view('Conten.IndexC',compact('contents'));
    }
    public function guardar(Request $request){
        if($request->isMethod('GET')){
            return view('Conten.FormGuardarC');
        }else if($request->isMethod('POST')){
            Conten::create($request->all());
            return redirect('/');
        }
    }
    public function EditFormC($id){
        $registro = Conten::findOrFail($id);
        return view('Conten.EditarC',compact('registro'));
    }
    public function update(Request $request, $id){
        $registro = Conten::findOrFail($id);
        $registro->update($request->all());
        return redirect('/');
    }
    public function delete($id){
        $registro = Conten::findOrFail($id);
        $registro->delete();
        return redirect('/');
    }
}
