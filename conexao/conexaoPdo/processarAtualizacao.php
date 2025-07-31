<?php
    require 'conexao.php';

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $conexao = conectarBanco();

        $id = filter_var($_POST["id_cliente"], FILTER_SANITIZE_NUMBER_INT); //filter_var garante que o dado tem formato valido e FILTER_SANITIZE_NUMBER_INT garante que o numero é inteiro, o primeiro parametro é o que verifica e o segundo parametro é o formato, nesse caso FILTER_SANITIZE_NUMBER_INT garante que o numeros seja int removendo todos os caracteres não numericos de id
        $nome = htmlspecialchars(trim($_POST["nome"]));
        $endereco = htmlspecialchars(trim($_POST["endereco"]));
        $telefone = htmlspecialchars(trim($_POST["telefone"]));
        $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL); //usa o filter_var da mesma forma do primeiro porem com email

        if(!$id || !$email){
            die("Erro: ID invalido ou e-mail incorreto.");
        }

        $sql = "UPDATE cliente SET nome=:nome,endereco=:endereco,telefone=:telefone,email=:email WHERE id_cliente = :id";
        
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->bindParam(":nome",$nome);
        $stmt->bindParam(":endereco",$endereco);
        $stmt->bindParam(":telefone",$telefone);
        $stmt->bindParam(":email",$email);

        try{
            $stmt->execute();
            header("Location: atualizarCliente.php?sucesso=1");
        }catch(PDOException $e){
            error_log("Erro ao atualizar cliente: ".$e->getMessage());
            echo "Erro ao atualizar registro.";
        }
    }

?>