<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testquestions extends Model
{
    //
    protected $table = "testquestions";


    public function template(){
        return $this->belongsTo(QuestionTemplate::class, 'question_template_id');
	}

    public function questionType(){
        return $this->belongsTo(QuestionType::class);
    }

	public function subject(){
        return $this->belongsTo(Subject::class);
	}
}
