<?php

    require_once "src/Livro.php";

    $livroA = new Livro("A Boa Sorte", "Autor X");
    $livroB = new Livro("Olhai os Lírios do Campo", "Autor Y");
    $livroC = new Livro("Percy Jackson o Ladrão de Raios", "Rick", 387);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<body>
    
 
        <h4>Titulo: <?=$livroA->getTitulo();?></h4>
        <p><b>Autor: </b><?=$livroA->getAutor();?> </p>
        <p><b>Quantidade de Páginas: </b> <?=$livroA->getQuantidade_de_paginas()?></p>

    

    
    
    
    
</body>
</html>