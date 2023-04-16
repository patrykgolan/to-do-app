<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ToDo extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name',
        'status', // by default 1 is 'To Do' and 2 is 'Completed'
        'completed_at'
    ];

    protected $casts = [
        'name' => 'string',
        'status' => 'integer',
        'completed_at' => 'date',
    ];

    public static function createNewToDo(string $name) :self
    {
        return self::create([
            'name' => $name,
            'status' => 1,
        ]);
    }
}
