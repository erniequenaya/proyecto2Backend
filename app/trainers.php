<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trainers extends Model
{
    //
    protected $table= 'trainers';
    protected $fillable = ['nombre','specialty'];
}
