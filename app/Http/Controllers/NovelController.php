<?php

namespace App\Http\Controllers;

use App\Models\Novel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NovelController extends Controller
{
    public function index()
    {
        $novels = Novel::all();
        return view('admin.novels.index', compact('novels'));
    }

    public function create()
    {
        return view('admin.novels.create');
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
            $posterPath = $request->file('poster')->store('posters', 'public');
            $validatedData['poster'] = $posterPath;
        }

        Novel::create($validatedData);

        return redirect()->route('novels.index')->with('success', 'Novel added successfully');
    }

    public function edit(Novel $novel)
    {
        return view('admin.novels.edit', compact('novel'));
    }

    public function update(Request $request, Novel $novel)
    {
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
            // Delete old poster if exists
            if ($novel->poster) {
                Storage::disk('public')->delete($novel->poster);
            }
            $posterPath = $request->file('poster')->store('posters', 'public');
            $validatedData['poster'] = $posterPath;
        }

        $novel->update($validatedData);

        return redirect()->route('novels.index')->with('success', 'Novel updated successfully');
    }

    public function destroy(Novel $novel)
    {
        // Delete poster if exists
        if ($novel->poster) {
            Storage::disk('public')->delete($novel->poster);
        }
        $novel->delete();

        return redirect()->route('novels.index')->with('success', 'Novel deleted successfully');
    }
}
