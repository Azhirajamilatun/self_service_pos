<?php

namespace App\Http\Controllers;
//import Model "Post
use App\Models\matakuliah;
//return type View
use Illuminate\View\View;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MatakuliahController extends Controller
{
    public function index(): View
    {
        //get posts
        $matakuliah = Matakuliah::get();
        //render view with posts
        return view('matakuliah.index', compact('matakuliah'));
    }

    public function create(){
        return view('matakuliah.create');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'mata_kuliah'       => 'required',
            'sks'         => 'required',
            'nilai'         => 'required',
        ], [
            'matakuliah.required'  => 'Nama matakuliah harus di isi.',
        ]);

        $validator->validate();

        matakuliah::create([
            'mata_kuliah' => $request->mata_kuliah,
            'sks' => $request->sks,
            'nilai' => $request->nilai,
        ]);

        return redirect('/matakuliah');
    }
    public function edit($id)
    {
    $matakuliah = Matakuliah::find($id);
    return view('matakuliah.edit', compact('matakuliah'));
    }

    public function update($id, Request $request){
        $matakuliah = Matakuliah::find($id);
        $matakuliah->mata_kuliah = $request->matakuliah;
        $matakuliah->sks = $request->sks;
        $matakuliah->nilai = $request->nilai;
        $matakuliah->save();
        return redirect('/matakuliah')->with('success','Data matakuliah berhasil diupdate.');
    }
    
    public function destroy($id){
        $matakuliah = Matakuliah::find($id);
        if($matakuliah){
            $matakuliah->delete();
            return redirect('/matakuliah')->with('success','Data matakuliah berhasil dihapus.');
        }else{
            return redirect('/matakuliah')->with('success','Data matakuliah tidak ditemukan.');
        }
    }
}