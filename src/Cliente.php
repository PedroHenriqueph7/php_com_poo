<?php

class Cliente {

        public string $nome;
        public int $idade;
        public string $email;
        public ?string $telefone;
        
        public function __construct(string $nome, int $idade, string $email, ?string $telefone = null ) {
                $this->nome = $nome;
                $this->idade = $idade;
                $this->email = $email;
                $this->telefone = $telefone;

        }
        
        public function mostrarDados(): void {
                echo "<div>
                         <h4>$this->nome</h4>
                         <p><b>E-mail de contado:</b> $this->email</p>
                         <p><b>Idade:</b> $this->idade anos
                     </div>";
        }
}




