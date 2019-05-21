<div id="list-modal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    Create a board
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{ action('BoardListsController@store') }}" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <input type="hidden" name="board_id" value="{{ $board->id }}" required>

                    <div class="form-group">
                        <label for="name">
                            List name
                        </label>
                        <input id="name" name="name" type="text" value="{{ old('name') }}" maxlength="30" class="form-control" required>

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">
                        Save changes
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>