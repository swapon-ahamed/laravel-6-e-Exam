<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
   	public static function getSectionNameById($id){
		$clss = Section::find(1)->where('sclass_id', $id)->get();
		return $clss;
	}


}
