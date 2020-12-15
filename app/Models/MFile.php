<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class MFile extends Model
{
    use HasFactory, Notifiable;

    protected $table = "media_files";

    protected $fillable = [
        'filename',
        'medias_id',
        'disk',
        'path',
        'extension',
        'mime',
        'size',
        'download'
    ];
}
