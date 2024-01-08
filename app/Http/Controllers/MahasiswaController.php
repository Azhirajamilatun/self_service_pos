<?php

namespace App\Http\Controllers;
//import Model "Post
use App\Models\mahasiswa;
//return type View
use Illuminate\View\View;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class mahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = mahasiswa::get();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'nim' => 'required',
                'nama'   => 'required',
                'alamat'   => 'required',

            ],
            [
                'mahasiwa.required' => 'Nim harus di isi.',
            ]
        );

        $validator->validate();

        mahasiswa::create([
            'nim'  => $request->nim,
            'nama'   => $request->nama,
            'alamat'   => $request->alamat,
        ]);

        return redirect('/mahasiswa');
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }
    public function update($id, Request $request)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->save();
        return redirect('/mahasiswa')->with('succes', 'Data mahasiwa berhasil diperbaharui.');
    }

    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        if ($mahasiswa) {
            $mahasiswa->delete();
            return redirect('/mahasiswa')->with('success', 'Data mahasiswa berhasil didelete.');
        } else {
            return redirect('/mahasiswa')->with('success', 'Data mahasiswa gagal didelete.');
        }
    }
}