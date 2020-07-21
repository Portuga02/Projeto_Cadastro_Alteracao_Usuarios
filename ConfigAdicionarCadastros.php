
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>  <!-- Pagina de configuração de cadastramento com o banco de dados Blog na tabela cadastrados -->
<?php


if (isset($_POST['nome']) && empty($_POST['nome']) == false) // Configuração para não cadastrar valores nulos no banco de dados
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $senha = md5(addslashes($_POST['senha']));
        $sql = "INSERT INTO cadastrados SET nome='$nome',email='$email',senha='$senha'";
        $pdo->query($sql);
        header("Location:index.php");



?>
</body>
</html>