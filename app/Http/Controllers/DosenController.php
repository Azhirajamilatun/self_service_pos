<?php

namespace App\Http\Controllers;
//import Model "Post
use App\Models\dosen;
//return type View
use Illuminate\View\View;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DosenController extends Controller
{
    public function index(): View
    {
        //get posts
        $dosen = Dosen::get();
        //render view with posts
        return view('dosen.index', compact('dosen'));
    }

    public function create(){
        return view('dosen.create');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'nama'                  => 'required',
            'jenis_kelamin'         => 'required',
            'alamat'                => 'required',
            'email'                 => 'required',
        ], [
            'dosen.required'  => 'Nama dosen harus di isi.',
        ]);

        $validator->validate();

        dosen::create([
            'nama'          => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat'        => $request->alamat,
            'email'         => $request->email,


        ]);

        return redirect('/dosen');
    }
    public function edit($id)
    {
    $dosen = Dosen::find($id);
    return view('dosen.edit', compact('dosen'));
    }

    public function update($id, Request $request){
        $dosen = Dosen::find($id);
        $dosen->nama = $request->nama;
        $dosen->jenis_kelamin = $request->jenis_kelamin;
        $dosen->alamat = $request->alamat;
        $dosen->email = $request->email;
        $dosen->save();
        return redirect('/dosen')->with('success','Data dosen berhasil diupdate.');
    }
    
    public function destroy($id){
        $dosen = dosen::find($id);
        if($dosen){
            $dosen->delete();
            return redirect('/dosen')->with('success','Data dosen berhasil dihapus.');
        }else{
            return redirect('/dosen')->with('success','Data dosen tidak ditemukan.');
        }
    }
}