<?php

namespace Management\Eventmanagement;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;

class Eventmanagement extends Model
{
	use Notifiable;
	protected $table="events";

	protected $fillable = [
		'title', 'description','start_date','end_date','start_time','end_time','organizer','authorized_person','phone_no' ,'remark'
	];

   
	  public function image()
    {
        return $this->morphOne('Management\Eventmanagement', 'imageable');
    }
}
