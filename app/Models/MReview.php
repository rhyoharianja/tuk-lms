<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class MReview extends Model
{
    use HasFactory, Notifiable;

    protected $table = "media_reviews";

    protected $fillable = [
        'reviewer_id',
        'reviewer_name',
        'ebook_id',
        'rating',
        'comment',
        'is_approved'
    ];
}
