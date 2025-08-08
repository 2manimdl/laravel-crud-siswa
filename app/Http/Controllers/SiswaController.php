<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $data = Siswa::all();
        return view('siswa.index', compact('data'));       //
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {
        Siswa::create($request->all());
        return redirect()->route("siswa.index")->with('success', 'Data Berhasil ditambahkan');
    }

    public function edit(string $id)
    {
        $siswa = Siswa::find($id);
        return view('siswa.edit', compact('siswa'));
    }

    public function update(Request $request, $id)
    {
        $siswa = Siswa::find($id);
        $siswa->update($request->all());
        return redirect()->route('siswa.index')->with('success', 'Data Berhasil diupdate');
    }

    public function destroy($id)
    {
        Siswa::find($id)->delete();
        return redirect()->route('siswa.index')->with('success', 'Data Berhasil dihapus');
    }
}
