<?php
    $name = htmlspecialchars($_GET['name']);
    $cpf = htmlspecialchars($_GET['CPF']);
    $telephone = htmlspecialchars($_GET['telephone']);
    $email = htmlspecialchars($_GET['email']);
    $cep = htmlspecialchars($_GET['CEP']);

    $host = "localhost";
    $user = "id20359116_admin";
    $pass = "Q$7!c3FBdc~JUMiM";
    $dbname = "id20359116_db_form";
    $connection = mysqli_connect($host, $user, $pass, $dbname) or die (mysql_errno().": ".mysql_error()."<BR>");
//myseqli_select_db($connection,$dbname);

    $query = "INSERT INTO `cliente` (`Nome`, `CPF`, `Telefone`, `Email`, `CEP`) VALUES('".$name."','".$cpf."','".$telephone."','".$email."','".$cep."')";

    echo $query;
    mysqli_query ($connection, $query) or die ('Erro ao salvar');

    echo "<br/>";
    echo "<br/>";
    echo " SALVO - Nome: ".$name." | CPF; ".$cpf." | ";
?>
