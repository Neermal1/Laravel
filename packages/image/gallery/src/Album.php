<?php

namespace Image\Gallery;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{

    protected $fillable = ['title'];

    public function photo()
    {
        return $this->morphMany('Photo', 'imageable');
    }
}
