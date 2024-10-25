<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ComicController extends Controller
{
    public function index()
    {
        $comics = Comic::all();
        return view('admin.comics.index', compact('comics'));
    }

    public function create()
    {
        return view('admin.comics.create');
    }

    public function store(Request $request)
    {
        // Validate input
        $validatedData = $request->validate([
            'title' => 'required|max:50',
            'author' => 'required|max:50',
            'publisher' => 'required|max:50',
            'release_date' => 'required|date',
            'genre' => 'required|max:50',
            'number_of_pages' => 'nullable|integer',
            'synopsis' => 'required',
            'main_characters' => 'required',
            'poster' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // maximum 2MB
        ]);

        if ($request->hasFile('poster')) {
            $posterPath = $request->file('poster')->store('comicposter', 'public');
            $validatedData['poster'] = $posterPath;
        }


        Comic::create($validatedData);

        return redirect()->route('comics.index')->with('success', 'Comic added successfully');
    }

    public function edit(Comic $comic)
    {
        return view('admin.comics.edit', compact('comic'));
    }

    public function update(Request $request, $id)
    {
        $comic = comic::findOrFail($id);

        $validatedData = $request->validate([
            'title' => 'required|max:50',
            'author' => 'required|max:50',
            'publisher' => 'required|max:50',
            'release_date' => 'required|date',
            'genre' => 'required|max:50',
            'number_of_pages' => 'nullable|integer',
            'synopsis' => 'required',
            'main_characters' => 'required',
            'poster' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // Pastikan ini nullable
        ]);

        $comic = Comic::findOrFail($id);

        if ($request->hasFile('poster')) {
            $posterPath = $request->file('poster')->store('comicposter');
            $comic->poster = $posterPath; // Update poster dengan yang baru
        }

        $comic->update($validatedData);

        return redirect()->route('comics.index')->with('success', 'Comic updated successfully.');
    }


    public function destroy($id)
    {
        $comic = comic::find($id);
        $comic->delete();

        return redirect()->route('comics.index')->with('success', 'Comic deleted successfully');
    }
}
