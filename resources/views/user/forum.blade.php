@extends('layouts.app_user')

@section('title', 'Forum Ascend')

@section('content')
    <h1>Daftar Forum</h1>
    <a href="{{ route('forum.create') }}">Buat Forum</a>
    <ul>
        @foreach ($forums as $forum)
            <li>
                <h3>{{ $forum->nama_forum }}</h3>
                <small>Oleh: {{ $forum->user->name }} | Dibuat: {{ $forum->tanggal_dibuat }}</small>
            </li>
        @endforeach
    </ul>
@endsection
