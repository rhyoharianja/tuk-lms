<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class MPublisher extends Model
{
    use HasFactory, Notifiable;

    protected $table = "media_publisher";

    protected $fillable = [
        'pu_company',
        'pu_photo',
        'pu_since',
        'pu_email',
        'pu_phone',
        'pu_address',
        'pu_nationality',
        'pu_synopsis',
        'pu_active',
        'pu_verified'
    ];
}
