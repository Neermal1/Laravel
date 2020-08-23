<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Albums extends Model
{
class Album extends Model
{
    protected $table = 'albums';

    protected $fillable = array('name','description','cover_image');

         public function imageable()
    {
        return $this->morphTo();
    }

}
