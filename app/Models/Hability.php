<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hability extends Model
{
    protected $connection = 'mysql';

    protected $casts = [
		'class_id' => 'int'
	];
    
	protected $fillable = [
		'name',
		'description',
        'class_id'
    ];

    public function character()
	{
		return $this->belongsToMany(\App\Models\Character::class);
    }
    public function class()
	{
		return $this->belongsTo(\App\Models\Class::class);
    }
}
