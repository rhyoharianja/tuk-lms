<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Kyslik\ColumnSortable\Sortable;

class MAuthor extends Model
{
    use HasFactory, Notifiable, Sortable;

    protected $table = "media_authors";

    protected $fillable = [
        'au_fullname',
        'au_photo',
        'au_bod',
        'au_email',
        'au_phone',
        'au_address',
        'au_nationality',
        'au_synopsis',
        'au_active',
        'au_verified'
    ];

    public $sortable = [
        'au_fullname',
        'au_photo',
        'au_bod',
        'au_email',
        'au_phone',
        'au_address',
        'au_nationality',
        'au_synopsis',
        'au_active',
        'au_verified'
    ];

}
