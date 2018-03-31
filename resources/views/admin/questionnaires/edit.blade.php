@extends('layouts.admin')

@section('header')
    Edit questionnaire
@stop



@section('content')



    <div>

        {!! Form::model($qure, ['method'=>'PATCH', 'action'=>['QuestionnairesController@update', $qure->id]]) !!}

        <div class="form-group col-sm-4">
            <div class="form-group">
                {{ Form::label('name','Questionnaire name:') }}
                {{ Form::text('name', null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::label('questions_number','Number of questions:') }}
                {{ Form::select('questions_number',array(3=>'three',4=>'four',5=>'five',6=>'six',7=>'seven'),null,['class' => 'form-control','id'=>'qq_select']) }}
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
            <br>
            {!! Form::submit('Update questionnaire',['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}

            {!! Form::close() !!}



            {!! Form::open(['method'=>'DELETE', 'action'=>['QuestionnairesController@destroy', $qure->id]]) !!}

            <br>

            {!! Form::submit('Delete address',['class' => 'btn btn-danger']) !!}

            {!! Form::close() !!}

        </div>




@stop