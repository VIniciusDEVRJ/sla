<?php
include("conexao.php");

// Retrieve form data
$Cpf = $_POST["Cpf"];
$Nome = $_POST["Nome"];
$Sobrenome = $_POST["Sobrenome"];
$Telefone = $_POST["Telefone"];
$Celular = $_POST["Celular"];
$Rua = $_POST["Rua"];
$Numero = $_POST["Numero"];
$Data_Nascimento = $_POST["Data_Nascimento"];
$Complemento = $_POST["Complemento"];
$Cidade = $_POST["Cidade"];
$Bairro = $_POST["Bairro"]; // Ensure case matches your form field
$Email = $_POST["Email"];

// Fixed SQL (no trailing comma)
$result_cli = "INSERT INTO funcionario (Nome, Email, Cpf, Sobrenome, Telefone, Celular, Rua, Numero, Data_Nascimento, Complemento, Cidade, Bairro) 
               VALUES ('$Nome', '$Email', '$Cpf', '$Sobrenome', '$Telefone', '$Celular', '$Rua', '$Numero', '$Data_Nascimento', '$Complemento', '$Cidade', '$Bairro')";

$resultado_cli = mysqli_query($conexao, $result_cli);

if (mysqli_affected_rows($conexao) != 0) {
    echo "Funcionário cadastrado com sucesso";
} else {
    echo "Erro ao cadastrar: " . mysqli_error($conexao); // Add error details
}
?>