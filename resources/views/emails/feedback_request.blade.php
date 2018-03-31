<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Email</title>


</head>
<body>



  <h4>Dear Sir / Madam,</h4>

  <p>I am writing to thank You for your quick response to my job application for the role of {{$role}}.</p>

  <p>I have been unsuccessful on this occasion and I would be grateful if I could receive feedback for you.</p>

  <p>Below there is a link to a quick questionnaire containing {{$questions_no}} questions, which should not take more than 1 minute.</p>

<a href="{{route ('feedback.show', ['id'=>$token])}}">{{route ('feedback.show', ['id'=>$token])}}</a>

  <p>Thanking you in advance for Your feedback, it will help me take the next steps on my professional and educational path.</p>

  <h5>Yours faithfully,</h5>
  <h5>Piotr Zalecki</h5>


</body>







</html>
