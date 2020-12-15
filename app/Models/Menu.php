<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Kyslik\ColumnSortable\Sortable;

class Menu extends Model
{
    use HasFactory, Notifiable, Sortable;

    protected $table = "menus";

    protected $fillable = [
        'menu_name',
        'menu_desc',
        'menu_icon',
        'menu_route',
        'menu_type',
        'menu_level',
        'menu_order',
        'menu_active',
        'parent_id'
    ];

    public $sortable = [
        'menu_name',
        'menu_desc',
        'menu_icon',
        'menu_route',
        'menu_type',
        'menu_level',
        'menu_order',
        'menu_active',
        'parent_id'
    ];

    public function menu_children() {
        return $this->hasMany(Menu::class, 'parent_id');
    }

    public function menu_parent() {
        return $this->belongsTo(Menu::class, 'parent_id');
    }
}
