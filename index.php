<?php
/* print_r ele mostra o indice do array, echo mostra o conteúdo do indice se inserirmos somente a variavel
ele exibe o array com todos os conteúdos que existe no array, se inserirmos a variavel e o indice entre 
colchetes exibimos o indice "print_r" ou o conteúdo do array "echo*/

   $a = [1,2,3]; /* Armazena um array de numeros inteiros */
    print_r($a);/* exibe o indice e o conteúdo do Array */
    echo "<br>";
    echo $a[1];/* exibe o indice 1 da variavel a */
    $arr = ['Diogo', 29, true];/*  armazena uma string, um inteiro e um boleano true */
    echo "<br>";
    print_r($arr); /* exibe o indice e o conteúdo do array */
    echo "<br>";
    print_r($arr[1]); /* exibe o indice do array mas não exibe o conteúdo */
?>
