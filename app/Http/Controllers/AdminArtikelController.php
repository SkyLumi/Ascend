<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class AdminArtikelController extends Controller
{
    public function index(Request $request)
    {
        $artikels = Artikel::all();
        return view('admin.artikel', compact('artikels'));
    }

    public function create(Request $request)
    {
        return view('admin.tambah.artikel');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|max:255',
            'isi' => 'required',
        ]);

        Artikel::create([
            'judul' => $validated['judul'],
            'isi' => $validated['isi'],
            'id_user' => auth()->id(),
        ]);

        return redirect()->route('artikel.index')->with('success', 'Artikel berhasil ditambahkan!');
    }

    public function destroy($id)
    {
        $challenge = Artikel::findOrFail($id);
        $challenge->delete();

        return redirect()->route('artikel.index')->with('success', 'Artikel berhasil dihapus!');
    }

    public function edit($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('admin.edit.artikel', compact('artikel'));
    }


    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'judul' => 'required|max:255',
            'isi' => 'required',
        ]);

        $artikel = Artikel::findOrFail($id);
        $artikel->update([
            'judul' => $validated['judul'],
            'isi' => $validated['isi'],
        ]);

        return redirect()->route('artikel.index')->with('success', 'Artikel berhasil diperbarui!');
    }
}
