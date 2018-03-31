<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{

    protected $fillable = [

        'feedback_id',
        'answer_1',
        'answer_2',
        'answer_3',
        'answer_4',
        'answer_5',
        'answer_6',
        'answer_7'


    ];


}
