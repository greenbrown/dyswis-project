<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use Uuids;
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'title',
        'story',
    ];

    // public function menus()
    // {
    //     return $this->hasMany(Menu::class, 'category_id')->where('status', 'on');
    // }
}
