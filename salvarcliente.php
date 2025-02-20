<?php
include("conexao.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $data_nasc = $_POST["data_nasc"];
    $cpf = $_POST["cpf"];
    $email = $_POST["email"];
    $celular = $_POST["celular"];
    $telefone = $_POST["telefone"];
    $cidade = $_POST["cidade"];
    $bairro = $_POST["bairro"];
    $complemento = $_POST["complemento"];
    $numero = $_POST["numero"];
    $rg = $_POST["rg"];

    $result_clin = "INSERT INTO clientes (nome, sobrenome, data_nasc, cpf, email, celular, telefone, cidade, bairro, complemento, numero, rg)
    VALUES ('$nome','$sobrenome','$data_nasc','$cpf', '$email', '$celular', '$telefone', '$cidade', '$bairro', '$complemento', '$numero','$rg')";
    $result_clin = mysqli_query($conexao, $result_clin); 

    if(mysqli_affected_rows($conexao) != 0){
        echo "Cliente cadastrado com sucesso";
    }else{
        echo "Erro ao cadastrar";
    }
}
