<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{

    protected $fillable = [

        'application_id',
        'questionnaire_id',
        'answer_id',


        'email',
        'token'


    ];

    public function application(){

        return $this-> belongsTo('App\Application');

    }

    public function questionnaire(){

        return $this-> belongsTo('App\Questionnaire');

    }


    public function answer(){

        return $this-> belongsTo('App\Answer');

    }

}
