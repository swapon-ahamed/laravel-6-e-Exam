<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sectionquestionset extends Model
{
   	public static function getQuestionSetId($id){
		$qsets = Sectionquestionset::where('sclass_id', $id)->get();
		return $qsets;
	}
}
