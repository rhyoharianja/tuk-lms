<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class MFavorite extends Model
{

    use HasFactory, Notifiable;

    protected $table = "media_favorites";

    protected $fillable = [
        'user_id',
        'ebook_id'
    ];
}
