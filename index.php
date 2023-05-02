<?php
/* EXERCICIO 
Crie duas variáveis com números
Crie uma terceira veriavel com a soma desses dos números 
exiba*/
  $num1 = 10;
  $num2 = 20;
  $soma = $num1 + $num2;
  echo $soma;

  function somar ($soma){  /* utilizando os resultados em uma função */
    echo "O resultado da soma é $soma";
  }
  echo "<br>";
  echo somar($soma); /* retornando o valor de soma ao chamar a função somar */
  
?>