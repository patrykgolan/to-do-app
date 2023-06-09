<div>
    <form method="POST" action="{{route('to-do.store')}}">
        @csrf
        <div class="row justify-content-center">
            <!-- name -->
            <div class="col-9 d-flex flex-column">
                <label for="name">Task Title</label>
                <input name='name' type="text">
                <!-- errors -->
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <!-- submit button -->
            <div class="col-auto">
                <button class="btn btn-primary btn-block mt-3">
                    Add
                </button>
            </div>
        </div>
    </form>
</div>
