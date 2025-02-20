<?php
include("conexao.php");

// Consulta SQL para buscar os dados dos clientes
$sql = "SELECT * FROM clientes";
$result = mysqli_query($conexao, $sql);

// Verifica se a consulta foi bem sucedida
if (!$result) {
    die("Erro na consulta: " . mysqli_error($conexao));
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Lista de Clientes</title>
</head>
<body>
    <h1>Clientes</h1>
    <table width="100%" border="1" align="center">
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>NASCIMENTO</th>
            <th>RG</th>
            <th>CPF</th>
            <th>EMAIL</th>
            <th>TELEFONE</th>
            <th>CIDADE</th>
            <th>COMPLEMENTO</th>
            <th>SOBRENOME</th>
            <th>CELULAR</th>
            <th>Numero</th>
            <th>Bairro</th>
            <th>Editar/Excluir</th>
        </tr>

        <?php
        // Loop para exibir os dados dos clientes
        while ($row = mysqli_fetch_array($result)) {
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

            echo "
            <tr>
                <td>$id</td>
                <td>$Nome</td>
                <td>$data_nasc</td>
                <td>$rg</td>
                <td>$cpf</td>
                <td>$Email</td>
                <td>$Telefone</td>
                <td>$Cidade</td>
                <td>$Complemento</td>
                <td>$Sobrenome</td>
                <td>$Celular</td>
                <td>$Numero</td>
                <td>$Bairro</td>
                <td>
                    <a href=\"editarcliente.php?id=$id\">[Editar]</a> |
                    <a href=\"excluir.php?id=$id\">[Excluir]</a>
                </td>
            </tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
// Fechar a conexão com o banco de dados
mysqli_close($conexao);
?>