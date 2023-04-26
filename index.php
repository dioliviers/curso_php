<?php
 $a = 1.5;
 $b = 1.8;
 $c = 2.0;
    
    echo "float 1 $a";
        echo "<br>";
    echo "float 2 $b";
        echo "<br>";
        if(is_float($c)){
            echo "a variável C $c é um float também";
        }else {
            echo " A variável C não é um float";
        };
?>