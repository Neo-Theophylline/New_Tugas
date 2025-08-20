<?php

namespace App\Http\Controllers;

use App\Models\Clas;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class ClasController extends Controller
{
    public function index()
    {
        $dataclas = Clas::all();
        return view('clas.index', compact('dataclas'));
    }

    public function create()
    {
        return view('clas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string'
        ]);

        Clas::create($request->only(['name', 'description']));

        return redirect()->route('clas.index')
            ->with('success', 'Kelas berhasil ditambahkan.');
    }

    public function edit($id)
    {
        // Jika ID null atau tidak ditemukan, langsung ke index
        if (!$id || !Clas::find($id)) {
            return redirect()->route('clas.index');
        }

        $clas = Clas::findOrFail($id);

        return view('clas.edit', compact('clas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'        => 'required|string',
            'description' => 'nullable|string'
        ]);

        $clas = Clas::findOrFail($id);
        $clas->update($request->only(['name', 'description']));

        return redirect()->route('clas.index')
            ->with('success', 'Kelas berhasil diperbarui.');
    }

    public function show($id)
    {
        // Jika ID null atau tidak ada datanya, langsung ke index
        if (!$id || !Clas::find($id)) {
            return redirect()->route('clas.index');
        }

        $clas = Clas::findOrFail($id);

        // Ambil siswa yang punya clas_id sama
        $datauser = User::where('clas_id', $id)->get();

        return view('clas.show', compact('clas', 'datauser'));
    }

    public function destroy($id)
    {
        $clas = Clas::find($id);

        if (!$clas) {
            return redirect()->route('clas.index');
        }

        $clas->delete();

        return redirect()->route('clas.index');
    }
}
