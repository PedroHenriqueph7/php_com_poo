<?php

    class Livro {

        public string $titulo;
        public string $autor;
        public ?int $quantidade_de_paginas;

        public function __construct(string $titulo, string $autor, ?int $quantidade_de_paginas = null) {
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->quantidade_de_paginas = $quantidade_de_paginas;
        }

        public function mostrarDados(): void {

            echo "
                <h4>Livro: </h4>
                <p><b>Titulo: </b>$this->titulo</p>
                "; 
                if ($this->quantidade_de_paginas != null) {
                    echo "<p><b>Quantidade de Páginas:</b> 
                    $this->quantidade_de_paginas pg.</p>";
                };
                

        }

        public function verificarQuantidadeCaracteresTitulo(): void {

            if (strlen($this->titulo) > 3) 
                 $this->mostrarDados();
              else 
                echo "<p style= 'color: red;'>Título não pode ter menos do que 3 letras</p>";
             

        }
    }