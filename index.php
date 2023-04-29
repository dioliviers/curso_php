<?php
    $carro = [
        "nome" => "Civic", 
        "marca" => "honda",
        "ano" => 1998,
        "blindado" => false

    ];

    print_r ($carro);

    $marca =$carro['marca']; /* criamos uma variável através de um elemento de um array */
    $ano = $carro['ano'];
    echo "<br>";

    echo "o carro é da marca $marca e é do ano $ano"; /* exibimos as variáveis com os valores extraidos do array*/
    
