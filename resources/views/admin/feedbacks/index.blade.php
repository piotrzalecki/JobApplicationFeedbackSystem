@extends('layouts.admin')

@section('header')
    Feedbacks
    <!-- Trigger the modal with a button -->
    {{-- <button type="button" class="btn btn-info btn-md pull-right" data-toggle="modal" data-target="#myModal">Add Application</button> --}}

@stop



@section('content')



    @if(count($feedbacks)>0)

        <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Application</th>
                <th>Email</th>
                <th>Quest.</th>
                <th>Answer</th>
                <th>Created at</th>
                <th>Updated at</th>
            </tr>
            </thead>
            <tbody>


            @foreach($feedbacks as $feedback)

                <tr>
                    <td>{{$feedback->id}} <a href="{{route('feedbacks.edit', $feedback->id)}}"> <i class="fa fa-edit" ></i></a></td>
                    <td><ul>
                            <li>{{$feedback->application->position->name}}</li>
                            <li><small>{{$feedback->application->company->name}}</small></li>
                            <li><i>{{$feedback->application->address->city_name}}</i></li>
                        </ul>

                        </td>
                    <td>{{$feedback->email}}</td>
                    <td>{{$feedback->questionnaire->name}} ({{$feedback->questionnaire->questions_number}})</td>

                    <td>
                        @if($feedback->answer_id == '')
                            no answer
                        @else
                        {{$feedback->answer_id}}
                        @endif
                    </td>
                    <td>{{$feedback->created_at->diffForHumans()}}</td>
                    <td>{{$feedback->updated_at->diffForHumans()}}</td>
                </tr>
            @endforeach

            </tbody>
        </table>


    @else

        <p>There is no feedbacks added yet.</p>
    @endif



    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Application</h4>
                </div>
                <div class="modal-body">


                    {{--{!! Form::open(['method'=>'POST', 'action'=>'FeedbacksController@store']) !!}--}}


                    {{--<div class="form-group">--}}
                        {{--{{ Form::label('application_id','Company:') }}--}}
                        {{--{{ Form::select('application_id',$applications, null,['class' => 'form-control']) }}--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                        {{--{{ Form::label('questionnaire_sent','Questionnaire sent?:') }}--}}
                        {{--{{ Form::select('questionnaire_sent',array('no'=>'no','yes'=>'yes'), null,['class' => 'form-control']) }}--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                        {{--{{ Form::label('address_id','City:') }}--}}
                        {{--{{ Form::select('address_id',$addresses, null,['class' => 'form-control']) }}--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                        {{--{{ Form::label('photo_id','Offer Print Screen:') }}--}}
                        {{--{{ Form::file('photo_id', null, ['class' => 'form-control']) }}--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                        {{--{{ Form::label('comment','Comment:') }}--}}
                        {{--{{ Form::textarea('comment', null, ['class' => 'form-control']) }}--}}
                    {{--</div>--}}



                    {{--{!! Form::submit('Create questionnaire',['class' => 'btn btn-primary']) !!}--}}

                    {{--{!! Form::close() !!}--}}






                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
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
