@extends('layouts.admin')

@section('header')
    Edit questionnaire
@stop



@section('content')



    <div>

        {!! Form::model($application, ['method'=>'PATCH', 'action'=>['ApplicationsController@update', $application->id],'files'=>true]) !!}

        <div class="form-group col-sm-4">
            <div class="form-group">
                {{ Form::label('company_id','Company:') }}
                {{ Form::select('company_id',$companies, null,['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::label('position_id','Position:') }}
                {{ Form::select('position_id',$positions, null,['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::label('city_id','City:') }}
                {{ Form::select('city_id',$addresses, null,['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                <img id="myImg" height="100" src="{{$application->photo ? '/images/'.$application->photo->path : ''}}" alt="Post photo">
                <br>
                {{ Form::label('photo_id','Offer Print Screen:') }}
                {{ Form::file('photo_id', null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::label('comment','Comment:') }}
                {{ Form::textarea('comment', null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::label('job_app_response','Response?:') }}
                {{ Form::select('job_app_response',array('no'=>'no','yes'=>'yes'),null,['class' => 'form-control']) }}
            </div>

            <br>
            {!! Form::submit('Update questionnaire',['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}

            {!! Form::close() !!}



            {!! Form::open(['method'=>'DELETE', 'action'=>['ApplicationsController@destroy', $application->id]]) !!}

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