<?php

namespace Neermal\Staff;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;

class Staff extends Authenticatable
{
    use Notifiable;
    protected $table="staffs";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
 'email', 'name','profile','description','email','address','phone','designation',
        'department_name' ,'joined_date','resigned_date','status'
     ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function staff()
    {
        return $this->hasOne(Staff::class);
    }

}
