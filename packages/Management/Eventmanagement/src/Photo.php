<?php

namespace Management\Eventmanagement;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Photo extends Model
{
    protected $fillable = [
        'image','caption','event_id','imageable_id','imageable_type'
    ];

     public function imageable()
    {
        return $this->morphTo();
    }
}
