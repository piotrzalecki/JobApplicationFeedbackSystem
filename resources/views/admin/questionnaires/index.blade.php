@extends('layouts.admin')

@section('header')
    Questionnaires
    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-info btn-md pull-right" data-toggle="modal" data-target="#myModal">Add Questionnaire</button>

@stop



@section('content')



    @if(count($qures)>0)

        <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Number of questions</th>
                <th>Questions</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
            </thead>
            <tbody>


            @foreach($qures as $qure)

                <tr>
                    <td>{{$qure->id}}</td>
                    <td><a href="{{route('questionnaires.edit', $qure->id)}}">{{$qure->name}}</a></td>
                    <td>{{$qure->questions_number}}</td>
                    <td>
                        <ol>
                            <li>{{$qure->question_1}}</li>
                            <li>{{$qure->question_2}}</li>
                            <li>{{$qure->question_3}}</li>
                            @if(trim($qure->question_4) != '')<li>{{$qure->question_4}}</li>@endif
                            @if(trim($qure->question_5) != '')<li>{{$qure->question_5}}</li>@endif
                            @if(trim($qure->question_6) != '')<li>{{$qure->question_6}}</li>@endif
                            @if(trim($qure->question_7) != '')<li>{{$qure->question_7}}</li>@endif
                        </ol>


                    </td>
                    <td>{{$qure->created_at->diffForHumans()}}</td>
                    <td>{{$qure->updated_at->diffForHumans()}}</td>
                </tr>
            @endforeach

            </tbody>
        </table>


    @else

        <p>There is no questionaire added yet.</p>
    @endif



    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Address</h4>
                </div>
                <div class="modal-body">


                    {!! Form::open(['method'=>'POST', 'action'=>'QuestionnairesController@store']) !!}

                    <div class="form-group">
                        {{ Form::label('name','Questionnaire name:') }}
                        {{ Form::text('name', null, ['class' => 'form-control']) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('questions_number','Number of questions:') }}
                        {{ Form::select('questions_number',array(3=>'three',4=>'four',5=>'five',6=>'six',7=>'seven'),3,['class' => 'form-control', 'id'=>'qq_select']) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('question_1','Question 1:') }}
                        {{ Form::text('question_1', null, ['class' => 'form-control']) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('question_2','Question 2:') }}
                        {{ Form::text('question_2', null, ['class' => 'form-control']) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('question_3','Question 3:') }}
                        {{ Form::text('question_3', null, ['class' => 'form-control']) }}
                    </div>

                    <div class="form-group" id="cq_q4">
                        {{ Form::label('question_4','Question 4:') }}
                        {{ Form::text('question_4', null, ['class' => 'form-control']) }}
                    </div>

                    <div class="form-group" id="cq_q5">
                        {{ Form::label('question_5','Question 5:') }}
                        {{ Form::text('question_5', null, ['class' => 'form-control']) }}
                    </div>

                    <div class="form-group" id="cq_q6">
                        {{ Form::label('question_6','Question 6:') }}
                        {{ Form::text('question_6', null, ['class' => 'form-control']) }}
                    </div>

                    <div class="form-group" id="cq_q7">
                        {{ Form::label('question_7','Question 7:') }}
                        {{ Form::text('question_7', null, ['class' => 'form-control']) }}
                    </div>

                    {!! Form::submit('Create questionnaire',['class' => 'btn btn-primary']) !!}

                    {!! Form::close() !!}






                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>





@stop
