<?php
    $i = 1;
    while($i <= 10){
       echo "O loop externo $i <br>";
       
       $j = 1;
       while($j <= 5){
        echo "looping interno $j <br>";

        $j++;
       }


       $i++;
    }

?>