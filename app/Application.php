<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [

        'company_id',
        'position_id',
        'address_id',
        'photo_id',
        'comment',
        'job_app_response'

    ];

    public function company(){

        return $this-> belongsTo('App\Company');

    }

    public function position(){

        return $this-> belongsTo('App\Position');

    }

    public function photo(){

        return $this-> belongsTo('App\Photo');

    }

    public function address(){

        return $this-> belongsTo('App\Address');

    }

    public function feedback(){
        return $this-> hasOne('App\Feedback');
    }

}
