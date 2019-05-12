<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $connection = 'mysql';

    protected $casts = [
		'strength' => 'int',
		'perception' => 'int',
		'endurence' => 'int',
		'charisma' => 'int',
		'intelligence' => 'int',
		'agility' => 'int',
		'luck' => 'int',
		'character_id' => 'int'
	];
    
	protected $fillable = [
		'strength',
		'perception',
        'endurence',
        'charisma',
        'intelligence',
        'agility',
        'luck',
        'character_id'
    ];

    public function character()
    {
        return $this->belongsTo(\App\Models\Character::class);
    }
}
