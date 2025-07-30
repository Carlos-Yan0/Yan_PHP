<?php
    require 'conexao.php';

    $conexao = conectarBanco();
    $stmt = $conexao->prepare("SELECT * FROM cliente");
    $stmt->execute();
    $clientes=$stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
    <!-- Link do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

    <!-- Link do CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/listarClientes.css">
</head>
<body>
 
    <?php include 'menu.php'?>

    <h2>Lista de Clientes</h2>
    <div class="container">
        <table border="0" class="table">
            <tr>
                <th>Id</th>
                <th>nome</th>
                <th>Endereço</th>
                <th>Telefone</th>
                <th>E-mail</th>
            </tr>
            <?php
                foreach($clientes as $cliente){?>
                <tr>
                    <td><?=htmlspecialchars($cliente["id_cliente"])?></td>
                    <td><?=htmlspecialchars($cliente["nome"])?></td>
                    <td><?=htmlspecialchars($cliente["endereco"])?></td>
                    <td><?=htmlspecialchars($cliente["telefone"])?></td>
                    <td><?=htmlspecialchars($cliente["email"])?></td>
                </tr>        
            <?php
                }?>
            
        </table>
    </div>
    
    <footer>
        <address>
                Yan Carlos de oliveira - Estudante SesiSenai - Desenvolvimento de Sistemas
        </address>
    </footer>
</body>
</html>