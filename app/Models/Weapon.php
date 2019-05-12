<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weapon extends Model
{
    protected $connection = 'mysql';

    protected $casts = [
		'damage' => 'float',
		'fire_rate' => 'float',
		'critical_chance' => 'float',
		'type_id' => 'int'
	];
    
	protected $fillable = [
		'name',
		'description',
		'damage',
        'fire_rate',
        'critical_chance',
        'type_id'
    ];
    
    public function character()
	{
		return $this->belongsToMany(\App\Models\Character::class);
	}
}
