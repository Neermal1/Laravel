<?php

namespace Event\Management;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;

class Event extends Model
{
	use Notifiable;
	protected $table="events";

	protected $fillable = [
		'title', 'description','start_date','end_date','start_time','end_time','organizer','authorized_person','phone_no' ,'remark'
	];

      public function photos()
    {
        return $this->morphMany('Photo', 'imageable');
    }
	
}
