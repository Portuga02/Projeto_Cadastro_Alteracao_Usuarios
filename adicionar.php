
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Adicionando Usuários</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
</head>
<body>
<?php
require 'config.php';  //conexçao com Às configurações de conexão com o B.D
 
// Configuração da inserção de dados no B.D
if (isset($_POST['nome']) && empty($_POST['nome']) == false) { // Configuração para não cadastrar valores nulos no banco de dados
    $nome = addslashes($_POST['nome']);
    $senha = md5(addslashes($_POST['senha']));
    $email = addslashes($_POST['email']);
    $endereco = addslashes($_POST['endereco']);
    $passaporte = addslashes($_POST['passaporte']);
    $sql = "INSERT INTO cadastrados SET 
     nome='$nome',
     senha='$senha',
     email='$email',	
     endereco='$endereco',
     passaporte='$passaporte' ";
    $pdo->query($sql);
    header("Location:index.php");
}
//FIM  Configuração da inserção de dados no B.D

?>
<!-- Formulário de Cadastramento-->
<form method="POST">
    Nome <br/>
        <input type="text" name="nome"/><br/><br/>
    Senha </br>
        <input type ="password" name="senha"/><br/><br/>
    Email </br>
        <input type="text" name="email"/><br/><br/>
    Endereço<br/>
        <input type ="text" name="endereco"/>  <br/><br/>
    Passaporte <br/>  
        <input type ="text" name="passaporte"/> <br/><br/>
      <button class="btn btn-danger"> Cadastrar</button>
    </form>
<!-- Fim do formulário de cadastramento -->

</body>



</html>