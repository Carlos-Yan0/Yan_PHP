<?php
    require_once "conexao.php";
    $conexao = conectadb();
    //Obtem os dados enviados pelo formulario
    $evento = $_POST["evento"];
    $descricao = $_POST["descricao"];
    $imagem = $_FILES["imagem"]["tmp_name"];
    $tamanho = $_FILES["imagem"]["size"];
    $tipo= $_FILES["imagem"]["type"];
    $nome = $_FILES["imagem"]["name"];
    
    //Verifica se o arquivo correta,emte
    if(!empty($imagem) && $tamanho > 0){
        //Lê o conteudo do arquivo
        $fp = fopen($imagem, "rb");
        $conteudo = fread($fp, filesize($imagem));
        fclose($fp);

        //Protege contra problemas de caracteres
        $conteudo = mysqli_real_escape_string($conexao, $conteudo);
        $queryInsercao = "INSERT INTO tabela_imagens(evento, descricao, nome_imagem, tamanho_imagem, tipo_imagem, imagem)VALUES('$evento', '$descricao', '$nome', '$tamanho', '$tipo', '$conteudo')";

        $resultado = mysqli_query($conexao, $queryInsercao);

        //verifica se a inserção foi bem sucedida
        if($resultado){
            echo "Registro Inserido com Sucesso";
            header("Location: index.php");
            exit();
        }else{
            die("Erro ao inserir no banco de dados: ".mysqli_error($conexao));
        
        }
    }else{
        echo "ERRO: Nenhuma imagem foi enviada";
    }
    

?>