<?php
    $nome = htmlspecialchars($_GET['nome']);
    $cpf = htmlspecialchars($_GET['cpf']);
    $telefone = htmlspecialchars($_GET['telefone']);
    $email = htmlspecialchars($_GET['email']);
    $cep = htmlspecialchars($_GET['cep']);

    $host = "localhost";
    $user = "id20359116_admin";
    $pass = "";
    $dbname = "id20359116_db_form";
    $connection = mysqli_connect($host, $user, $pass, $dbname) or die (mysql_errno().": ".mysql_error()."<BR>");

    $query = "INSERT INTO `Clientes` (`Nome`, `CPF`, `Telefone`, `Email`, `CEP`) VALUES('" .$nome "', '".$cpf."', '".$telefone."', '".$email."', '".$cep."')";

    echo $query;
    mysqli_query ($connection, $query) or die ('Erro ao salvar');

    echo "<br/>";
    echo "<br/>";
    echo " SALVO - Nome: ".$nome." | CPF; ".$cpf." | ";
?>
