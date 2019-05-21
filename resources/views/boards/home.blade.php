@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card primary-border">
                <div class="card-header text-center text-white bg-danger primary-border">
                    <h4>
                        Boards
                    </h4>
                </div>

                @if(!count($user->boards))
                <div class="card-body text-center">
                    You have no boards yet, create a new one!
                </div>
                @else
                <div class="row mg0">
                    @foreach($user->boards as $board)
                        @include('boards.card', compact($board))
                    @endforeach
                </div>

                @endif
                <div class="card-footer">
                    <button id="board-button" data-toggle="modal" data-target="#board-modal" class="float-right btn btn-info">Create a board</button>
                </div>
            </div>
        </div>
    </div>
</div>
    @include('modals.edit_board')
    @include('modals.create_board')
@endsection
