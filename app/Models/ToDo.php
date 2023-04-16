<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Collection;

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
        'completed_at' => 'datetime',
    ];

    public static function createNewToDo(string $name) :self
    {
        // create new one
        return self::create([
            'name' => $name,
            'status' => 1, //uncompleted
        ]);
    }

    public static function getAllUncompleted() :Collection
    {
        // status 1 is uncompleted
        return self::whereStatus(1)->get();
    }

    public static function deleteToDO($id): ?bool
    {
        // find by id
        $todo = self::find($id);

        // delete
        return $todo->delete();
    }

    public static function markToDoAsCompleted($id): bool
    {
        // find by id
        $todo = self::find($id);

        // udpate satus to 2 (completed)
        return $todo->update([
            'status' => 2,
            'completed_at' => Carbon::now(),
        ]);
    }
}
