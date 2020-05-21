@extends('layouts.master')

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-8">
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('practice.select-subject') }}">Exam</a>
                </li>
            </ol>
        </div>
    </div>

    <div class="wrapper wrapper-content animated">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Test Exam</h5>

                    </div>

                    <div class="ibox-content">
                        @include('flash-messages.flash-messages')
                        
                          <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Department</th>
                                        <th>Subject</th>
                                        
                                        <th>Total Question</th>
                                     
                                        <th>Total Marks</th>
                                        <th>Negative Marks</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($questionTemplates as $questionTemplate)
                                        <tr>
                                            <td>{{ ucfirst($questionTemplate->name) }}</td>
                                            <td>{{ ucfirst($questionTemplate->department->name) }}</td>
                                            <td>{{ ucfirst($questionTemplate->subject->name) }}</td>
                                          
                                            <td>{{ ucfirst($questionTemplate->total_questions) }}</td>
                                          
                                            <td>{{ ucfirst($questionTemplate->total_marks) }}</td>
                                            <td>{{ ucfirst($questionTemplate->negative_marks) }}</td>
                                              <td class="text-center">

                                                <a href="{{ route('startexam',$questionTemplate->id) }}" title="start" class="btn btn-info cus_btn">

                                                <i class="fa fa-pencil-square-o"></i> <strong>START EXAM</strong>
                                                </a>

                                             
                                            </td>
                                           
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>

                        <div class="dataTables_info table-pagination" id="DataTables_Table_0_info" role="status" aria-live="polite">
                            <div class="m-r-lg">
                                Showing {{ $questionTemplates->firstItem() }} to {{ $questionTemplates->lastItem() }} of {{ $questionTemplates->total() }} entries
                            </div>
                            {{ $questionTemplates->appends(['perPage' => request('perPage'), 'department' => request('department'), 'subject' => request('subject'), 'quiestionType' => request('questionType'), 'keyword' => request('keyword')])->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom-js')
   
@endsection


