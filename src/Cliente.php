<?php

class Cliente {

        private string $nome;
        private int $idade;
        private string $email;
        private ?string $telefone;
        
        public function __construct(string $nome, int $idade, string $email, ?string $telefone = null ) {
                $this->setNome($nome);
                $this->setIdade($idade);
                $this->setEmail($email);
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

        private function setNome(string $nome) {

                if(empty($nome)) {
                        echo "<p style='color:red'>Nome não pode ser vazio!</p>";
                } else {
                        $this->nome = $nome;
                }
               
        }

        private function setIdade(int $idade) {
                if ($idade <= 0) {
                         echo "<p style='color:red'>idade inválida!</p>";
                } else {
                        $this->idade = $idade;
                }
        }

        private function setEmail(string $email) {
                /* Usamos o filter_var com a constante FILT ER VALIDATE_EMAIL para o php verificar se o valor de e-mail informado é valido. Se sim, retorna TRUE. Senão, retorna FALSE. */
                $validaEmail = filter_var($email, FILTER_VALIDATE_EMAIL);

                if(!$validaEmail) {
                        echo "<p style='color:red'>E-mail inválido!</p>";
                } else {
                        $this->email = $email;
                }
        }



        
      /*   public function mostrarDados(): void {
                echo "<div>
                         <h4>$this->nome</h4>
                         <p><b>E-mail de contado:</b> $this->email</p>
                         <p><b>Idade:</b> $this->idade anos
                     </div>";
        } */

}





