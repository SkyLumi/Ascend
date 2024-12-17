@extends('layouts.app_admin')

@section ('title', 'Edit Challenge')

@section('content')
<div class="container">
    <h1>Edit Challenge</h1>
    <form action="{{ route('challenge.update', $challenge->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama_challenge" class="form-label">Nama Challenge</label>
            <input type="text" name="nama_challenge" id="nama_challenge" class="form-control" value="{{ old('nama_challenge', $challenge->nama_challenge) }}" required>
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control" rows="5" required>{{ old('deskripsi', $challenge->deskripsi) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="durasi" class="form-label">Durasi (Hari)</label>
            <input type="number" name="durasi" id="durasi" class="form-control" value="{{ old('durasi', $challenge->durasi) }}" required>
        </div>

        <div class="mb-3">
            <label for="reward_points" class="form-label">Reward Points</label>
            <input type="number" name="reward_points" id="reward_points" class="form-control" value="{{ old('reward_points', $challenge->reward_points) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div>
@endsection
