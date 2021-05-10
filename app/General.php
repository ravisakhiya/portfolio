<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class General extends Model {
	protected $table = 'general';
	protected $fillable = [
		'site_title', 'favicon', 'header_logo', 'footer_logo', 'footer_desc', 'facebook', 'instagram', 'twitter', 'linkedin', 'mobile', 'email', 'address', 'tags',
	];
}
