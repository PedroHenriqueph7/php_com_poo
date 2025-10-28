<?php

    require_once "src/Cliente.php";

    $clienteA = new Cliente("Monica",25, "monica@gmail.com");

    $clienteB = new Cliente("Jon", 15,"jon@gmail.com");
    
     $clienteC = new Cliente("Joaozinho", 40, "joaozinho@gmail.com", "11");


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>

    <h1>Exemplos de PHP com POO</h1>
    <hr>
    <h2>Trabalhando com classes e objetos</h2>

    <h3>Acessando/lendo os dados dos objetos</h3>

    <?php 
            // Sobrescrevendo o valor de um atributo do objeto
           

    ?>

    <div>
        <h4> <?=$clienteA->getNome();?></h4>
        <p><b>Idade:</b><?=$clienteA->getIdade();?> </p>
        <p><b>E-mail:</b> <?=$clienteA->getEmail()?> anos</p>
        <p>Telefone: <?=$clienteA->getTelefone() ?? "não informado" ?></p>
    </div>
    
</body>
</html>