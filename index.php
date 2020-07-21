<?php
require 'config.php';  //conexçao com Às configurações de conexão com o B.D
?>
<!DOCTYPE html>
<html lang='pt-br'>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Controle de Cadastros</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>

</head>

<body >
   <a href="adicionar.php">Adiciona Novo Registro</a>
       <table border="0" width="100%" class="table">  <!-- Tabela visualização -->
    <tr>
        <th>Nome</th>
        <th>Senha</th>
        <th>E-mail </th>
        <th>Endereço </th>
        <th>Passaporte </th>
        <th>Ações </th> 
    </tr>
   

    <?php // Selecionando dados e retorna na tela
    $sql = "SELECT*FROM  cadastrados";
    $conn = $pdo->query($sql);
    if ($conn->rowCount() > 0) {
        foreach ($conn->fetchAll() as $usuario) {
            echo '<tr>';
            echo '<td>' . $usuario['nome'] . '</td>';
            echo '<td>' . $usuario['senha'] . '</td>';
            echo '<td>' . $usuario['email'] . '</td>';
            echo '<td>' . $usuario['endereco'] . '</td>';
            echo '<td>' . $usuario['passaporte'] . '</td>';
            echo '<td><a href="EditarCadastros.php"> Editar Cadastros</a> - <a href="ExcluirCadastros.php">Excluir Cadastros</a></td>';
            echo '</tr>';

        }
    }
    ?>
     </table>
</body>
</html>