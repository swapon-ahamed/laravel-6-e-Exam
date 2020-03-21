<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Questionset extends Model
{
   public static function getQuestionSetNameById($id){
   	$set = Questionset::find(1)->where('id', $id)->get();
   	return $set[0]['title'];
   }
}
