<?php
    require_once "conexao.php";
    $conexao = conectadb();

    $id = 20;

    $stmt = $conexao->prepare("DELETE FROM cliente WHERE id_cliente = ?");
    $stmt->bind_param("i", $id);
    
    if($stmt->execute()){
        echo "Cliente APAGADO DA EXISTENCIA com sucesso";
    }else{
        echo "Erro ao apagar o cliente da existencia:".$stmt->error;
    }

    $stmt->close();
    $conexao->close();
?>