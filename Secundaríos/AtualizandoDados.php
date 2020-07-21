<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Atualizando Dados</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
    $banco = "mysql:dbaname=blog;host=localhost";
    $usuario = "root";
    $senha = "";

    try {
        $pdo = new PDO($banco, $usuario, $senha); // Conexão com classe e banco de dados
        $novasenha = md5("Nova senha 123456");// Padrão MD5 para segurança de senha
        $sql = "UPDATE usuarios SET email ='savio@savio.com'WHERE email ='gomes@gomes.com' ";
        $Conectar = $pdo->query($sql);
        echo "Usuário alterado com  Sucesso";

    } catch (PDOException $e) {
        echo "Conexão em Falha não foi possivel atualizar!" . $e->getMessage();

    }

    ?>
</body>
</html>