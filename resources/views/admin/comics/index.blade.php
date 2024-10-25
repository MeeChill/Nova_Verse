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
<h1>Comics</h1>
<a href="{{ route('comics.create') }}" class="btn">Add New Comic</a>

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
            <th>Penerbit</th>
            <th>Genre</th>
            <th>Poster</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($comics as $comic)
        <tr>
            <td>{{ $comic->title }}</td>
            <td>{{ $comic->author }}</td>
            <td>{{ $comic->publisher }}</td>
            <td>{{ $comic->genre }}</td>
            <td>
                @if($comic->poster)
                    <img src="{{ asset('storage/' . $comic->poster) }}" alt="Comic Poster" width="100">
                @else
                    No Poster
                @endif
            </td>
            <td>
                <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-edit">Edit</a>
                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-delete" onclick="return confirm('Are you sure you want to delete this comic?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
