<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'color', 'order'];

    public function notes()
    {
        return $this->hasMany(Note::class);
    }

    public function getAllNotes()
    {
        return $this->notes;
    }

    public function moveNoteToFolder(Note $note)
    {
        if ($note->folder_id === $this->id) {
            return;
        }

        // Move the note inside this folder
        $note->update(['folder_id' => $this->id]);
    }
}
