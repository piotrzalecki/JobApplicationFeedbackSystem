@extends('layouts.admin')

@section('header')
    Edit position
@stop



@section('content')



    <div>

        {!! Form::model($position, ['method'=>'PATCH', 'action'=>['PositionsController@update', $position->id]]) !!}

        <div class="form-group col-sm-4">
            {{ Form::label('name','Name:') }}
            {{ Form::text('name', null, ['class' => 'form-control']) }}

            <br>
            {!! Form::submit('Update position',['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}



            {!! Form::open(['method'=>'DELETE', 'action'=>['PositionsController@destroy', $position->id]]) !!}

            <br>

            {!! Form::submit('Delete position',['class' => 'btn btn-danger']) !!}

            {!! Form::close() !!}

        </div>




@stop