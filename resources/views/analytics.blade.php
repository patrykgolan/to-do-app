@extends('app')
@section('title')
    Analytics
@endsection
@section('content')
    <h1 class="mt-4 text-center">Analytics</h1>
    <!-- Form -->
    <section class="mt-4">
        <!-- Form will send a get request to add params from and to, otherwise last 7 days will be shown -->
        <x-analytics-choose-dates-form
            :from="$from"
            :to="$to"
        />
    </section>
    <!-- Analytics Data -->
    <section class="mt-4">
    <h3>Completed Tasks: {{$completed}}</h3>
    <h3>Created Tasks: {{$created}}</h3>
    </section>
@endsection


