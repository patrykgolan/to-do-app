<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ToDoTaskStatus extends Model
{
    protected $fillable = [
      'title',
    ];

    protected $casts = [
        'title' => 'string'
    ];
}
