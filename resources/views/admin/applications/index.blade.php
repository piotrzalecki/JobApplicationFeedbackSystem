@extends('layouts.admin')

@section('header')
    Applications
    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-info btn-md pull-right" data-toggle="modal" data-target="#myModal">Add Application</button>

@stop



@section('content')



    @if(count($applications)>0)

        <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Created</th>
                <th>Company name</th>
                <th>Position</th>
                <th>Job Offer PrtScr</th>
                <th>City</th>
                <th>Note</th>
                <th>Response?</th>
                <th>Updated at</th>
            </tr>
            </thead>
            <tbody>


            @foreach($applications as $application)

                <tr>
                    <td>{{$application->id}}<a href="{{route('applications.edit', $application->id)}}"> <i class="fa fa-edit" ></i></a></td>
                    <td>{{$application->created_at->diffForHumans()}}</td>
                    <td>{{$application->company->name}}</td>
                    <td>{{$application->position->name}}</td>
                    <td><img id="myImg" height="50" src="{{$application->photo ? '/images/'.$application->photo->path : ''}}" alt="{{$application->company->name.', '.$application->position->name}}"> </td>
                    <td>{{$application->address->city_name}}</td>
                    <td>{{$application->comment}}</td>
                    <td>

                        @if($application->job_app_response == 'yes')


                             @if($application->feedback )

                                <a href="{{route('feedbacks.index')}}">Feedback already requested</a>

                            @else
                                    <br>
                                        <a href=""
                                           type="button" class="" data-toggle="modal" data-target="#myModal3"
                                            data-whatever="{{$application->id}}">
                                        Ask for feedback
                                        </a>
                            @endif
                        @else
                            {{$application->job_app_response}}

                        @endif

                    </td>
                    <td>{{$application->updated_at->diffForHumans()}}</td>
                </tr>
            @endforeach

            </tbody>
        </table>


    @else

        <p>There is no applications added yet.</p>
    @endif



    <!-- Modal 1 -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Application</h4>
                </div>
                <div class="modal-body">


                    {!! Form::open(['method'=>'POST', 'action'=>'ApplicationsController@store', 'files'=>true]) !!}


                    <div class="form-group">
                        {{ Form::label('company_id','Company:') }}
                        {{ Form::select('company_id',$companies, null,['class' => 'form-control']) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('position_id','Position:') }}
                        {{ Form::select('position_id',$positions, null,['class' => 'form-control']) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('address_id','City:') }}
                        {{ Form::select('address_id',$addresses, null,['class' => 'form-control']) }}
                    </div>

                    <div class="form-group">
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


                    {!! Form::submit('Create questionnaire',['class' => 'btn btn-primary']) !!}

                    {!! Form::close() !!}






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


    <!-- Modal 3-->
    <div id="myModal3" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Send feedback</h4>
                </div>
                <div class="modal-body">


                    {!! Form::open(['method'=>'POST', 'action'=>'FeedbacksController@store']) !!}

                    <div class="form-group">

                        {{ Form::hidden('application_id', null, ['class' => 'form-control', 'id'=>'id_receiver']) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('questionnaire_id','Questionnaire:') }}
                        {{ Form::select('questionnaire_id',$questionnaires, null,['class' => 'form-control']) }}
                    </div>



                    <div class="form-group">
                        {{ Form::label('email','Email:') }}
                        {{ Form::email('email', null, ['class' => 'form-control']) }}
                    </div>



                    {!! Form::submit('Send email',['class' => 'btn btn-primary']) !!}

                    {!! Form::close() !!}






                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>



@stop
