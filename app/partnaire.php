<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class partnaire extends Model
{
    protected $fillable = ['numero', 'ref' , 'objet' , 'datelimite' , 'statu'];
}
