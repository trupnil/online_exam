<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    //
     protected $table = "History";

     //fillable Todo

      protected $fillable = ['question_template_id','subject_id','user_id','answer','testquestion_id'];
      
}
