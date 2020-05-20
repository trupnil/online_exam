<div class="row">
    <div class="col-sm-6">

        <div class="form-group">
            <label>Exam</label>
            <select class="form-control" name="question_template_id">

                <option value="">Select Exam</option>
                @foreach($questionTemplates as $template)
                    <option @if( isset($question) and $question->question_template_id == $template->id) selected @endif value="{{ $template->id }}">{{ $template->name}}</option>
                @endforeach

            </select>
            @error('question_template_id') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label>Subject</label>
            <select class="form-control" name="subject_id">

                <option value="">Select Subject</option>
                @foreach($subjects as $subject)
                    <option @if( isset($question) and $question->subject_id == $subject->id) selected @endif value="{{ $subject->id }}">{{ $subject->name }}</option>
                @endforeach

            </select>
            @error('subject_id') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
        </div>



        <div class="form-group">
            <label>Question Type<span class="required-star"> *</span></label>
            <select class="form-control" name="question_type_id">

                <option value="">Select Type</option>
                @foreach($questionTypes as $questionType)
                    <option @if( isset($question) and $question->question_type_id == $questionType->id) selected @endif value="{{ $questionType->id }}">{{ $questionType->name}}</option>
                @endforeach

            </select>
            @error('question_type_id') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label>Question<span class="required-star"> *</span></label>
            <input type="text" placeholder="Question" value="{{ isset($question->question) ? $question->question : old('question')}}" name="question" class="form-control">
            @error('question') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label>Explanation </label>
            <div class="ibox-content no-padding">
                <textarea name="description" id="textarea2" class="form-control summernote" rows="2">{{ isset($question->description) ? $question->description : old('description')}} </textarea>
                @error('description') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="form-group">
            <label>Image</label>
            <input type="hidden" name="oldImage" value="{{ isset($question->image) ? $question->image :''}}">
            <input type="file" name="img" class="form-control">
            @error('img') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
            @if(!empty($question->image))
                <img src="{{ asset('admin/uploads/images/question/'.$question->image) }}" style="margin-top:10px" width="80" height="100">
            @endif
        </div>

    </div>

    <div class="col-sm-6">

      <div class="row">
            <div class="form-group">
            <label>option 1<span class="required-star"> *</span></label>
            <input type="text" placeholder="option 1" value="{{ isset($question->question) ? $question->question : old('question')}}" name="option1" class="form-control">
            @error('question') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label>option 2<span class="required-star"> *</span></label>
            <input type="text" placeholder="option 2" value="{{ isset($question->question) ? $question->question : old('question')}}" name="option2" class="form-control">
            @error('question') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label>option 3<span class="required-star"> *</span></label>
            <input type="text" placeholder="option 3" value="{{ isset($question->question) ? $question->question : old('question')}}" name="option3" class="form-control">
            @error('question') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label>option 4<span class="required-star"> *</span></label>
            <input type="text" placeholder="option 4" value="{{ isset($question->question) ? $question->question : old('question')}}" name="option4" class="form-control">
            @error('question') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
        </div>
          <div class="form-group">
            <label>Right option<span class="required-star"> *</span></label>

            <select class="form-control" name="right_ans">

                <option value="">Select right answer</option>
               
                    <option value="1"> option 1 </option>
                    <option value="2"> option 2 </option>
                    <option value="3"> option 3 </option>
                    <option value="4"> option 4 </option>
              

            </select>
           
           
        </div>
        </div>
    </div>

</div>

@section('custom-js')
   
@endsection
