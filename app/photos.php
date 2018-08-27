<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class photos extends Model
{

    protected $uploads = '../images/';

    protected $fillable=['file'];

    public function getFileAttribute($photo){
        return $this->uploads . $photo;
    }
}
