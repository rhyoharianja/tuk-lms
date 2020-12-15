<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Setting extends Model
{
    use HasFactory, Notifiable;

    protected $table = "media_publisher";

    protected $fillable = [
        'company_name',
        'company_ico',
        'company_logo',
        'company_address',
        'company_phone',
        'company_email',
        'company_fb',
        'company_twitter',
        'company_linkedin',
        'company_description',
        'company_lat',
        'company_long',
        'copyright',
        'last_update'
    ];
}
