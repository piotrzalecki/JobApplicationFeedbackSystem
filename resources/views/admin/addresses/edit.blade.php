@extends('layouts.admin')

@section('header')
    Edit address
@stop



@section('content')



    <div>

        {!! Form::model($address, ['method'=>'PATCH', 'action'=>['AddressesController@update', $address->id]]) !!}

        <div class="form-group col-sm-4">
            {{ Form::label('city_name','Name:') }}
            {{ Form::text('city_name', null, ['class' => 'form-control']) }}

            <br>
            {!! Form::submit('Update address',['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}



            {!! Form::open(['method'=>'DELETE', 'action'=>['AddressesController@destroy', $address->id]]) !!}

            <br>

            {!! Form::submit('Delete address',['class' => 'btn btn-danger']) !!}

            {!! Form::close() !!}

        </div>




@stop