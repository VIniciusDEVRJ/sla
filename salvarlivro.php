<?php
include("conexao.php");

$Titulo = $_POST["Titulo"];
$Autor = $_POST["Autor"];
$Editora = $_POST["Editora"];
$Idioma = $_POST["Idioma"];
$Observacao = $_POST["Observacao"];
$Genero = $_POST["Genero"];
$DataLivro = $_POST["DataLivro"];

$result_livro = "INSERT INTO livro (Titulo, Autor, Editora, Idioma, Observacao, Genero, DataLivro) 
                 VALUES ('$Titulo', '$Autor', '$Editora', '$Idioma', '$Observacao', '$Genero', '$DataLivro')";
$resultado_livro = mysqli_query($conexao, $result_livro);

if(mysqli_affected_rows($conexao) != 0){
    echo "Livro cadastrado com sucesso";
}else{
    echo "Erro ao cadastrar";
}
?>
