<?php
    echo ("Este é o inicio do texto");
    include "teste.php";
    include "teste.php"; /* com include posso repetir a chamada do arquivo.php  */
    require_once "require.php"; /* com require_once a chamada só pode ser feita uma vez , se chamar duas vezes ele não é apresentado */
    require_once "require.php";
?>
<p> Exibindo conteúdo de teste <?php echo $idade; ?> </p> <!-- consigo também chamar variável php -->