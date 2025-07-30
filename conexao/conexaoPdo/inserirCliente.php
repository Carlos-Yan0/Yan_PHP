<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de cliente</title>
    <!-- link do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

    <!-- link do CSS -->
     <link rel="stylesheet" href="css/inserirClientes.css">
     <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <?php include 'menu.php'?>
    <div class="container">
        <h2>Cadastro de Cliente</h2>
        <form action="processarInsercao.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required class="form-control">

            <label for="endereco">Endereço:</label>
            <input type="text" id="endereco" name="endereco" required class="form-control">

            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone" required class="form-control">

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required class="form-control">

            <div class="botaozinho">
                <button type="submit" class="btn btn-success">Cadastrar Cliente</button>
            </div>
        </form>
    </div>
    
    <footer>
        <address>
                Yan Carlos de oliveira - Estudante SesiSenai - Desenvolvimento de Sistemas
        </address>
    </footer>

    <?php include 'toast.php'?>
</body>
</html>