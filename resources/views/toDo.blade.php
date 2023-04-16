@extends('app')
@section('title')
    All Tasks
@endsection
@section('content')
    <section class="text-center mt-4">
        <h1>All Tasks</h1>
    </section>
    <x-add-form/>
    @if(count($todos) === 0)
        <div class="text-center">
            <h3>You have no to do's</h3>
        </div
    @else
    <x-all-tasks-table
        :todos="$todos"
    />
    @endif
@endsection


