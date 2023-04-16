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
                    <input class="form-control" name="from_date" type="date" placeholder="from" required value="{{$from}}">
                    @if ($errors->has('from_date'))
                        <span class="text-danger">{{ $errors->first('from_date') }}</span>
                    @endif
                </div>
                <div class="d-flex flex-column">
                    <label for="name">To</label>
                    <input class="form-control"  name="to_date" type="date" placeholder="from" required value="{{$to}}">
                    @if ($errors->has('to_date'))
                        <span class="text-danger">{{ $errors->first('to_date') }}</span>
                    @endif
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


