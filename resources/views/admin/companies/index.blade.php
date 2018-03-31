@extends('layouts.admin')

@section('header')
    Companies
@stop



@section('content')



    @if(count($companies)>0)

        <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Company name</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
            </thead>
            <tbody>


            @foreach($companies as $company)

                <tr>
                    <td>{{$company->id}}</td>
                    <td><a href="{{route('companies.edit', $company->id)}}">{{$company->name}}</a></td>
                    <td>{{$company->created_at->diffForHumans()}}</td>
                    <td>{{$company->updated_at->diffForHumans()}}</td>
                </tr>
            @endforeach

            </tbody>
        </table>


    @else

        <p>There is no company added yet.</p>
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
                    <h4 class="modal-title">Add Company</h4>
                </div>
                <div class="modal-body">


                    {!! Form::open(['method'=>'POST', 'action'=>'CompaniesController@store']) !!}

                    <div class="form-group">
                        {{ Form::label('name','Add Company:') }}
                        {{ Form::text('name', null, ['class' => 'form-control']) }}
                    </div>

                    {!! Form::submit('Create company',['class' => 'btn btn-primary']) !!}

                    {!! Form::close() !!}






                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>





@stop
