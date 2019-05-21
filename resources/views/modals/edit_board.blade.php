<div id="edit-modal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    Edit a board
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="edit-form" method="POST" action="" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <input type="hidden" name="author_id" value="{{ $user->id }}" required>
                    <input type="hidden" id="edit-id" name="id" required>
                    <div class="form-group">
                        <label for="name-edit">
                            Board name
                        </label>
                        <input id="name-edit" name="name" type="text" value="{{ old('name') }}" maxlength="20" class="form-control" required>

                    </div>
                    <div class="form-group">
                        <label for="description-edit">
                            Board description
                        </label>
                        <textarea rows="5" id="description-edit" name="description" type="text" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="name">
                            Board image
                        </label>
                        <input id="image" name="image" type="file" class="form-control">
                        <img id="image-edit" src="" class="img-fluid">
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
        $('#edit-board-button').on('click', function () {
            var description = $(this).data('description');
            var image = $(this).data('image');
            var name = $(this).data('name');
            var id = $(this).data('id');

            $('#edit-id').val(id);
            $('#edit-form').attr('action', '/boards/update');
            $('#name-edit').val(name);
            $('#description-edit').val(description);
            $('#image-edit').attr('src', image);

        });

        function readURL(input) {

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#image-edit').attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#image").change(function() {
            readURL(this);
        });
    })
</script>
