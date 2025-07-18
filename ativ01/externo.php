<?php
    if(isset($_GET['nomeCampo'])&& isset($_GET['numCampo'])&& isset($_GET['cpfCampo'])&& isset($_GET['emailCampo'])&& isset($_GET['nascimentoCampo'])&& isset($_GET['admissaoCampo'])&& isset($_GET['cargoCampo'])){

        echo "<h3>Funcionario Cadastrado</h3><br>";
        echo "Nome: ".$_GET['nomeCampo'];
        echo "<br>CPF: ".$_GET['numCampo'];
        echo "<br>E-mail: ".$_GET['emailCampo'];
        echo "<br>Data de Nascimento: ".$_GET['nascimentoCampo'];
        echo "<br>Data de Admissão: ".$_GET['admissaoCampo'];
        echo "<br>Cargo: ".$_GET['cargoCampo'];
    }
?>