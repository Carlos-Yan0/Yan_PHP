<?php

$host = 'localhost';
$dbname = 'bd_imagem';
$username = 'root';
$password = '';

try {
    //CONEXAO COM BANCO DE DADOS USANDO PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname",$username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //DEFINE QUE ERROS VAO LANCAR EXCECOES

    //Verifica se o ID foi passado na URL
    if(isset($_GET['id'])){
        $id=$_GET['id']; //obtem o id do funcionario atravez da URL

        //recupera os dados do funcionario no bd
        $sql = "SELECT nome, telefone, tipo_foto, foto FROM funcionario WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT); //vincula o valor do id ao parametro :id
        $stmt->execute(); //Executa a instrução sql

        //verifica se encontrou o funcionario
        if($stmt->rowCount() > 0){
            //A linha abaixo busca os dados dos funcionarios com um array associativo
            $funcionario = $stmt->fetch(PDO::FETCH_ASSOC);
            
            //Verifica se foi solicitado a exclusao do funcionario
            //Linha abaixo verifica se os dados foram enviados via formulario com o metodo post
            //isset verifica se ha um valor definido na variavel
            //verifica se o formulario foi enviado via post e se existe o campo "excluir_id"

            if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['excluir_id'])){
                //a linha abaixo pega o valor id que foi enviado pelo formulario(id do funcionario a ser excluido)
                $excluir_id = $_POST['excluir_id'];

                //monta a query sql para deletar o funcionario com o id correspondente
                $sql_excluir = "DELETE FROM funcionario WHERE id = :id";
                $stmt = $pdo->prepare($sql_excluir);
                $stmt->bindParam(":id", $id, PDO::PARAM_INT);
                $stmt->execute();
                header("Location: consulta_funcionario.php");
                exit();


            }

        }


    }

}catch(PDOException $e){
    Echo "Erro: ".$e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar funcionario</title>
</head>
<body>
    <h1>Dados do funcionario</h1>
    <p>Nome: <?=htmlspecialchars($funcionario['nome'])?></p>
    <p>Telefone: <?=htmlspecialchars($funcionario['telefone'])?></p>
    <p>Foto:</p>
    <img src="data:<?= $funcionario['tipo_foto']; ?>;base64,<?= base64_encode($funcionario['foto']); ?>" alt="Foto do funcionario">


    <!-- formulario para excluir funcionario -->
     <form method="POST">
        <input type="hidden" name="excluir_id" value="<?=$id?>">
        <button type="submit">Excluir funcionarios</button>
     </form>

     <center>
        <address>
            Yan Carlos de Oliveira - Estudante - Desenvolvimento de sistemas
        </address>
    </center>
</body>
</html>