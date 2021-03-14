<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $fillable = [
        'journalist_id',
        'type_id',
        'title',
        'description',
        'content',
        'image'
    ];
}
