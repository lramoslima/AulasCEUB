<?php
    class ClienteEntidade {
        #Atributos da Classe
        private $nome;
        private $cpf;
        private $telefone;
        private $email;
        private $cep;

        #Funções
        private function fnVerificaCampoPreenchido ($campo) {
            if ($campo=="") {
                echo "Campo obrigatório";
                return false;
            } else {
                return true;
            }
        }

        #Métodos GETs e SETs
        public function getNome() {
            return $this->nome;
        }
        public function setNome($nome) {
            if ($this->fnVerificaCampoPreenchido($nome)) {
                $this->nome=htmlspecialchars($nome);
            }
        }
    }

    $pessoa = new ClienteEntidade();

    $pessoa->setNome($_GET['nome']);
    
?>