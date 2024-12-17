<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use Illuminate\Http\Request;

class UserForumController extends Controller
{
    public function index()
    {
        $forums = Forum::with('user')->latest()->get();
        return view('user.forum', compact('forums'));
    }

    public function create()
    {
        return view('forum.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_forum' => 'required|string|max:255',
            'tanggal_dibuat' => 'required|date',
        ]);

        Forum::create([
            'id_user' => auth()->id(),
            'nama_forum' => $request->nama_forum,
            'tanggal_dibuat' => $request->tanggal_dibuat,
        ]);

        return redirect()->route('forum.index')->with('success', 'Forum berhasil dibuat!');
    }
}
