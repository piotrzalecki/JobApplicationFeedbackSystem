@extends('layouts.admin')

@section('header')
    Edit feedback
@stop



@section('content')



    <div>

        {!! Form::model($feedback, ['method'=>'PATCH', 'action'=>['FeedbacksController@update', $feedback->id]]) !!}



        <div class="form-group">
            {{ Form::label('questionnaire_id','Questionnaire:') }}
            {{ Form::select('questionnaire_id',$questionnaires, null,['class' => 'form-control']) }}
        </div>



        <div class="form-group">
            {{ Form::label('email','Email:') }}
            {{ Form::email('email', null, ['class' => 'form-control']) }}
        </div>
            <br>
            {!! Form::submit('Update questionnaire',['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}

            {!! Form::close() !!}



            {!! Form::open(['method'=>'DELETE', 'action'=>['FeedbacksController@destroy', $feedback->id]]) !!}

            <br>

            {!! Form::submit('Delete address',['class' => 'btn btn-danger']) !!}

            {!! Form::close() !!}

        </div>

        <!-- The Picture Popup Modal -->
        <div id="myModal2" class="modal">

            <!-- The Close Button -->
            <span class="close">&times;</span>

            <!-- Modal Content (The Image) -->
            <img class="modal-content" id="img01">

            <!-- Modal Caption (Image Text) -->
            <div id="caption">


            </div>

        </div>



@stop