<?php

namespace Image\Gallery;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = ['title'];

    public function photo()
    {
        return $this->morphMany('Image\Gallery', 'imageable');
    }

}
