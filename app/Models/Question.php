<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
	public function questionset(){
		return $this->belongsTo(Questionset::class);
	}

}
