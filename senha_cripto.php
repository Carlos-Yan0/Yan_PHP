<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criptografia senha md5</title>
    <style>
        label{
            display: inline-block;
            margin-bottom: 10px;
            width: 100px;
        }
    </style>

</head>
<body>
    <form action="senha_cripto_back.php" method="POST">
        <label for="usuario">Usuario: </label>
        <input type="text" name="usuario" required>
        <br>
        <label for="senha">Senha: </label>
        <input type="password" name="senha" required>
        <br>
        <button type="submit" name="enviar">Enviar</button>
        <button type="reset">Limpar</button>
    </form>
</body>
</html>