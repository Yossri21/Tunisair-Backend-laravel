<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class requestclient extends Model
{
    protected $fillable = ['name', 'email' , 'phone' , 'message' , 'statue'];

}
