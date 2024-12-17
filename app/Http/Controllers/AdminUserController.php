<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserController extends Controller
{

    public function index(Request $request)
    {
        $users = User::all();
        return view('admin.user', compact('users'));
    }

    public function create(Request $request)
    {
        return view('admin.tambah.user');
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'is_admin' => 'required|boolean',
        ]);

        User::create([
            'nama' => $validated['nama'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'is_admin' => $validated['is_admin'],
        ]);

        return redirect()->route('user.index')->with('success', 'User berhasil ditambah.');

    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('user.index')->with('success', 'User berhasil dihapus!');
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable|min:8',
            'is_admin' => 'required|boolean',
        ]);

        $data = [
            'nama' => $validated['nama'],
            'email' => $validated['email'],
            'is_admin' => $validated['is_admin'],
        ];

        if ($request->filled('password')) {
            $data['password'] = Hash::make($validated['password']);
        }

        $user->update($data);

        return redirect()->route('user.index')->with('success', 'User berhasil diperbarui!');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.edit.user', compact('user'));
    }

}
