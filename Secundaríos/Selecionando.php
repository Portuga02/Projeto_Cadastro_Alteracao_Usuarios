<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Selecionando dados do banco de dados</title>
</head>
<body>
    <?php
    $conn = "mysql:dbname=blog;host=localhost";
    $usuario = "root";
    $senhaBanco = "";


    try {
        $pdo = new PDO($conn, $usuario, $senhaBanco);
        //echo "Bom dia conexão estabelecida com sucesso";
        $sql = "SELECT * FROM cadastrados"; // Classe de conecção de banco de dados
        // select *from = Seleciona todos os campos do banco de dados
        $conectar = $pdo->query($sql); /*repetindo String mas está virando uma economia de *memoria, apenas rescreve a string com a conexão ao banco de dados
         */ if ($conectar->rowCount() > 0) {

            foreach ($conectar->fetchAll() as $cadastrados) {
             /*foreach usado para retornar Array para os resultados
                 * e utilizando o foreach pode-se percorrer o array para saber
                 * os resultados
                 * FetchAll -> pega os resultados apartir das consulltas do array
                 * diretamente no banco de dados
                
                 */
                echo "nome".$usuario["nome"]; 
            /* utilizado para tertornar o valor no banco de campo NOME
                 * . Utilizado para concatenar junto com o ECHO
                 *[] utilizado para abrir variaveis (array)
                 */
            }


            //echo "Bom dia esses são os usuários cadastrados no banco de dados";
        } else {
            echo "Bom dia!!!!!!  Não tem usuários cadastrados no banco de dados";
        }


    } catch (PDOException $e) {
        echo "não tem  usuário cadastrados  no banco de dados" . $e->getMessage();
    }
    # (->) usuado para orientação à objetos
    ?>
    
</body>
</html>