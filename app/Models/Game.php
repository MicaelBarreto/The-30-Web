<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $connection = 'mysql';
    
	protected $fillable = [
		'name',
		'description',
		'password'
    ];

    public function user()
    {
        return $this->belongsToMany(\App\Models\User::class)->withPivot('type');
    }
    public function creature()
    {
        return $this->belongsToMany(\App\Models\Creature::class);
    }
    public function character()
    {
        return $this->hasMany(\App\Models\Character::class);
    }
}
