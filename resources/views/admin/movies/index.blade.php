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

<div class="main-content">
@section('content')
<h1>Movies</h1>
<a href="{{ route('movies.create') }}" class="btn">Add New Movie</a>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table>
    <thead>
        <tr>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Produsen</th>
            <th>Genre</th>
            <th>Poster</th>
            <th>Trailer</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($movies as $movie)
        <tr>
            <td>{{ $movie->title }}</td>
            <td>{{ $movie->director }}</td>
            <td>{{ $movie->producer }}</td>
            <td>{{ $movie->genre }}</td>
            <!-- Display the poster if available -->
            <td>
                @if($movie->poster)
                    <img src="{{ asset('storage/' . $movie->poster) }}" alt="Movie Poster" width="100">
                @else
                    No Poster
                @endif
            </td>
            <td>
                @if($movie->trailer)
                    <video width="150" height="100" controls>
                        <source src="{{ asset('storage/' . $movie->trailer) }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                @else
                    No Trailer
                @endif
            </td>
            <td>
                <a href="{{ route('movies.edit', $movie->ID_Movie) }}" class="btn btn-edit">Edit</a>
                <form action="{{ route('movies.destroy', $movie->ID_Movie) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-delete" onclick="return confirm('Are you sure you want to delete this movie?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
