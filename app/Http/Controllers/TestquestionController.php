<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Model\Option;
use App\Testquestions;
use App\Model\QuestionType;
use App\Model\Department;
use App\Model\Subject;
use App\Model\Question;
use App\Model\QuestionTemplate;
use App\Http\Controllers\Components\fileHandlerComponent;
use Str;


class TestquestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //

        $perPage = $request->perPage ?: 10;
        $keyword = $request->keyword;

        $questions = Testquestions::with('template', 'questionType', 'subject');
        dd($questions);
        // if($keyword){

        //     $keyword = '%'.$keyword.'%';

        //     $questions = $questions->where('question', 'like', $keyword)
        //         ->orWhere('description', 'like', $keyword);
        // }

       // $questions = $questions->latest()->paginate($perPage);

      //  return view('admin.question.index', compact('questions'));
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
