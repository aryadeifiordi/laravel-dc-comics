<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    
    public function create()
    {
        return view('comics.create');
    }

    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'year' => 'required|integer|min:1900|max:' . date('Y')
        ]);

        $comic = Comic::create($validatedData);

        return redirect()->route('comics.show', $comic->id);
    }

    
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    
    public function update(Request $request, Comic $comic)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'year' => 'required|integer|min:1900|max:' . date('Y')
        ]);

        $comic->update($validatedData);

        return redirect()->route('comics.show', $comic->id);
    }

    
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
