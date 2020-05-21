@extends('layouts.master')

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-8">
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('study.select-subject') }}">Study</a>
                </li>
                <li class="active">
                    <strong>Question</strong>
                </li>
            </ol>
        </div>
    </div>

    <div class="wrapper wrapper-content animated">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">

<div id="page-wrap">

        <h1>Your Test is started</h1>
        
      

        <form action="grade.php" method="post" id="quiz">
        
            <ol>

                  @foreach($questions as $question)
            
                <li>
                
                    <h3> {{ $question->question  }} </h3>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A) {{ $question->option1 }} </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) {{ $question->option2 }}</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C) {{ $question->option3 }}</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D) {{ $question->option4 }}</label>
                    </div>
                
                </li>
                
                @endforeach
            
            </ol>
            
            <input type="submit" value="Submit Quiz" />
        
        </form>
    
    </div>


                   
                </div>
            </div>
        </div>
    </div>

@endsection

@section('custom-js')
@endsection

