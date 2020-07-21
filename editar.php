<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Editar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
    require 'config.php'; //Requerimento das configurações de conecção do banco de dados
    
// configuração para atualizar o banco de dados
    $id = 0;
    if (isset($_GET['id']) && empty($_GET['id']) == false) {
        $id = addslashes($_GET['id']);
    }
    
    if (isset($_POST['nome']) && empty($_POST['nome']) == false) {
        $nome = addslashes($_POST['nome']);
        $senha = md5(addslashes($_POST['senha']));
        $email = addslashes($_POST['email']);
        $endereco = addslashes($_POST['endereco']);
        $passaporte = addslashes($_POST['passaporte']);
        $sql = "UPDATE cadastrados SET 
        nome='$nome',
        senha='$senha',
        email='$email',    
        endereco='$endereco',
        passaporte='$passaporte' WHERE id='$id' ";
        $pdo->query($sql);
        header("Location:index.php");

        
    }   
    $sql = "SELECT *FROM  cadastrados WHERE id ='$id'";
    $sql = $pdo->query($sql);
    if ($sql->rowCount() > 0) {
        $dado = $sql->fetch();
    } else{
        header("Location:index.php");
    } 

    ?>
    <!-- Formulário de Cadastramento-->
    <form method="POST">
        Nome <br/>
            <input type="text" name="nome" value="<?php echo $dado['nome']; ?>"  /><br/><br/>
        Senha<br/>
            <input type="text" name="senha" value="<?php echo $dado['senha'] ?>"/><br/><br/>
        Email </br>
            <input type="text" name="email" value ="<?php echo $dado['email']; ?>"/><br/><br/>
        Endereço<br/>
            <input type ="text" name="endereco" value ="<?php echo $dado['endereco']; ?>"/>  <br/><br/>
        Passaporte <br/>  
            <input type ="text" name="passaporte" value ="<?php echo $dado['passaporte']; ?>"/> <br/><br/>
            <input type="submit" value="Atualizar">
</form>
<!-- Fim do formulário de cadastramento -->

</body>
</html>