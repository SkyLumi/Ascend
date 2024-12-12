<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Challenge;

class AdminChallengeController extends Controller
{
    public function index(Request $request)
    {
        $challenges = Challenge::all();
        return view('admin.challenge', compact('challenges'));
    }

    public function create(Request $request)
    {
        return view('admin.tambah.challenge');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_challenge' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'durasi' => 'required|integer|min:1',
            'reward_points' => 'required|integer|min:0',
        ]);

        Challenge::create([
            'nama_challenge' => $validated['nama_challenge'],
            'deskripsi' => $validated['deskripsi'],
            'durasi' => $validated['durasi'],
            'reward_points' => $validated['reward_points'],
        ]);

        return redirect()->route('challenge.index')->with('success', 'Challenge berhasil ditambah!');
    }

    public function destroy($id)
    {
        $challenge = Challenge::findOrFail($id);
        $challenge->delete();

        return redirect()->route('challenge.index')->with('success', 'Challenge berhasil dihapus!');
    }

}
