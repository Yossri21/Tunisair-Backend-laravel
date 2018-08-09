<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    protected  $fillable =['user_id','id_travel','date','num_travelers','remark'];


}
