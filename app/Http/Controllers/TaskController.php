<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task = Task::create($request->all());

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
        $task = Task::query()->where('id','=',$request->get('id'))->first();

        $task->name = $request->get('name');
        $task->description = $request->get('description');
        $task->save();

        return redirect()->back();
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function checked($id){
        $task = Task::query()->where('id','=', $id)->first();

        if ($task->is_completed == false)
        {
            $task->is_completed = true;
            $task->save();
        }
        else{
            $task->is_completed = false;
            $task->save();
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::query()->where('id','=', $id)->first();

        $task->delete();

        return redirect()->back();
    }
}
