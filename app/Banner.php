<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model {
	protected $table = 'Banner';
	protected $fillable = [
		'title', 'detail', 'image',
	];
}
