<?php
    $lista_informacoes = array();
    
    if(isset($_GET['nomeCampo'])&& isset($_GET['numCampo'])&& isset($_GET['cpfCampo'])&& isset($_GET['emailCampo'])&& isset($_GET['nascimentoCampo'])&& isset($_GET['admissaoCampo'])&& isset($_GET['cargoCampo'])){
        
        $valores = array($_GET['nomeCampo']); $_GET['numCampo']; $_GET['cpfCampo']; $_GET['emailCampo']; $_GET['nascimentoCampo']; $_GET['admissaoCampo']; $_GET['cargoCampo'];

        list($nome, $numero, $cpf, $email, $dataNascimento, $dataAdmissao) = $valores;
        $infos = array($nome, $numero, $cpf, $email, $dataNascimento, $dataAdmissao);

        $_SESSION['lista_informacoes'][] = $infos;











        echo "<h3>Funcionario Cadastrado</h3><br>";
        echo "Nome: ".$SESSION['lista_informacoes'];
    }
?>