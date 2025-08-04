<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
ob_clean(); // LIMPA QUALQUER SAIDA INESPERADA ANTES DO HEADER

//INCLUI A CONEXAO COM O BANCO DE DADOS
require "conexao.php";
$conexao = conectadb();

//OBTEM O ID DA IMAGEM DA URL GARANTINDO QUE SEJA UM NUMERO INTEIRO
$id_imagem = isset($_GET['id'])? intval($_GET['id']):0;

//CRIA A CONSULTA PARA BUSCAR A IMAGEM NO BANCO DE DADOS
$querySelecionaPorCodigo = "SELECT imagem,tipo_imagem FROM tabela_imagens WHERE codigo = ?";

//USA prepared statement PARA MAIOR SEGURANÇA
$stmt = $conexao->prepare($querySelecionaPorCodigo);
$stmt->bind_param("i", $id_imagem);
$stmt->execute();
$resultado = $stmt->get_result();

//VERIFICA SE A IMAGEM EXISTE NO DATABASE
if($resultado->num_rows > 0){
    $imagem = $resultado->fetch_object();
    
    //DEFINE O TIPO CORRETO DA IMAGEM(FallBack PARA Jpeg CASO ESTEJA VAZIO!)
    $tipoImagem = !empty($imagem->tipo_imagem)? $imagem->tipo_imagem : "imagem/jpeg";
    header("content-type: ".$tipoImagem);

    //EXIBE A IMAGEM ARMAZENADA NA DATABASE
    echo $imagem->imagem;
}else{
    echo "Imagem não encontrada!";
}

//FECHA A CONSULTA
$stmt->close();
?>