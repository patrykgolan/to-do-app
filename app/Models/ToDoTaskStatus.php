<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ToDoTaskStatus extends Model
{
    // By Default there's two values created with migration,
    // 1 - uncompleted
    // 2 - completed

    protected $fillable = [
      'title',
    ];

    protected $casts = [
        'title' => 'string'
    ];
}
