<div id="task-modal" class="modal" tabindex="-1" role="dialog">
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
            <form method="POST" action="{{ action('TaskController@store') }}">
                <div class="modal-body">
                    @csrf
                    <input id="task-id2" type="hidden" value="" name="board_list_id" required>

                    <div class="form-group">
                        <label for="name">
                            Task name
                        </label>
                        <input id="name" name="name" type="text" value="{{ old('name') }}" maxlength="20" class="form-control" required>

                    </div>
                    <div class="form-group">
                        <label for="description">
                            Task description
                        </label>
                        <textarea rows="5" id="description" placeholder="{{ old('description') }}" name="description" type="text" class="form-control"></textarea>
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

<script>
    $(document).ready(function () {
        $('.create-task-button').on('click', function () {

            var id = $(this).data('id');

            $('#task-id2').attr('value',id);

        });
    })
</script>