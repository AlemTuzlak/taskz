<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BoardList
 * @property string name
 * @package App
 */
class BoardList extends Model {

    protected $table = 'board_lists';

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'board_id'
    ];

    public function tasks(){
        return $this->hasMany(Task::class,'board_list_id');
    }

    public function board(){
        return $this->belongsTo('App\Board');
    }


}