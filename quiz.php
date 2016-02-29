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

      $answersText = array(
        'q1' => array(
        '1' =>'-100',
        '2' =>'234',
        '3' =>'6',
        '4' =>'2',
        '5' =>'gecko'),
        'q2' => array(
        '1' =>'purple',
        '2' =>'12',
        '3' =>'8',
        '4' =>'-23',
        '5' =>'18'),
        'q3' => array(
        '1' =>'70',
        '2' =>'71',
        '3' =>'Reagan',
        '4' =>'54',
        '5' =>'789'),
        'q4' => array(
        '1' =>'DELETE_SYSTEM_32.exe',
        '2' =>'3',
        '3' =>'23',
        '4' =>'24',
        '5' =>'Old Yeller'),
        'q5' => array(
        '1' =>'Lawrence',
        '2' =>'Brownbackistan',
        '3' =>'Topeka',
        '4' =>'?!??',
        '5' =>'Columbia'));

      $questions =  array(
        'q1' => '9 - 7 =',
        'q2' => '7 + 5 =',
        'q3' => '7 * 10 = ',
        'q4' => '12 * 2 = ',
        'q5' => 'The capital of Kansas is...');

      $points = 0;

      foreach($_POST as $question=>$answer)
      {
        $correct = ($answers[$question] == $answer);
        echo '<div class="material_card"><h4' ;
        if($correct) echo ' class="correct">';
        else echo ' class="incorrect">';
        echo $question . ' was ' ;

        if($correct) echo 'correct!</h4>';
        else echo 'incorrect :(</h4>';
        echo '<h5>Question ' . substr($question, 1) . ': ' . $questions[$question] . '</h5>';
        echo '<h6>You answered: ' . $answersText[$question][$answer] . '</h6>';
        echo '<h6>Correct answer: ' . $answersText[$question][$answers[$question]] . '</h6></div>';
        if($correct) $points++;
      }

      echo '<br><div class="material_card"><h4>&nbsp;&nbsp;&nbsp;&nbsp;You got ' . $points . ' out of 5 correct</h4><h3>&nbsp;&nbsp;&nbsp;Your score is ' . 100*$points/5 . '% </h3></div>';
    ?>
  </body>
</html>
