<?php
  echo '<table id="multiplicationTable" class="table-striped">';
  for($r = 0; $r<=100; $r++)
  {
    echo '<tr>';
      for($c = 0; $c<=100; $c++)
      {

        if($r == 0 || $c == 0)
        {
          echo '<th>';
        }
        else
        {
          echo '<td>';
        }


        if($r == 0 && $c == 0)
        {
          echo ' ';
        }
        else if($r == 0 || $c == 0)
        {
          echo $r + $c;
        }
        else
        {
          echo $r * $c;
        }

        if($r == 1 || $c == 1)
        {
          echo '</th>';
        }
        else
        {
          echo '</td>';
        }
      }
    echo '</tr>';
  }
  echo '</table>';
?>
