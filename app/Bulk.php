<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bulk extends Model
{
    protected $table = 'bulks';
    protected $fillable = [
        'name', 'email',
    ];
}
