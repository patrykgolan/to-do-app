<?php

namespace App\Http\Controllers;

use App\Models\ToDo;
use App\Services\ToDoAnalyticsService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use function Termwind\render;

class ToDoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return only uncompleted ones
        $toDos = ToDo::getAllUncompleted();

        // return view
        return view('toDo', $toDos)->with('todos', $toDos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
                // unique will be applied only for non-soft deleted items
                Rule::unique('to_dos', 'name')
                    ->where(function ($query){
                        return $query->whereNull('deleted_at')->orWhereNotNull('deleted_at');
                    })
            ]
        ]);

        ToDo::createNewToDo($request->name);

         return redirect()->route('to-do.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ToDo::deleteToDO($id);

        return redirect()->route('to-do.index');
    }

    public function markAsCompleted(string $id)
    {
        ToDo::markToDoAsCompleted($id);

        return redirect()->route('to-do.index');
    }

    public function analytics(Request $request)
    {
        // validation will help to make sure queries are type of dates
        // if not query will be removed from url
        $request->validate([
           'from_date' => 'sometimes|date|before_or_equal:to_date',
           'to_date' => 'sometimes|date|after_or_equal:from_date',
        ]);


        // service should return array with following attributes completed, created, from, to
        $data = ToDoAnalyticsService::analyticsFromDateToDate($request->from_date, $request->to_date);

        return view('analytics', $data);
    }
}
