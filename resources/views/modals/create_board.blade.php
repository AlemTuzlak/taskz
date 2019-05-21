<div id="board-modal" class="modal" tabindex="-1" role="dialog">
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
            <form method="POST" action="{{ action('BoardController@store') }}" enctype="multipart/form-data">
            <div class="modal-body">
                @csrf
                <input type="hidden" name="author_id" value="{{ $user->id }}" required>

                    <div class="form-group">
                        <label for="name">
                            Board name
                        </label>
                        <input id="name" name="name" type="text" value="{{ old('name') }}" maxlength="20" class="form-control" required>

                    </div>
                    <div class="form-group">
                        <label for="description">
                            Board description
                        </label>
                        <textarea rows="5" id="description" name="description" type="text" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="name">
                            Board image
                        </label>
                        <input id="image-2" name="image" type="file" class="form-control">
                        <img src="" id="image-upload" class="img-fluid">
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
        function readURL2(input) {

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#image-upload').attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#image-2").change(function() {
            readURL2(this);
        });
    })
</script>