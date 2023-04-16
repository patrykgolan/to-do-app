<!-- Form will send a get request to add params from_date and to_date -->
<form method="GET" action="{{route('to-do.analytics')}}">
    <div class="d-flex">
        <!-- From Date -->
        <div class="d-flex flex-column" >
            <label for="name">From</label>
            <input class="form-control" name="from_date" type="date" placeholder="from" required value="{{$from}}">
            <!-- Errors -->
            @if ($errors->has('from_date'))
                <span class="text-danger">{{ $errors->first('from_date') }}</span>
            @endif
        </div>
        <!-- To Date -->
        <div class="d-flex flex-column">
            <label for="name">To</label>
            <input class="form-control"  name="to_date" type="date" placeholder="from" required value="{{$to}}">
            <!-- Errors -->
            @if ($errors->has('to_date'))
                <span class="text-danger">{{ $errors->first('to_date') }}</span>
            @endif
        </div>
        <div >
            <!-- Submit Button -->
            <button class="btn btn-primary mt-4" type="submit">
                View
            </button>
        </div>
    </div>
</form>
