<?php
    require_once 'conexao.php';

    $conexao = conectarBanco();
    
    //obtendo o ID via GET
    $idCliente = $_GET['id'] ?? null;
    $cliente = null;
    $msgErro = "";

    function buscarClientePorId($idCliente, $conexao){
        $stmt = $conexao->prepare("SELECT id_cliente, nome, endereco, telefone, email FROM cliente WHERE id_cliente = :id");
        $stmt->bindParam(":id", $idCliente, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }

    if($idCliente && is_numeric($idCliente)){
        $cliente = buscarClientePorId($idCliente, $conexao);

        if(!$cliente){
            $msgErro = "Erro: Cliente não encontrado.";
        }
    }else{
        $msgErro = "Digite o ID do cliente para buscar os dados.";
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Cliente</title>
    <!-- Link do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <!-- Link do CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/atualizarClientes.css">
    <script>
        function habilitarEdicao(campo){
            document.getElementById(campo).removeAttribute("readonly");
        }
    </script>
</head>
<body>

        <?php include 'menu.php'?>


    <div class="container">
        <h2>Atualizar Cliente</h2>
        <!-- Se houver erro exibe a msg e o campo de busca -->
        <?php if($msgErro): ?>
            <p style="color:red;"><?=htmlspecialchars($msgErro)?></p>
        <form action="atualizarCliente.php" method="GET">
        <label for="id">ID do Cliente:</label>
            <div class="inserirID">  
                <input type="number" id="id" name="id" required class="form-control">
                <button type="submit" class="btn btn-success">Buscar</button>
            </div>
        
        </form>
    


        <?php else: ?>
                <!-- Se um cliente foi encontrado, exibe o formulario preenchido -->
                <form action="processarAtualizacao.php" method="POST" class="form">
                    <input type="hidden" name="id_cliente" value="<?=htmlspecialchars($cliente['id_cliente'])?>">

                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" value="<?=htmlspecialchars($cliente['nome'])?>" readonly onclick="habilitarEdicao('nome')" class="form-control">

                    <label for="endereco">Endereço:</label>
                    <input type="text" id="endereco" name="endereco" value="<?=htmlspecialchars($cliente['endereco'])?>" readonly onclick="habilitarEdicao('endereco')" class="form-control">

                    <label for="telefone">Telefone:</label>
                    <input type="text" id="telefone" name="telefone" value="<?=htmlspecialchars($cliente['telefone'])?>" readonly onclick="habilitarEdicao('telefone')" class="form-control">

                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" value="<?=htmlspecialchars($cliente['email'])?>" readonly onclick="habilitarEdicao('email')" class="form-control">

                    <button type="submit" class="btn btn-success">Atualizar Cliente</button>
                </form>
            <?php endif; ?>
    </div>

    <?php include 'toast.php'?>

    <footer>
        <address>
                Yan Carlos de oliveira - Estudante SesiSenai - Desenvolvimento de Sistemas
        </address>
    </footer>
</body>
</html>