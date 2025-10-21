<?php

    require_once "src/Livro.php";

    $livroA = new Livro();
    $livroB = new Livro();
    $livroC = new Livro();

    $livroA->titulo = "Olhai os Lirios no Campo";
    $livroA->quantidade_de_paginas = 322;

    $livroB->titulo = "A Boa Sorte";
    $livroB->quantidade_de_paginas = 146;

    $livroC->titulo = "Como fazer amigos e influenciar pessoas";
    $livroC->quantidade_de_paginas = 257;
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        .livros {
            width: 250px;
            height: 200px;
            background-color:azure;
            padding: 10px;
            border-radius: 10px;
        }

        body {
            display: flex;
            justify-content: center;
            align-self: center;
            
            gap: 20px;
            height: 100vh;
        }

    </style>
</head>
<body>
    
    <div class="livros">
        <?=$livroA->mostrarDados()?>
    </div>
    <div class="livros">
        <?=$livroB->mostrarDados()?>
    </div>
    <div class="livros">
        <?=$livroC->mostrarDados()?>
    </div>
    
</body>
</html>