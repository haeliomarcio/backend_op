<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Types extends Model
{
    protected $table = 'types';
    protected $fillable = [
        'journalist_id',
        'name',
    ];
}
