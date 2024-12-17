@extends('layouts.app_admin')

@section('title', 'Edit Daily Task')

@section('content')
<div class="container">
    <h1>Edit Daily Task</h1>
    <form action="{{ route('daily-task.update', $dailyTask->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama_daily_task" class="form-label">Nama Daily Task</label>
            <input type="text" name="nama_daily_task" id="nama_daily_task" class="form-control" value="{{ old('nama_daily_task', $dailyTask->nama_daily_task) }}" required>
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control" required>{{ old('deskripsi', $dailyTask->deskripsi) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="durasi" class="form-label">Durasi (hari)</label>
            <input type="number" name="durasi" id="durasi" class="form-control" value="{{ old('durasi', $dailyTask->durasi) }}" required>
        </div>

        <div class="mb-3">
            <label for="reward_points" class="form-label">Reward Points</label>
            <input type="number" name="reward_points" id="reward_points" class="form-control" value="{{ old('reward_points', $dailyTask->reward_points) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div>
@endsection
