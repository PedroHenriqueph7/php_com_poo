<?php

class Cliente {

        public string $nome;
        public int $idade;
        public string $email;
        
        public function mostrarDados() {
                echo "<div>
                         <h4>$this->nome</h4>
                         <p><b>E-mail de contado:</b> $this->email</p>
                         <p><b>Idade:</b> $this->idade anos
                     </div>";
        }
}




