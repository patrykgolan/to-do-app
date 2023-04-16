<div>
    <form method="POST">
        @csrf
        <div class="row justify-content-center">
            <div class="col-9 d-flex flex-column">
                <label for="name">Task Title</label>
                <input name='name' type="text">
            </div>
            <div class="col-auto align-self-end d-grid g-3">
                <button class="btn btn-primary btn-block">
                    Add
                </button>
            </div>
        </div>
    </form>
</div>
