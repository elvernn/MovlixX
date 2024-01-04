<!-- resources/views/films/index.blade.php -->

@extends('layouts.app')

@section('content')
<style>
    .card:hover {
        border: none;
    }
</style>

    <div class="mb-4">
        <h2 class="text-4xl font-bold text-start">Film Terpopuler</h2>
    </div>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        @foreach($films as $film)
            <div class="col-md-4 col-lg-2 mb-4">
                <div class="card border-white bg-transparent h-100">
                    <img src="{{ asset('path/to/your/images/' . $film->image) }}" class="card-img-top" alt="{{ $film->title }}">
                    <div class="card-body">
                        <h5 class="card-title text-white">{{ $film->title }}</h5>
                        <p class="card-text text-white">{{ \Illuminate\Support\Str::limit($film->description, 50, $end = '...') }}</p>
                    </div>
                    <div class="card-footer bg-transparent">
                        <a href="{{ route('films.show', $film->id) }}" class="btn btn-primary btn-sm mr-2">Lihat Detail</a>
                        <!-- Tambahkan elemen untuk rating dengan bintang di sini -->
                        <div class="rating text-white">
                            @for ($i = 1; $i <= 5; $i++)
                                <i class="fas fa-star"></i>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="position-fixed bottom-0 start-0 p-4">
        <a href="{{ route('films.create') }}" class="btn btn-black btn-transparent">Tambah Film</a>
    </div>
@endsection
