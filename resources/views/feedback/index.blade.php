

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


    <h2>Welcome dear guest </h2>


    <p>This is Job Application Feedback System. To be able to access and fill questionnaire you need to receive e-mail with special access-link.<br>
    </p>
    <p>Have a good day.</p>

</section>


<footer>

      <h6>  &#169; <a href="http://piotrzalecki.com" alt="Piotr Za&#322;&#281;cki website" target="_blank">Piotr Za&#322;&#281;cki</h6>



</footer>




<script src="{{asset('js/libs.js')}}"></script>
  </body>
</html>
