<div id="edit-task-modal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    Edit a task
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="edit-form" method="POST" action="{{ action('TaskController@update') }}">
                <div class="modal-body">
                    @csrf
                    <input type="hidden" id="task-id" name="id" required>
                    <div class="form-group">
                        <label for="task-name">
                            Task name
                        </label>
                        <input id="task-name" name="name" type="text" value="{{ old('name') }}" maxlength="20" class="form-control" required>

                    </div>
                    <div class="form-group">
                        <label for="task-description">
                            Task description
                        </label>
                        <textarea rows="5" id="task-description" name="description" type="text" class="form-control"></textarea>
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
        $('#edit-task-button').on('click', function () {
            var description = $(this).data('description');
            var name = $(this).data('name');
            var id = $(this).data('id');

            $('#task-id').val(id);
            $('#task-name').val(name);
            $('#task-description').val(description);

        });
    })
</script>
