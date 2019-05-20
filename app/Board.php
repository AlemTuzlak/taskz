<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Board
 * @property string image
 * @property string name
 * @property string description
 * @property BoardList $list
 * @package App
 */
class Board extends Model {

    protected $table = 'boards';

    /**
     * @var array
     */
    protected $fillable = [
        'description',
        'name',
        'author_id',
        'image'
    ];

    public function lists(){
        return $this->hasMany(BoardList::class,'board_id');
    }


}