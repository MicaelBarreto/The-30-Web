<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nationality extends Model
{
    protected $connection = 'mysql';
    
	protected $fillable = [
		'name',
		'description',
		'image'
    ];

    public function character()
	{
		return $this->hasMany(\App\Models\Character::class);
    }
}
