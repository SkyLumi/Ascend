<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class UserArtikelController extends Controller
{
    public function index()
    {
        $artikels = Artikel::all();
        return view('user.artikel', compact('artikels'));
    }

    public function show($id)
    {
        $artikel = Artikel::with('user')->findOrFail($id);
        return view('user.detail.artikel', compact('artikel'));
    }
}
