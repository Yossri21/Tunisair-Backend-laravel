<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    protected  $fillable =['user_id','user_name','id_travel','date','numb_travelers','remark','statue'];
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

}
