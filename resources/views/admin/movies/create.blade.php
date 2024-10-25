@extends('layouts.app')
<div class="sidebar">
    <div class="logo">
        <h2>ReviewTracker</h2>
    </div>
    <ul>
        <li><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
        <li><a href="{{ route('movies.index') }}" class="active"></i> Movies</a></li>
        <li><a href="{{ route('comics.index') }}"></i> Comics</a></li>
        <li><a href="{{ route('novels.index') }}"></i> Novels</a></li>
        <li><a href="#">Cartoons</a></li>
        <li><a href="#">Reports</a></li>
    </ul>
</div>


@section('content')
<h1>Add New Movie</h1>

<a class="btn" href="{{ route("movies.index") }}">Back To Dashboard</a>

<form action="{{ route('movies.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-grid-horizontal">
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" name="title" id="title" required >
        </div>
        <div class="form-group">
            <label for="director">Sutradara</label>
            <input type="text" name="director" id="director" required >
        </div>

        <div class="form-group">
            <label for="genre">Genre</label>
            <input type="text" name="genre" id="genre" required >
        </div>
        <div class="form-group">
            <label for="producer">Produser</label>
            <input type="text" name="producer" id="producer" required >
        </div>

        <div class="form-group">
            <label for="release_date">Tanggal Rilis</label>
            <input type="date" name="release_date" id="release_date" required>
        </div>

                <div class="form-group">
                    <label for="duration">Durasi (menit)</label>
                    <input type="number" name="duration" id="duration" required>
                </div>
                <div class="form-group">
                    <label for="main_cast">Pemeran Utama</label>
                    <textarea name="main_cast" id="main_cast" required></textarea>
                </div>
                <div class="form-group">
                    <label for="synopsis">Sinopsis</label>
                    <textarea name="synopsis" id="synopsis" required></textarea>
                </div>
                <div class="form-group">
                    <label for="poster">Poster</label>
                    <input type="file" name="poster" id="poster" accept="image/*">
                </div>
                <div class="form-group">
                    <label for="trailer">Trailer</label>
                    <input type="file" name="trailer" id="trailer" accept="video/*">
                </div>
    </div>

    <button type="submit" class="btn">Tambah Film</button>
</form>
@endsection
