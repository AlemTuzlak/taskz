<?php

namespace App\Http\Controllers;

use App\Board;
use App\BoardList;
use App\Task;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $board = Board::query()->where('id','=', $request->get('id'))->first();

        return view('boards.index', compact([
            'board'
        ]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /** @var Board $board */
        $board = Board::create($request->all());

        /** Stores the image */
        if ($request->hasFile('image')) {
            $this->storeImage($request, $board);
        }
        $board->save();

        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $board = Board::query()->where('id','=', $request->get('id'))->first();

        $board->name = $request->get('name');
        $board->description = $request->get('description');

        if ($request->hasFile('image')) {
            $this->storeImage($request, $board);

        }
        $board->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy($id)
    {
        $board = Board::query()->where('id', '=', $id)->first();

        /** @var BoardList $list */
        foreach ($board->lists as $list)
        {
            /** @var Task $task */
            foreach ($list->tasks as $task)
                $task->delete();
            $list->delete();
        }
        $board->delete();

        return redirect()->back();
    }

    /**
     * @param Request $request
     * @param $board
     */
    public function storeImage(Request $request, $board)
    {
        $image = $request->file('image');
        $name = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $name);
        $board->image = '/images/' . $name;
    }
}
