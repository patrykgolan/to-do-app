<section class="mt-4">
    <ul class="list-group">
        @foreach($todos as $todo)
            <li class="list-group-item d-flex justify-content-between">
                <div class="d-flex">
                    <!-- checkbox/form for completing task, form will be submited on checkbox click  -->
                    <form id="mark_as_completed_{{$todo->id}}" method="POST" action="{{ route('to-do-to-do.mark-as-completed', $todo->id)}}">
                        @csrf
                        <input type="checkbox" class="to-do-checkbox" onclick="submitFormMarkAsCompleted({{$todo->id}})">
                    </form>
                    <!-- name -->
                    <span class="mx-4"> {{$todo->name}}</span>
                </div>
                <div>
                    <!-- delete form-->
                    <form method="POST" action="{{ route('to-do.destroy', $todo->id) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">
                            Delete
                        </button>
                    </form>
            </div>
        </li>
    @endforeach
</ul>
</section>
