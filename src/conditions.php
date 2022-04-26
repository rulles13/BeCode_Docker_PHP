<?php /**
    * Series of exercises on PHP conditional structures.
    */ ?>

<html>
    <head><title>4 PHP drill</title></head>
    <body>
        <p>
            <?php
                $room_is_filthy = true;

                if( $room_is_filthy ){
                    echo "Yuk, Room is dirty : let's clean it up !";
                    //cleanup_room();
                    echo "<br>Room is now clean!";
                    $room_is_filthy = false;
                } else {
                    echo "<br>Nothing to do, room is neat.";
                }
            ?>
        </p>
        <p>
            <?php
                $hour_minute=date("h:i");
                echo "The time is : $hour_minute" ;
            ?>
        </p>
    </body>
</html>