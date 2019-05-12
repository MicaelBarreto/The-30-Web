<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Class extends Model
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
    public function hability()
    {
        return $this->hasMany(\App\Models\Hability::class);
    }
}
