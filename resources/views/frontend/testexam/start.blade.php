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

        <h1>Your Test is started {{ Auth::user()->id }}</h1>
        
      

        <form action="" method="POST" >

        
            <ol>

               

                  @foreach($questions as $question)

                
            
                 
                      
                <li>
                
                    <h3> {{ $question->question  }} </h3>

                <input type="hidden" name="question_id" value="{{ $question->id }}" id="question_id">
                       <input type="hidden" name="subject_id" value="{{ $question->subject_id }}" id="subject_id">
                       <input type="hidden" name="question_template_id" value="{{ $question->question_template_id }}" id="question_template_id">
                       <input type="hidden" name="user_id" value="{{ Auth::user()->id  }}" id="user_id">
                    
                    <div>
                        <input type="radio" name="answer{{$question->id}}" value="{{ $question->option1 }}" onclick="check(this.value)" />
                        <label for="question-1-answers-A">A) {{ $question->option1 }} </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="answer{{$question->id}}" value="{{ $question->option1 }}" onclick="check(this.value)" />
                        <label for="question-1-answers-B">B) {{ $question->option2 }}</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="answer{{$question->id}}"  value="{{ $question->option1 }}" onclick="check(this.value)" />
                        <label for="question-1-answers-C">C) {{ $question->option3 }}</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="answer{{$question->id}}" value="{{ $question->option1 }}" onclick="check(this.value)" />
                        <label for="question-1-answers-D">D) {{ $question->option4 }}</label>
                    </div>
                
                </li>
                 <input type="button" value="Lock"  />
                
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

<script type="text/javascript">
    



function check($value)
{
        var answer = $value;


        $(document).ready(function(){

            
          var testquestion_id = $('#question_id').val();
          var user_id = $('#user_id').val();
          var subject_id = $('#subject_id').val();
          var question_template_id = $('#question_template_id').val();
          $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
    });

           $.ajax({
                url:"{{ route('Frontend.savetest') }}",
                type:"POST",
                data:{'testquestion_id':testquestion_id, 'user_id': user_id, 'subject_id': subject_id,'question_template_id':question_template_id,'answer':answer },
                success:function(response)
                {
                    alert(response);
                }


           });   

        });

        //Ajax remaing

}


</script>
@endsection

