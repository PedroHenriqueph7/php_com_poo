<?php

    class Livro {

        private string $titulo;
        private string $autor;
        private ?int $quantidade_de_paginas;

        public function __construct(string $titulo, string $autor, ?int $quantidade_de_paginas = null) {
            $this->setTitulo($titulo);
            $this->setAutor($autor);
            $this->setQuantidade_de_paginas($quantidade_de_paginas);
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

        public function getTitulo(): string {
            return $this->titulo;
        }

        public function getQuantidade_de_paginas(): ?int {
            return $this->quantidade_de_paginas;
        }

        public function getAutor(): string {
            return $this->autor;
        }


        private function setTitulo(string $titulo) {

            if (empty($titulo) && strlen($this->titulo)) {
                 echo "<p style='color:red'>Titulo não pode ser Invalido! e não pode conter menos que 3 caracteres!</p>";
            } else {
                $this->titulo = $titulo;
            }
            
        }

        private function setAutor(string $autor) {

            if(empty($autor)) {
                echo "<p style='color:red'>Autor invalido!</p>";
            } else {
                $this->autor = $autor;
            }
        }

        private function setQuantidade_de_paginas(?int $quantidade_de_paginas): void {
            
            if($quantidade_de_paginas !== null) {
                if($quantidade_de_paginas < 0) {
                    echo "<p style='color:red'>Quantidade e de paginas invalidas!</p>";
                    $this->quantidade_de_paginas = null;
                } else {
                    $this->quantidade_de_paginas = $quantidade_de_paginas;
                }  
            } else {
              
                $this->quantidade_de_paginas = null;
            }
        }

    }