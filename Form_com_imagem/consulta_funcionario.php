<?php
$host = 'localhost';
$dbname = 'bd_imagem';
$username = 'root';
$password = '';


try {
    //CONEXAO COM BANCO DE DADOS USANDO PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname",$username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //DEFINE QUE ERROS VAO LANCAR EXCECOES

   //Recupera todos os funcionarios do bd
   $sql = "SELECT id,nome FROM funcionario";
   $stmt = $pdo->prepare($sql); //prepara a instrução sql
   $stmt->execute(); //executa a instrução sql
   $funcionarios = $stmt->fetchAll(PDO::FETCH_ASSOC);//BUSCA TODOS OS RESULTADOS COMO UMA MATRIZ ASSOSCIATIVA(dicionario!-!)

   //VERIFICA SE FOI SOLICITADO A EXCLUSÃO DE UM FUNCIONARIO
   if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['excluir_id'])){

    $excluir_id = $_POST['excluir_id'];
    $sql_excluir = "DELETE FROM funcionario WHERE id = :id";
    $stmt_excluir = $pdo->prepare($sql_excluir);
    $stmt_excluir->bindParam(":id", $excluir_id, PDO::PARAM_INT);
    $stmt_excluir->execute();

    //Redireciona para evitar reenvio do foformulario
    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
   }
}catch(PDOException $e){
    echo "Erro: ".$e->getMessage(); //Exibe a mensagem de erro se a conexao ou a consulta falhar
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de funcionario</title>
</head>
<body>
    <h1>Consulta Funcionarios</h1>
    <ul>
        <?php foreach($funcionarios as $funcionario): ?>
            <li>
                <!-- Exibe o Link para vizualiar os detalhes do funcionario com base no ID -->
                <a href="visualizar_funcionario.php?id=<?=$funcionario['id']?>">
                    <!-- Exibe o nome do funcionario -->
                    <?=htmlspecialchars($funcionario['nome'])?>
                </a>
                <form method="POST" style="display: inline">
                    <input type="hidden" name="excluir_id" value="<?=$funcionario['id']?>">
                    <button type="submit">Excluir</button>
                </form>
            </li>
            <?php endforeach; ?>
    </ul>

    <center>
        <address>
            Yan Carlos de Oliveira - Estudante - Desenvolvimento de sistemas
        </address>
    </center>

</body>
</html>