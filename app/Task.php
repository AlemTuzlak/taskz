<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Task
 * @property string description
 * @property string name
 * @property boolean is_completed
 * @package App
 */
class Task extends Model {

    protected $table = 'tasks';

    /**
     * @var array
     */
    protected $fillable = [
        'description',
        'name',
        'board_list_id',
        'is_completed',
    ];

    public function boardList(){
        return $this->belongsTo('App\BoardList');
    }


}