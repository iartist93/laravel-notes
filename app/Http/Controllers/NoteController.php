<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * notes index page
     */
    public function index()
    {
        $notes = Note::all();
        return view('notes.index', compact('notes'));
    }

    /**
     * Show a single note.
     *
     * The note object is passed ( /notes/{note} )
     * we forward this note object to the show note view
     * 
     */
    public function show(Note $note)
    {
        // inside the /notes/show
        return view('notes.show', compact('note'));
    }

    /**
     *
     * Show the create new note form
     *
     */
    public function create()
    {
        return view('notes.new');
    }

    /**
     * handle POST request to create new note
     */
    public function store(Request $request)
    {
        $note = new Note();
        $note->title = $request->title;
        $note->text = $request->text;
        $note->user_id = 1;

        $note->save();

        return redirect(('/notes/'));
    }


    public function edit(Note $note)
    {
        return view('notes.edit', compact('note'));
    }

    public function update(Request $request, Note $note)
    {
        $request->validate([
            'title' => 'required|max:255',
            'text' => 'required',
        ]);

        $note->update([
            'title' => $request->input('title'),
            'text' => $request->input('text'),
        ]);

        return redirect('/notes/' . $note->id);
    }

    public function destroy(Note $note)
    {
        $note->delete();
        return redirect('/notes');
    }
}
