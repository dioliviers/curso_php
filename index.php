<?php
    include_once "backend.php";
?>

<h1> Seja bem-vindo ao nosso site </h1>
<p><?= $nome; ?> veja as nossas ofertas </p>

<h2> Confira nossos produtos </h2>

<ul>
    <?php foreach ( $produtos as $produtos ) : ?>
        <li> <?= $produtos ?></li>
    <?php endforeach; ?>
</ul>


    