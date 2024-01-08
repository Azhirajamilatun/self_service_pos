<?php

namespace App\Http\Controllers;
//import Model "Post
use App\Models\Prodi;
//return type View
use Illuminate\View\View;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProdiController extends Controller
{
    public function index(): View
    {
        //get posts
        $prodi = Prodi::get();
        //render view with posts
        return view('prodi.index', compact('prodi'));
    }

    public function create(){
        return view('prodi.create');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'prodi'       => 'required',
            'dosen'         => 'required',
        ], [
            'prodi.required'  => 'Nama prodi harus di isi.',
        ]);

        $validator->validate();

        prodi::create([
            'prodi' => $request->prodi,
            'dosen' => $request->dosen,
            
        ]);

        return redirect('/prodi');
    }
    public function edit($id)
    {
    $prodi = Prodi::find($id);
    return view('prodi.edit', compact('prodi'));
    }

    public function update($id, Request $request){
        $prodi = Prodi::find($id);
        $prodi->prodi = $request->prodi;
        $prodi->dosen = $request->dosen;
        $prodi->save();
        return redirect('/prodi')->with('success','Data prodi berhasil diupdate.');
    }
    
    public function destroy($id){
        $prodi = Prodi::find($id);
        if($prodi){
            $prodi->delete();
            return redirect('/prodi')->with('success','Data prodi berhasil dihapus.');
        }else{
            return redirect('/prodi')->with('success','Data prodi tidak ditemukan.');
        }
    }
}