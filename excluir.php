<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Excluir Dados </title>
</head>
<body>
    <?php
    require 'config.php';

    if (isset($_GET['id']) && empty($_GET['id']) == false) {
        $id = addslashes($_GET['id']);
       //Variavel para deletar do banco de dados
        $sql = "DELETE FROM cadastrados WHERE id = '$id'";
        $pdo->query($sql);
header("Location:index.php");
    } else {
        header("Location:index.php");
    }
    ?>
</body>
</html>