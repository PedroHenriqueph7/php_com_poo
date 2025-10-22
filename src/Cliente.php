<?php

class Cliente {

        public string $nome;
        public int $idade;
        public string $email;
        
        public function __construct(string $nome, int $idade, string $email) {
                $this->nome = $nome;
                $this->idade = $idade;
                $this->email = $email;
        }
        
        public function mostrarDados(): void {
                echo "<div>
                         <h4>$this->nome</h4>
                         <p><b>E-mail de contado:</b> $this->email</p>
                         <p><b>Idade:</b> $this->idade anos
                     </div>";
        }
}




