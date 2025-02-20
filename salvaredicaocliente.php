<?php

include("conexao.php");

            $id = $row["id"];
            $Nome = $row["Nome"];
            $data_nasc = $row["data_nasc"];
            $rg = $row["rg"];
            $cpf = $row["cpf"];
            $Email = $row["Email"];
            $Telefone = $row["Telefone"];
            $Celular = $row["Celular"];
            $Bairro = $row["Bairro"];
            $Rua = $row["Rua"];
            $Numero = $row["Numero"];
            $Complemento = $row["Complemento"];
            $Sobrenome = $row["Sobrenome"];
            $Cidade = $row["Cidade"];



$sql = "UPDATE clientes 
        SET Nome = '$nome', 
            Sobrenome = '$sobrenome', 
            Data_nascimento = '$nascimento', 
            Rg = '$rg', 
            Cpf = '$cpf', 
            Email = '$email', 
            Telefone = '$telefone', 
            Celular = '$celular', 
            Bairro = '$bairro', 
            Rua = '$rua', 
            Numero = '$numero', 
            Complemento = '$complemento' 
        WHERE id = '$id'";

$query = mysqli_query($conexao, $sql);

header("Location: listar cliente.php");

?>
