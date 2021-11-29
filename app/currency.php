<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class currency extends Model
{

    protected $primarykey= 'iso';
    public $incrementing= false;
    protected $filable = [
        'iso',
       
    ];
}
