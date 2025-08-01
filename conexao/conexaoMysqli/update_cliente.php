<?php
    require_once "conexao.php";
    $conexao = conectadb();

    $id = 19;
    $nome = "YanzitoGames";
    $endereco = "Rua Roblox 1994";
    $telefone = "Cria nao usa celular";
    $email = "YanGamerRei@Games.com";

    $stmt = $conexao->prepare("UPDATE cliente SET nome=?, endereco=?, telefone=?, email=? WHERE id_cliente = ?");
    $stmt->bind_param("ssssi", $nome, $endereco, $telefone, $email, $id);

    if($stmt->execute()){
        echo "Cliente atualizado com success";
    }else{
        echo "Cliente não pode ser atualizado:".$stmt->error;
    }

    $stmt->close();
    $conexao->close();


?>