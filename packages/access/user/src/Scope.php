<?php

namespace Access\User;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Scope extends Model
{
    protected $fillable = [
        'name', 'description',
    ];

    public function users()
    {
    	return $this->hasMany(User::class);
    }
}
