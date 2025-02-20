<?php
include("conexao.php");

// Retrieve and sanitize the id from the URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Fetch the client data from the database
$sql = "SELECT * FROM clientes WHERE id = ?";
$stmt = mysqli_prepare($conexao, $sql);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$dados = mysqli_fetch_assoc($result);

if (!$dados) {
    die("Cliente não encontrado.");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<title>Atualizar Cliente</title>
</head>
<body>
<form id="form1" name="form1" method="post" action="salvar_edicao.php">
<input type="hidden" name="id" id="id" value="<?php echo $id; ?>" />
<h2 align="center"><strong>Edição de Cadastro de Cliente</strong></h2>
<table width="390" border="1" align="center">
    <tr>
        <td width="165">Nome</td>
        <td width="209">
            <input name="nome" type="text" id="nome" value="<?php echo htmlspecialchars($dados['Nome']); ?>" />
        </td>
    </tr>
    <tr>
        <td>Data de Nascimento</td>
        <td>
            <input name="data_nascimento" type="text" id="data_nascimento" value="<?php echo htmlspecialchars($dados['data_nasc']); ?>" />
        </td>
    </tr>
    <tr>
        <td>RG</td>
        <td>
            <input name="rg" type="text" id="rg" value="<?php echo htmlspecialchars($dados['rg']); ?>" />
        </td>
    </tr>
    <tr>
        <td>CPF</td>
        <td>
            <input name="cpf" type="text" id="cpf" value="<?php echo htmlspecialchars($dados['cpf']); ?>" />
        </td>
    </tr>
   
    
    <tr>
        <td>Email</td>
        <td>
            <input name="email" type="text" id="email" value="<?php echo htmlspecialchars($dados['Email']); ?>" />
        </td>
    </tr>
    <tr>
        <td>Telefone</td>
        <td>
            <input name="telefone" type="text" id="telefone" value="<?php echo htmlspecialchars($dados['Telefone']); ?>" />
        </td>
    </tr>
    <tr>
        <td>Celular</td>
        <td>
            <input name="celular" type="text" id="celular" value="<?php echo htmlspecialchars($dados['Celular']); ?>" />
        </td>
    </tr>
    <tr>
        <td>Bairro</td>
        <td>
            <input name="bairro" type="text" id="bairro" value="<?php echo htmlspecialchars($dados['Bairro']); ?>" />
        </td>
    </tr>
    <tr>
        <td>Rua</td>
        <td>
            <input name="rua" type="text" id="rua" value="<?php echo htmlspecialchars($dados['Rua']); ?>" />
        </td>
    </tr>
    <tr>
        <td>Número</td>
        <td>
            <input name="numero" type="text" id="numero" value="<?php echo htmlspecialchars($dados['Numero']); ?>" />
        </td>
    </tr>
    <tr>
        <td>Complemento</td>
        <td>
            <input name="complemento" type="text" id="complemento" value="<?php echo htmlspecialchars($dados['Complemento']); ?>" />
        </td>
    </tr>
    <tr>
        <td>Sobrenome</td>
        <td>
            <input name="sobrenome" type="text" id="sobrenome" value="<?php echo htmlspecialchars($dados['Sobrenome']); ?>" />
        </td>
    </tr>
    <tr>
        <td colspan="2" align="center">
            <input type="submit" name="Submit" value="Salvar Alterações" />
        </td>
    </tr>
</table>
</form>
</body>
</html>