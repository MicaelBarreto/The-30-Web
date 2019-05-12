<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $connection = 'mysql';

    protected $casts = [
		'life_points' => 'float',
		'level' => 'int',
		'xp' => 'float',
		'nationality_id' => 'int',
		'age' => 'int',
        'sex' => 'int',
        'class_id' => 'int',
        'user_id' => 'int'
	];
    
	protected $fillable = [
		'life_points',
		'level',
		'name',
		'nationality_id',
		'age',
        'sex',
        'apearence',
        'history',
        'xp',
        'class_id',
        'user_id'
    ];
    
    public function attribute()
	{
		return $this->hasOne(\App\Models\Attribute::class);
	}
	public function user()
	{
		return $this->belongsTo(\App\Models\User::class);
    }
    public function class()
	{
		return $this->belongsTo(\App\Models\Class::class);
    }
    public function nationality()
	{
		return $this->belongsTo(\App\Models\Nationality::class);
    }
    public function game()
	{
		return $this->belongsTo(\App\Models\Game::class);
    }
    public function clothe()
	{
		return $this->belongsToMany(\App\Models\Clothe::class);
    }
    public function weapon()
	{
		return $this->belongsToMany(\App\Models\Weapon::class);
    }
    public function hability()
	{
		return $this->belongsToMany(\App\Models\Hability::class);
    }
}
