@extends('layouts.admin')

@section('header')
    Addresses
@stop



@section('content')



    @if(count($addresses)>0)

        <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>City name</th>
                <th>Show on map</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
            </thead>
            <tbody>


            @foreach($addresses as $address)

                <tr>
                    <td>{{$address->id}}</td>
                    <td><a href="{{route('addresses.edit', $address->id)}}">{{$address->city_name}}</a></td>
                    <td><a target="_blank" href="https://www.google.pl/maps/place/{{strtolower($address->city_name)}}"><i class="fa fa-map-marker"> MAP</i></a></td>
                    <td>{{$address->created_at->diffForHumans()}}</td>
                    <td>{{$address->updated_at->diffForHumans()}}</td>
                </tr>
            @endforeach

            </tbody>
        </table>


    @else

        <p>There is no address added yet.</p>
    @endif


    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal">Add Address</button>

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


                    {!! Form::open(['method'=>'POST', 'action'=>'AddressesController@store']) !!}

                    <div class="form-group">
                        {{ Form::label('city_name','Add Category:') }}
                        {{ Form::text('city_name', null, ['class' => 'form-control']) }}
                    </div>

                    {!! Form::submit('Create address',['class' => 'btn btn-primary']) !!}

                    {!! Form::close() !!}






                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>





@stop
