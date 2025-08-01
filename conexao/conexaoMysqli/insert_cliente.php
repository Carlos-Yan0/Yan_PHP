<?php
//inclui o arquivo de conexão com o banco de datos
require_once "conexao.php";

//Estabelece conexão
$conexao = conectadb();

//Definição dos valores par inserção
$nome = "Yan Carlos Fefe caetano";
$endereco = "Rua do yan, 139";
$telefone = "(47) 98902-6250";
$email = "YanAmorDaFefe@amor.com";

$stmt = $conexao->prepare("INSERT INTO cliente(nome, endereco, telefone, email)VALUES(?, ?, ?, ?)");

$stmt->bind_param("ssss", $nome, $endereco, $telefone, $email);

if($stmt->execute()){
    echo "Cliente adicionado com sucesso!";
}else{
    echo "Erro ao adicionar cliente:".$stmt->error;
}
$stmt->close();
$conexao->close();

?>