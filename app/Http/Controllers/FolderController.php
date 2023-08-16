<?php

namespace App\Http\Controllers;

use App\Models\Folder;
use Illuminate\Http\Request;

class FolderController extends Controller
{
    public function create()
    {
        return view('folders.new');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'color' => 'required',
        ]);

        $folder = Folder::create([
            'name' => $request->input('name'),
            'color' => $request->input('color'),
        ]);

        return redirect('/folders/' . $folder->id);
    }
    public function show(Folder $folder)
    {
        return view('folders.show', compact('folder'));
    }

    public function edit(Folder $folder)
    {
        return view('folders.edit', compact('folder'));
    }

    public function update(Request $request, Folder $folder)
    {
        $request->validate([
            'name' => 'required|max:255',
            'color' => 'required',
            'order' => 'required|unique:folders,order,' . $folder->id,
        ]);

        $folder->update([
            'name' => $request->input('name'),
            'color' => $request->input('color'),
            'order' => $request->input('order'),
        ]);

        return redirect('/folders/' . $folder->id);
    }

    public function destroy(Folder $folder)
    {
        $folder->delete();
        return redirect('/folders');
    }
}
