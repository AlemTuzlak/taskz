<div class="col-md-3">
    <div class="card silver-border mb30 mt30">
        <div class="card-header bg-danger primary-border text-center text-white board-title">
            {{ $board->name }}
        </div>
        <img class="card-img-top" src="{{ $board->image ? $board->image : 'images/pattern.jpg' }}" alt="Card image cap">
        <div class="card-body pd0">
            <p class="card-text pd10">
                {{ $board->description }}
            </p>
            @inject(boardService, App\Services\BoardService)
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    Number of lists: {{ count($board->lists) }}
                </li>
                <li class="list-group-item">
                    Number of tasks: {{ $boardService->numberOfTasks($board->id) }}
                </li>
                <li class="list-group-item">
                    Incomplete tasks: {{ $boardService->numberOfIncompletedTasks($board->id) }}
                </li>
            </ul>
        </div>
        <div class="card-footer text-center">
            <button id="edit-board-button" data-toggle="modal" data-target="#edit-modal"
                    data-id="{{ $board->id }}"
                    data-name="{{ $board->name }}"
                    data-description="{{ $board->description }}"
                    data-image="{{ $board->image }}"
                    class="btn btn-info">
                <i class="fas fa-edit"></i>
            </button>

            <form class="inline" method="GET" action="{{ route('board') }}">
                <input type="hidden" name="id" value="{{ $board->id }}">
                <button class="btn btn-primary">
                    Open board
                </button>
            </form>

            <form class="inline" method="POST" action="{{ action('BoardController@destroy', $board->id) }}">
                @csrf
                <button class="btn btn-danger confirm-dialog">
                    <i class="fas fa-trash"></i>
                </button>
            </form>
        </div>
    </div>
</div>

