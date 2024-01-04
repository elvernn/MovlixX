<!-- resources/views/films/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h2 class="text-4xl font-bold mb-4">Tambah Film</h2>

    <form action="{{ route('films.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea name="description" id="description" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <input type="text" name="genre" id="genre" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="year" class="form-label">Tahun</label>
            <input type="text" name="year" id="year" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Gambar Film</label>
            <input type="file" name="image" id="image" class="form-control" onchange="displayImage(this)" required>
            <img id="image-preview" class="mt-2" style="max-width: 100%; display: none;" alt="Preview Gambar">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Simpan</button>
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
