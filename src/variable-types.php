<?php 
    $name="Stéphane";
    $age=45;
    $eye_colour="blue";
    $family=array(
        0 => 'Papa',
        1 => 'Maman',
        2 => 'Patrick',
        3 => 'Gabrielle');
    $is_hungry=true;
?>


<html>
  <head><title>Variables</title></head>
  <body>	
    <p>
        <?php   
        echo "Hi my name is $name";
        ?>
    </p>
    <p>
        <?php
            echo "I am $age old";
        ?>
    </p>
    <p>
        <?php
            echo "My eyes are $eye_colour";
        ?>
    </p>
    <p>
        <?php
            echo "The first person of my family is $family[0]";
        ?>
    </p>

  </body>
</html>