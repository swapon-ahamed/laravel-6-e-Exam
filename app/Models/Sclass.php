<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sclass extends Model
{
   	public static function getClassNameById($id){
		$clss = Sclass::find(1)->where('id', $id)->get();
		return $clss[0]['name'];
	}
}
