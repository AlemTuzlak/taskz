<?php

namespace App\Services;

use App\Board;

class BoardService{

    /**
     * @param $id
     * @return int
     */
    public function numberOfTasks($id){

        $board = Board::query()->where('id','=', $id)->first();

        $taskNumber = 0;

        foreach ($board->lists as $list)
            foreach ($list->tasks as $task)
                $taskNumber++;

        return $taskNumber;
    }

    /**
     * @param $id
     * @return int
     */
    public function numberOfIncompletedTasks($id){

        $board = Board::query()->where('id','=', $id)->first();

        $taskNumber = 0;

        foreach ($board->lists as $list)
            foreach ($list->tasks as $task)
                if (!$task->is_completed)
                    $taskNumber++;

        return $taskNumber;
    }
}