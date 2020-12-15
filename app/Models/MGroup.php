<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class MGroup extends Model
{
    use HasFactory, Notifiable;

    protected $table = "media_group";

    protected $fillable = [
        'mg_name',
        'mg_description'
    ];

}
