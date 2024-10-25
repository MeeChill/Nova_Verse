@extends('layouts.app')
<div class="sidebar">
    <div class="logo">
        <h2>ReviewTracker</h2>
    </div>
    <ul>
        <li><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
        <li><a href="{{ route('movies.index') }}"></i> Movies</a></li>
        <li><a href="{{ route('comics.index') }}" class="active"></i> Comics</a></li>
        <li><a href="{{ route('novels.index') }}"></i> Novels</a></li>
        <li><a href="#">Cartoons</a></li>
        <li><a href="#">Reports</a></li>
    </ul>
</div>

<div class="main-content">
@section('content')
<h1>Add New Comic</h1>

<a class="btn" href="{{ route("comics.index") }}">Back To Dashboard</a>

<form action="{{ route('comics.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-grid-horizontal">
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" name="title" id="title" required>
        </div>
        <div class="form-group">
            <label for="author">Penulis</label>
            <input type="text" name="author" id="author" required>
        </div>
        <div class="form-group">
            <label for="publisher">Penerbit</label>
            <input type="text" name="publisher" id="publisher" required>
        </div>
        <div class="form-group">
            <label for="release_date">Tanggal Rilis</label>
            <input type="date" name="release_date" id="release_date" required>
        </div>
        <div class="form-group">
            <label for="genre">Genre</label>
            <input type="text" name="genre" id="genre" required>
        </div>
        <div class="form-group">
            <label for="number_of_pages">Jumlah Halaman</label>
            <input type="number" name="number_of_pages" id="number_of_pages">
        </div>
        <div class="form-group">
            <label for="synopsis">Sinopsis</label>
            <textarea name="synopsis" id="synopsis" required></textarea>
        </div>
        <div class="form-group">
            <label for="main_characters">Karakter Utama</label>
            <textarea name="main_characters" id="main_characters" required></textarea>
        </div>
        <div class="form-group">
            <label for="poster">Poster</label>
            <input type="file" name="poster" id="poster">
        </div>
    </div>
    <button type="submit" class="btn">Add Comic</button>
</form>
</div>
@endsection
