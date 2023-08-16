<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Note extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'title', 'text', 'user_id', 'color', 'folder_id', 'password', 'pinned'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function folder()
    {
        return $this->belongsTo(Folder::class);
    }

    /**
     *
     * move a note inside a folder
     *
     */
    public function moveToFolder($folderId)
    {
        $this->update(['folder_id' => $folderId]);
    }
}
