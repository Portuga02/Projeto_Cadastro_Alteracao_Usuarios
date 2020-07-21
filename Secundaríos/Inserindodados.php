<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php
$conn = "mysql:dbname=blog;host=localhost";
$usuario = "root";
$senhaservidor = "";
try {
    $pdo = new PDO($conn, $usuario, $senhaservidor);

    $nome = "Pedro ciço";
    $senha = md5("123"); //padrão de segurança
    $email = "CiçoPacheco@yahoo.com";
    $local = "Rua das tripanosomos cruzis";
    $passaporte = "NF-968579";
    $sql = "INSERT INTO cadastrados SET nome='$nome',
    senha='$senha',
    email='$email',
    endereco='$local',
    passaporte='$passaporte'";
    $sql = $pdo->query($sql);

    echo "Usuário Inserido no Banco de Dados com Sucesso";
} catch (PDOException $erro) {
    echo "Usuário não inserido com sucoesso" . $erro->getMessage();
}
?>    
</body>
</html>
