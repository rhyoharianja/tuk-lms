<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class MCategory extends Model
{
    use HasFactory, Notifiable;

    protected $table = "media_category";

    protected $fillable = [
        'mc_name',
        'mc_description'
    ];
}
