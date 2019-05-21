@extends('layouts.app')

@section('content')

    <div class="row justify-content-center ma0">
        <div class="col-md-12">
            <div class="card primary-border">
                <div class="card-header text-white bg-danger primary-border">
                    <h4 class="inline">
                        {{ $board->name }}
                    </h4>
                    <a class="inline float-right btn btn-primary" href="{{ action('HomeController@index') }}">
                        <i class="fas fa-arrow-alt-circle-left"></i>
                        Back
                    </a>
                </div>
                @if(count($board->lists))
                    <div class="card-body">
                        <div class="row">

                            @foreach($board->lists as $list)
                                @include('lists.card', compact($list))
                            @endforeach
                        </div>
                    </div>
                @else
                    <div class="card-body text-center">
                        You have no lists yet, create a new one!
                    </div>
                @endif
                <div class="card-footer">
                    <button id="board-button" data-toggle="modal" data-target="#list-modal"
                            class="float-right btn btn-info">
                        Create a list
                    </button>
                </div>
            </div>
        </div>
    </div>
    @include('modals.edit_task')
    @include('modals.create_task')
    @include('modals.create_list')
@endsection
