@extends('layouts.app_admin')

@section ('title', 'Edit Artikel')

@section('content')
<div class="container">
    <h1>Edit Artikel</h1>
    <form action="{{ route('artikel.update', $artikel->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" name="judul" id="judul" class="form-control" value="{{ old('judul', $artikel->judul) }}" required>
        </div>

        <div class="mb-3">
            <label for="isi" class="form-label">Isi</label>
            <textarea name="isi" id="isi" class="form-control" rows="5" required>{{ old('isi', $artikel->isi) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div>
@endsection
