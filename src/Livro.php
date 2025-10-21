<?php

    class Livro {

        public string $titulo;
        public string $autor;

        public int $quantidade_de_paginas;


        public function mostrarDados() {

            echo "
                <h4>Livro: </h4>
                <p><b>Titulo: </b>$this->titulo</p>
                <p><b>Quantidade de Páginas:</b> $this->quantidade_de_paginas pg</p>";

        }

    }