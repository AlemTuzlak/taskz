<div class="col-md-2 mb30">
    <div class="card silver-border">
        <div class="card-header text-center">
            {{ $list->name }}
        </div>
        <div class="card-body pd0">


            <ul class="list-group list-group-flush text-white">
                @if(!$list->tasks)
                    <li class="list-group-item pd0">
                        <div class="background-transparent pd0">
                            No tasks yet! Create a new one!
                        </div>
                    </li>
                @else
                    @foreach($list->tasks as $task)
                        @include('tasks.card', compact($task))
                    @endforeach
                @endif

            </ul>
        </div>
        <div class="card-footer text-center">

            <button data-id="{{ $list->id }}" data-toggle="modal"
                    data-target="#task-modal"
                    class="create-task-button btn btn-success">
                Add Task
            </button>

        </div>
    </div>
</div>