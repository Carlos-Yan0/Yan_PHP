<?php
    //inclui o arquivo de conexão com o banco de datos
    require_once "conexao.php";
    $conexao = conectadb();

    //consulta SQL para obter clientes
$sql = "SELECT id_cliente, nome, email FROM cliente";
$result = $conexao->query($sql);

//Verifica se há resultados na consulta
if($result->num_rows > 0){
    //itera sobre os resultados e exibe os dados
    while($linha = $result->fetch_assoc()){
        echo "ID:".$linha["id_cliente"]." - nome:".$linha["nome"]." - Email:".$linha["email"]."<br>";
    }
}else{
    echo "Nenhum resultado encontrado";
}
$conexao->close();
?>