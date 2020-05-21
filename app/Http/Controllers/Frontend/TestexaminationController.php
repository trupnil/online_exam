<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Subject;
use App\Model\QuestionTemplate;
use App\Testquestions;
use App\Model\QuestionType;
use App\History;


class TestexaminationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
       // $questionTemplates  = QuestionTemplate::with('department','subject');
         $perPage = $request->perPage ?: 10;

        $questionTemplates =  QuestionTemplate::with('department', 'subject', 'studentType');
         $questionTemplates = $questionTemplates->latest()->paginate($perPage);

        
        //dd($questionTemplates);
          return view('frontend.testexam.index', compact('questionTemplates'));
       

    }

      public function start($testid)
    {
        //
        
         $questions = Testquestions::all();
         //dd($questions);
         return view('frontend.testexam.start',compact('questions'));
    }
      public function savetest(Request $request)
    {
        //
        $request->validate([

            'testquestion_id' => 'required',
            'user_id' => 'required',
            'subject_id' => 'required',
            'question_template_id' => 'required',

        ]);
          

        History::create($request->all());



      

      

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
