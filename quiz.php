<!DOCTYPE html>
<html>
  <head>
    <title>Excercise 2: Quiz</title>
    <!--Bootstrap CSS-->
  	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

  	<!--jQuery-->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

  	<!--Bootstrap JS-->
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  	<link rel="stylesheet" href="style.css">
  </head>

  <body>
    <h1>Excercise 2: Quiz</h1>
    <br>
    <br>
    <?php
      $answers = array(
        'q1' => 4,
        'q2' => 2,
        'q3' => 1,
        'q4' => 4,
        'q5' => 3);
      foreach($_POST as $question=>$anwer)
      {
        echo $answer;
        $correct = ($answers[$question] == $answer);
        echo '<h4' ;
        if($correct) echo ' class="correct">';
        else echo ' class="incorrect">';
        echo $question . ' was ' ;

        if($correct) echo 'correct!';
        else echo 'incorrect :(';
        echo $answer . ' <br>';
      }
    ?>
  </body>
</html>
