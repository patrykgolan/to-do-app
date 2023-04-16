@extends('app')
@section('title')
    Analytics
@endsection
@section('content')
    <h1 class="mt-4 text-center">Analytics</h1>
    <section class="mt-4">
        <form method="GET" action="{{route('todo.analytics')}}">
            <div class="d-flex">
                <div class="d-flex flex-column" >
                    <label for="name">From</label>
                    <input class="form-control" name="from" type="date" placeholder="from" required value="{{$from}}">
                </div>
                <div class="d-flex flex-column">
                    <label for="name">To</label>
                    <input class="form-control"  name="to" type="date" placeholder="from" required value="{{$to}}">
                </div>
                <div >
                    <button class="btn btn-primary mt-4" type="submit">
                        View
                    </button>
                </div>
            </div>
        </form>
    </section>
    <section class="mt-4">
    <h3>Completed Tasks: {{$completed}}</h3>
    <h3>Created Tasks: {{$created}}</h3>
    </section>
@endsection


