<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    public $primarykey ='student_no';
    public $timestamp = true;
    public function user(){
        return $this->belongsTo('App\User');
    }
}
