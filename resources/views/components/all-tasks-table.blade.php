<section class="mt-4">
    <ul class="list-group">
        @foreach($todos as $todo)
            <li class="list-group-item d-flex justify-content-between">
                <div>
                    <input type="checkbox" class="to-do-checkbox">
                    {{$todo->name}}
                </div>
                <div>
                    <button class="btn btn-warning">
                        Edit
                    </button>
                    <form method="POST" action="{{route('to-do.destroy', $todo->id)}}">
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
