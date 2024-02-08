<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fumetto;
use Illuminate\Support\Facades\Redirect;

class FumettoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fumetti = Fumetto::all();
        return view('fumetti.index', compact('fumetti'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fumetti.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string'],
            'description' => ['required', 'string'],
            'thumb' => ['required', 'url'],
            'price' => ['required', 'string'],
            'series' => ['required', 'string'],
            'sale_date' => ['required', 'date'],
            'type' => ['required', 'string'],
            'artists' => ['required', 'array'],
            'writers' => ['required', 'array'],
        ]);

        $fumetto = Fumetto::create($newComic);

        $fumetto->save();

        // reindirizza alla page
        return redirect()->route('fumetti.show', ['fumetto' => $fumetto->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $fumetto = Fumetto::find($id);
        return view('fumetti.show', compact('fumetto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $fumetto = Fumetto::findOrFail($id);
        return view('fumetti.edit', compact('fumetto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
