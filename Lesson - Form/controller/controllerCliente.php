<?php
        $host = "localhost";
        $user = "id20359116_admin";
        $pass = "Q$7!c3FBdc~JUMiM";
        $dbname = "id20359116_db_form";
        $connection = mysqli_connect($host, $user, $pass, $dbname) or die (mysql_errno().": ".mysql_error()."<BR>");
        //mysqli_select_db($connection,$dbname);
    
        $query = "INSERT INTO `cliente` (`Nome`, `CPF`, `Telefone`, `Email`, `CEP`) VALUES('".$name."','".$cpf."','".$telephone."','".$email."','".$cep."')";
    
        echo $query;
        mysqli_query ($connection, $query) or die ('Erro ao salvar');
    
        echo " SALVO - Nome: ".$name." | CPF; ".$cpf." | ";
?>