<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Creature extends Model
{
    protected $connection = 'mysql';

    protected $casts = [
		'damage' => 'float'
	];
    
	protected $fillable = [
		'name',
		'description',
        'damage'
    ];

    public function game()
	{
		return $this->belongsToMany(\App\Models\Game::class);
    }
    public function weapon()
	{
		return $this->belongsToMany(\App\Models\Weapon::class);
    }
}
