<!-- resources/views/films/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8">
        <h2 class="text-2xl font-bold mb-4">{{ $film->title }}</h2>
        
        <div class="mb-4">
            <strong>Genre:</strong> {{ $film->genre }}
        </div>

        <div class="mb-4">
            <strong>Tahun:</strong> {{ $film->year }}
        </div>

        <div class="mb-4">
            <strong>Deskripsi:</strong>
            <p>{{ $film->description }}</p>
        </div>

        <div class="mb-4">
            <strong>Mau nonton ga bro nih linknya :</strong>
            <a href="{{ $film->watch_link }}" target="_blank">{{ $film->watch_link }}</a>
        </div>

        <div class="flex items-center space-x-2">
            <form action="{{ route('films.destroy', $film->id) }}" method="post">
                <a href="{{ route('films.edit', $film->id) }}" class="btn btn-primary mr-2">Edit</a> <!-- Menambah class mr-2 untuk memberikan margin kanan -->
                <a href="{{ route('films.index') }}" class="btn btn-primary">Kembali</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-primary ml-2">Delete</button> <!-- Menambah class ml-2 untuk memberikan margin kiri -->
            </form>
        </div>
    </div>
@endsection
