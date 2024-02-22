<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;

class AnggotaController extends Controller
{
    public function index()
    {
        $anggota = Anggota::all();
        return view('anggota', compact('anggota'));
    }
    

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:anggota',
            'no_hp' => 'required',
            'alamat' => 'required',
        ]);

        Anggota::create($request->all());

        return redirect()->route('anggota.index')
                         ->with('success', 'Anggota berhasil ditambahkan.');
    }

    public function show(Anggota $anggota)
    {
        return view('show', compact('anggota'));
    }

    public function edit(Anggota $anggota)
    {
        return view('edit', compact('anggota'));
    }

    public function update(Request $request, Anggota $anggota)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:anggota,email,'.$anggota->id,
            'no_hp' => 'required',
            'alamat' => 'required',
        ]);

        $anggota->update($request->all());

        return redirect()->route('anggota.index')
                         ->with('success', 'Data anggota berhasil diperbarui.');
    }

    public function delete(Anggota $anggota)
    {
        $anggota->delete();

        return redirect()->route('anggota.index')
                         ->with('success', 'Anggota berhasil dihapus.');
    }
}
