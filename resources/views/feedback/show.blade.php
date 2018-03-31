

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">


    <link href="{{asset('css/libs.css')}}" rel="stylesheet">

    <style>

    body {
      background: #F0EDE5;
      color: #2E4A62;
      /* padding:20px;
      padding-bottom: 40px; */
    }

    input[type=radio] {
      position: absolute;
      visibility: hidden;
      display: none;
    }

    label {

      display: inline-block;
      cursor: pointer;
      font-weight: bold;
      padding: 5px 20px;
      margin:0;

    }

    input[type=radio]:checked + label{

      color:#F0EDE5;
      background: #2E4A62;
      margin:0px;
    }


    .radio-group {
      border: solid 3px #2E4A62;
      display: inline-block;
      /* margin: 10px; */
      border-radius: 10px;
      overflow: hidden;
    }


    section.form{

  width: 90%;
  margin: 0 auto;
  text-align: center;

  }

.btn{
  width: 30%;
  margin:0 auto;
  text-align: center;
  display: block;
  margin-top: 3%;
}

h2,h5, p {
  text-align: center;
}

h5{
  text-transform: uppercase;
  font-weight: bold;
  padding-top: 5%;
}

header, footer{

  background-color: #e0dfdb;
  padding: 1%;
  margin-bottom:3%;
}

footer{
  text-align: center;
  margin-bottom:0;
  margin-top: 3%;
}


</style>
</head>
<body>

<header>
<h1>Welcome to {{Config::get('app.name')}}</h1>

</header>



<section>


    <title>Feedback questionaire</title>


    <h2>Thank you for your attention </h2>


    <p>Below You can find questionnaire. Please ansewer <strong>how strongly</strong> factors listed below
    decided about failure of my job application.<br>
    <i>This questionaire can be submited only once.</i>
    </p>

</section>
  <section class="form">


      {!! Form::open(['method'=>'POST', 'action'=>'AnswersController@store']) !!}

      {{ Form::hidden('feedback_id', $feedback->id) }}

      <h5>{{$questionnaire->question_1}}</h5>
      <div class="radio-group">


          {{ Form::radio('answer_1', '1',false,['id'=>'option_1']) }}
          {{ Form::label('option_1','NO') }}

          {{ Form::radio('answer_1', '2',false,['id'=>'option_2']) }}
          {{ Form::label('option_2','RATHER NO') }}

          {{ Form::radio('answer_1', '3',false,['id'=>'option_3']) }}
          {{ Form::label('option_3','HARD TO SAY') }}

          {{ Form::radio('answer_1', '4',false,['id'=>'option_4']) }}
          {{ Form::label('option_4','RATHER YES') }}

          {{ Form::radio('answer_1', '5',false,['id'=>'option_5']) }}
          {{ Form::label('option_5','YES') }}

      </div>

      <h5>{{$questionnaire->question_2}}</h5>
      <div class="radio-group">


          {{ Form::radio('answer_2', '1',false,['id'=>'option_6']) }}
          {{ Form::label('option_6','NO') }}

          {{ Form::radio('answer_2', '2',false,['id'=>'option_7']) }}
          {{ Form::label('option_7','RATHER NO') }}

          {{ Form::radio('answer_2', '3',false,['id'=>'option_8']) }}
          {{ Form::label('option_8','HARD TO SAY') }}

          {{ Form::radio('answer_2', '4',false,['id'=>'option_9']) }}
          {{ Form::label('option_9','RATHER YES') }}

          {{ Form::radio('answer_2', '5',false,['id'=>'option_10']) }}
          {{ Form::label('option_10','YES') }}

      </div>


      <h5>{{$questionnaire->question_3}}</h5>
      <div class="radio-group">


          {{ Form::radio('answer_3', '1',false,['id'=>'option_11']) }}
          {{ Form::label('option_11','NO') }}

          {{ Form::radio('answer_3', '2',false,['id'=>'option_12']) }}
          {{ Form::label('option_12','RATHER NO') }}

          {{ Form::radio('answer_3', '3',false,['id'=>'option_13']) }}
          {{ Form::label('option_13','HARD TO SAY') }}

          {{ Form::radio('answer_3', '4',false,['id'=>'option_14']) }}
          {{ Form::label('option_14','RATHER YES') }}

          {{ Form::radio('answer_3', '5',false,['id'=>'option_15']) }}
          {{ Form::label('option_15','YES') }}

      </div>


      @if($questionnaire->questions_number >= 4)
        <h5>{{$questionnaire->question_4}}</h5>
        <div class="radio-group">


            {{ Form::radio('answer_4', '1',false,['id'=>'option_16']) }}
            {{ Form::label('option_16','NO') }}

            {{ Form::radio('answer_4', '2',false,['id'=>'option_17']) }}
            {{ Form::label('option_17','RATHER NO') }}

            {{ Form::radio('answer_4', '3',false,['id'=>'option_18']) }}
            {{ Form::label('option_18','HARD TO SAY') }}

            {{ Form::radio('answer_4', '4',false,['id'=>'option_19']) }}
            {{ Form::label('option_19','RATHER YES') }}

            {{ Form::radio('answer_4', '5',false,['id'=>'option_20']) }}
            {{ Form::label('option_20','YES') }}

        </div>
      @endif



    @if($questionnaire->questions_number >= 5)
      <h5>{{$questionnaire->question_5}}</h5>
      <div class="radio-group">


          {{ Form::radio('answer_5', '1',false,['id'=>'option_21']) }}
          {{ Form::label('option_21','NO') }}

          {{ Form::radio('answer_5', '2',false,['id'=>'option_22']) }}
          {{ Form::label('option_22','RATHER NO') }}

          {{ Form::radio('answer_5', '3',false,['id'=>'option_23']) }}
          {{ Form::label('option_23','HARD TO SAY') }}

          {{ Form::radio('answer_5', '4',false,['id'=>'option_24']) }}
          {{ Form::label('option_24','RATHER YES') }}

          {{ Form::radio('answer_5', '5',false,['id'=>'option_25']) }}
          {{ Form::label('option_25','YES') }}

      </div>
    @endif


    @if($questionnaire->questions_number >= 6 )
      <h5>{{$questionnaire->question_6}}</h5>
      <div class="radio-group">


          {{ Form::radio('answer_6', '1',false,['id'=>'option_26']) }}
          {{ Form::label('option_26','NO') }}

          {{ Form::radio('answer_6', '2',false,['id'=>'option_27']) }}
          {{ Form::label('option_27','RATHER NO') }}

          {{ Form::radio('answer_6', '3',false,['id'=>'option_28']) }}
          {{ Form::label('option_28','HARD TO SAY') }}

          {{ Form::radio('answer_6', '4',false,['id'=>'option_29']) }}
          {{ Form::label('option_29','RATHER YES') }}

          {{ Form::radio('answer_6', '5',false,['id'=>'option_30']) }}
          {{ Form::label('option_30','YES') }}

      </div>
    @endif


    @if($questionnaire->questions_number == 7)
      <h5>{{$questionnaire->question_7}}</h5>
      <div class="radio-group">


          {{ Form::radio('answer_7', '1',false,['id'=>'option_31']) }}
          {{ Form::label('option_31','NO') }}

          {{ Form::radio('answer_7', '2',false,['id'=>'option_32']) }}
          {{ Form::label('option_32','RATHER NO') }}

          {{ Form::radio('answer_7', '3',false,['id'=>'option_33']) }}
          {{ Form::label('option_33','HARD TO SAY') }}

          {{ Form::radio('answer_7', '4',false,['id'=>'option_34']) }}
          {{ Form::label('option_34','RATHER YES') }}

          {{ Form::radio('answer_7', '5',false,['id'=>'option_35']) }}
          {{ Form::label('option_35','YES') }}

      </div>
      @endif
        {!! Form::submit('Send answers',['class' => 'btn btn-primary ']) !!}


      {!! Form::close() !!}

</section>


<footer>

      <h6>  &#169; <a href="http://piotrzalecki.com" alt="Piotr Za&#322;&#281;cki website" target="_blank">Piotr Za&#322;&#281;cki</h6>



</footer>




<script src="{{asset('js/libs.js')}}"></script>
  </body>
</html>
