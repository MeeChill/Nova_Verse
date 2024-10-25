<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('admin.movies.index', compact('movies'));
    }

    public function create()
    {
        return view('admin.movies.create');
    }

    public function store(Request $request)
{
    // Validasi input
    $validatedData = $request->validate([
        'title' => 'required|max:50',
        'director' => 'required|max:50',
        'genre' => 'required|max:50',
        'producer' => 'required|max:50',
        'release_date' => 'required|date',
        'duration' => 'required|integer',
        'main_cast' => 'required',
        'synopsis' => 'required',
        'trailer' => 'nullable|file|mimes:mp4,mkv,avi|max:102400', // maksimum 100MB
        'poster' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // maksimum 2MB
    ]);

    if ($request->hasFile('poster')) {
        $posterPath = $request->file('poster')->store('posters', 'public');
        $validatedData['poster'] = $posterPath;
    }

    if ($request->hasFile('trailer')) {
        $trailerPath = $request->file('trailer')->store('trailers', 'public');
        $validatedData['trailer'] = $trailerPath;
    }

    Movie::create($validatedData);

    return redirect()->route('movies.index')->with('success', 'Movie added successfully');
}

    public function edit(Movie $movie)
    {
        return view('admin.movies.edit', compact('movie'));
    }

    public function update(Request $request, $ID_Movie){
    $movie = Movie::findOrFail($ID_Movie);

    $validatedData = $request->validate([
        'title' => 'required|max:50',
        'director' => 'required|max:50',
        'genre' => 'required|max:50',
        'producer' => 'required|max:50',
        'release_date' => 'required|date',
        'duration' => 'required|integer',
        'main_cast' => 'required',
        'synopsis' => 'required',
        'trailer' => 'nullable|file|mimes:mp4,mkv,avi|max:102400', // max 100MB
        'poster' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // max 2MB
    ]);

    if ($request->hasFile('trailer')) {
        // Hapus trailer lama jika ada
        if ($movie->trailer) {
            Storage::disk('public')->delete($movie->trailer);
        }
        $trailerPath = $request->file('trailer')->store('trailers', 'public');
        $validatedData['trailer'] = $trailerPath;
    }

    if ($request->hasFile('poster')) {
        // Hapus poster lama jika ada
        if ($movie->poster) {
            Storage::disk('public')->delete($movie->poster);
        }
        $posterPath = $request->file('poster')->store('posters', 'public');
        $validatedData['poster'] = $posterPath;
    }

    $movie->update($validatedData);

    return redirect()->route('movies.index')->with('success', 'Movie updated successfully');
}


    public function destroy($ID_Movie)
    {
        $movie = Movie::find($ID_Movie);
        $movie->delete();
        return redirect()->route('movies.index')->with('success', 'Movie deleted successfully');
    }

}
