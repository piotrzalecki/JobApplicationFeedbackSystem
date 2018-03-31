@extends('layouts.admin')

@section('header')
    Positions
@stop



@section('content')



    @if(count($positions)>0)

        <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
            </thead>
            <tbody>


            @foreach($positions as $position)

                <tr>
                    <td>{{$position->id}}</td>
                    <td><a href="{{route('positions.edit', $position->id)}}">{{$position->name}}</a></td>
                    <td>{{$position->created_at->diffForHumans()}}</td>
                    <td>{{$position->updated_at->diffForHumans()}}</td>
                </tr>
            @endforeach

            </tbody>
        </table>


    @else

        <p>There is no positions added yet.</p>
    @endif


    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal">Add Position</button>

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Position</h4>
                </div>
                <div class="modal-body">


                    {!! Form::open(['method'=>'POST', 'action'=>'PositionsController@store']) !!}

                    <div class="form-group">
                        {{ Form::label('name','Add Category:') }}
                        {{ Form::text('name', null, ['class' => 'form-control']) }}
                    </div>

                    {!! Form::submit('Create category',['class' => 'btn btn-primary']) !!}

                    {!! Form::close() !!}






                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>









@stop
