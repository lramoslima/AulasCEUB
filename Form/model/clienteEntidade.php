<?php
    class ClienteEntidade {
        #Atributos da Classe
        public $nome;
        public $cpf;
        public $telefone;
        public $email;
        public $cep;

        #Funções
        public function fnVerificaCampoPreenchido ($nome) {
            if ($nome=="") {
                echo "Campo obrigatório";
                return false;
            } else {
                return false;
            }
        }
    }

    $objClienteEntidade = new ClienteEntidade();

    echo $objClienteEntidade->nome;

    echo "antes";
    $objClienteEntidade->nome=$_GET['nome'];
    
?>