<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Note::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return Note::create($request->only(['title', 'body']));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Note::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $note = Note::findOrFail($id);
        $note->update($request->only(['title', 'body']));
        return $note;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Note::findOrFail($id)->delete();
    }
}
