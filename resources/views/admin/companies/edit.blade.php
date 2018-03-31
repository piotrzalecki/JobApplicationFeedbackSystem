@extends('layouts.admin')

@section('header')
    Edit company
@stop



@section('content')



    <div>

        {!! Form::model($company, ['method'=>'PATCH', 'action'=>['CompaniesController@update', $company->id]]) !!}

        <div class="form-group col-sm-4">
            {{ Form::label('name','Company name:') }}
            {{ Form::text('name', null, ['class' => 'form-control']) }}

            <br>
            {!! Form::submit('Update company',['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}



            {!! Form::open(['method'=>'DELETE', 'action'=>['CompaniesController@destroy', $company->id]]) !!}

            <br>

            {!! Form::submit('Delete company',['class' => 'btn btn-danger']) !!}

            {!! Form::close() !!}

        </div>




@stop