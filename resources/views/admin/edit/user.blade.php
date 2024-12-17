@extends('layouts.app_admin')

@section ('title', 'Edit User')

@section('content')
<div class="container">
    <h1>Edit User</h1>
    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama', $user->nama) }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $user->email) }}" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password (Opsional)</label>
            <input type="password" name="password" id="password" class="form-control">
            <small class="form-text text-muted">Biarkan kosong jika tidak ingin mengganti password.</small>
        </div>

        <div class="mb-3">
            <label for="is_admin" class="form-label">Admin?</label>
            <select name="is_admin" id="is_admin" class="form-control" required>
                <option value="1" {{ old('is_admin', $user->is_admin) == 1 ? 'selected' : '' }}>Ya</option>
                <option value="0" {{ old('is_admin', $user->is_admin) == 0 ? 'selected' : '' }}>Tidak</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div>
@endsection
