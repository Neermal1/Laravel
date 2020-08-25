<?php

namespace Image\Gallery;

use Illuminate\Database\Eloquent\Model;
use Album;
class Photo extends Model
{

    protected $fillable = ['imageable_id', 'imageable_type', 'filename'];

    public function imageable()
    {
        return $this->morphTo();
    }

}
