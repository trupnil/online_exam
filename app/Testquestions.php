<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Model\Subject;
use App\Model\Question;
use App\Model\QuestionTemplate;
use App\Model\QuestionType;


class Testquestions extends Model
{
    //
    protected $table = "testquestions";

    protected $fillable = ['question', 'slug', 'question_template_id', 'question_type_id', 'subject_id', 'is_active', 'is_deleted', 'description', 'image','option1','option2','option3','option4','right_ans',];


    public function template(){
        return $this->belongsTo(QuestionTemplate::class, 'question_template_id');
	}

    public function questionType(){
        return $this->belongsTo(QuestionType::class);
    }

	public function subject(){
        return $this->belongsTo(Subject::class);
	}

    public function QuestionTemplate(){
        return $this->belongsTo(QuestionTemplate::class);
    }
}
