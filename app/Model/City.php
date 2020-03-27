<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model {
	protected $table    = 'Contacts';
	protected $fillable = [
		'name',
		'phone',
		'email',
		'message',
	];

}
