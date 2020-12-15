<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class MReport extends Model
{
    use HasFactory, Notifiable;

    protected $table = "media_favorites";

    protected $fillable = [
        'medias_id',
        'reported_by',
        'r_reason'
    ];
}
