<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $connection = 'mysql';

	protected $fillable = [
		'name',
		'description'
    ];

    public function weapon()
	{
		return $this->hasMany(\App\Models\Weapon::class);
    }
}
