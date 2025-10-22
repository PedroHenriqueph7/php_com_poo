<?php

class Cliente {

        private string $nome;
        private int $idade;
        private string $email;
        private ?string $telefone;
        
        public function __construct(string $nome, int $idade, string $email, ?string $telefone = null ) {
                $this->nome = $nome;
                $this->idade = $idade;
                $this->email = $email;
                $this->telefone = $telefone;

        }

        public function getNome(): string {
                return $this->nome;
        }

        public function getIdade(): string {
                return $this->idade;
        }

        public function getEmail(): string {
                return $this->email;
        }
        public function getTelefone(): ?string {
                return $this->telefone;
        }





        
      /*   public function mostrarDados(): void {
                echo "<div>
                         <h4>$this->nome</h4>
                         <p><b>E-mail de contado:</b> $this->email</p>
                         <p><b>Idade:</b> $this->idade anos
                     </div>";
        } */

}





