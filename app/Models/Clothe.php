<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clothe extends Model
{
    protected $connection = 'mysql';
    
	protected $fillable = [
		'name',
		'description',
		'image'
    ];
    
    public function character()
	{
		return $this->belongsToMany(\App\Models\Character::class);
	}
}
