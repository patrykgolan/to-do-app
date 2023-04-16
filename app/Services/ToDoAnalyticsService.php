<?php

namespace App\Services;

use App\Models\ToDo;
use Carbon\Carbon;

class ToDoAnalyticsService
{
    public static function analyticsFromDateToDate($fromDate, $toDate): array
    {
        // assigned dates
        // if there's no query controller will pass null values
        // in that case take last 7 days as default value
        $fromDate = $fromDate ? Carbon::parse($fromDate) : Carbon::now()->subDays(7);
        $toDate = $toDate ? Carbon::parse($toDate) : Carbon::now()->subDay();

        //make sure that from and to will be assigned to beginning and end of the day
        $fromDate->startOfDay();
        $toDate->endOfDay();

        // get data
        $created = ToDo::whereBetween('created_at', [$fromDate, $toDate])->count();
        $completed = ToDo::whereBetween('completed_at', [$fromDate, $toDate])->count();

        // return data
        return [
            'completed' => $completed,
            'created' => $created,
            'from' => $fromDate->toDateString(),
            'to' => $toDate->toDateString()
        ];
    }
}
