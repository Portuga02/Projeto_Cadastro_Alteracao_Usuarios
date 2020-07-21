<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>CONFIGURAÇÃO PHP</title>
</head>
<body>
<?php 
$dsn = "mysql:dbname=blog;host=localhost"; // conexão com o banco de dados
$user = "root"; //Usuário local para se conectar
$pass = ""; // Senha do local ou do banco de dados ("Caso tenha senha")

// Começo da conexão PDO

try {
	$pdo = new PDO ($dsn, $user, $pass); // Iniciando biblioteca PDO
	//echo "Conexão ao banco de dados FUNCIONANDO CORRETAMENTE";
} catch (PDOException $e) {// Declarando excessão
	echo "Falha na conecção! " . $e->getMessage(); // faz parte da orientação  à objetos
}


?>	
</body>
</html>
