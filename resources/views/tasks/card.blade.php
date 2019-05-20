<li class="list-group-item pd0 @if($task->is_completed) done @else undone @endif no-border">
    <div class="background-transparent pd0">

        <div class="row ma0" style="vertical-align: middle">
            <div class="col-md-8">
                <div style="padding: 5px">
                    {{ $task->name }}
                    <br>
                    {!! nl2br($task->description) !!}
                </div>
            </div>
            <div class="col-md-4">
                <button id="edit-task-button" data-toggle="modal"
                        data-target="#edit-task-modal"
                        data-id="{{ $task->id }}"
                        data-name="{{ $task->name }}"
                        data-description="{{ $task->description }}"
                        class="btn btn-primary w45 mt5">
                    <i class="fas fa-edit"></i>
                </button>

                <form class="inline" method="post" action="{{ action('TaskController@checked', $task->id) }}">
                    @csrf
                    <button class="btn @if($task->is_completed) btn-danger @else btn-success @endif w45 mt5">
                        <i class="fas @if($task->is_completed) fa-times @else fa-check @endif"></i>
                    </button>
                </form>
                <form class="inline" method="POST" action="{{ action('TaskController@destroy', $task->id) }}">
                    @csrf
                    <button class="btn btn-danger confirm-dialog w45 mb5 mt5">
                        <i class="fas fa-trash"></i>
                    </button>
                </form>
            </div>
        </div>

    </div>
</li>
