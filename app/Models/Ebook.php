<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Kyslik\ColumnSortable\Sortable;

class Ebook extends Model
{
    use HasFactory, Notifiable, Sortable;

    protected $table = "ebooks";

    protected $fillable = [
        'b_title',
        'b_subtitle',
        'b_cover',
        'b_synopsis',
        'b_slug',
        'isbn',
        'b_pin',
        'author_id',
        'publisher_id',
        'media_group_id',
        'media_cat_id',
        'b_featured',
        'b_private',
        'b_active',
        'b_deleted',
        'b_created_by'
    ];

    protected $sortable = [
        'b_title',
        'b_subtitle',
        'b_cover',
        'b_synopsis',
        'b_slug',
        'isbn',
        'b_pin',
        'author_id',
        'publisher_id',
        'media_group_id',
        'media_cat_id',
        'b_featured',
        'b_private',
        'b_active',
        'b_deleted',
        'b_created_by'
    ];

    public function getFilesList() {
        return $this->hasMany(MFile::class, 'medias_id');
    }

    public function authorDetail() {
        return $this->belongsTo(MAuthor::class, 'id', 'author_id');
    }

    public function publisherDetail() {
        return $this->belongsTo(MPublisher::class, 'id', 'publisher_id');
    }

    public function mediaGroup() {
        return $this->belongsTo(MGroup::class, 'id', 'media_group_id');
    }

    public function mediaCategory() {
        return $this->belongsTo(MCategory::class, 'id', 'media_cat_id');
    }

    public function getReviewList() {
        return $this->hasMany(MReview::class, 'ebook_id');
    }

    public function getFavoriteList() {
        return $this->hasMany(MFavorite::class, 'ebook_id');
    }
}
