<!-- resources/views/films/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h2 class="text-4xl font-bold mb-4">Edit Film</h2>

    <form action="{{ route('films.update', $film->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $film->title }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea name="description" id="description" class="form-control" required>{{ $film->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <input type="text" name="genre" id="genre" class="form-control" value="{{ $film->genre }}" required>
        </div>
        <div class="mb-3">
            <label for="year" class="form-label">Tahun</label>
            <input type="text" name="year" id="year" class="form-control" value="{{ $film->year }}" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Gambar Film</label>
            <input type="file" name="image" id="image" class="form-control" onchange="displayImage(this)">
            <img id="image-preview" class="mt-2" style="max-width: 100%;" src="{{ asset('path/to/your/images/' . $film->image) }}" alt="Preview Gambar">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>

    <script>
        function displayImage(input) {
            var preview = document.getElementById('image-preview');
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block'; // Menampilkan gambar setelah dipilih
                }

                reader.readAsDataURL(input.files[0]);
            } else {
                preview.src = '';
                preview.style.display = 'none'; // Menyembunyikan gambar jika tidak ada file yang dipilih
            }
        }
    </script>
@endsection
