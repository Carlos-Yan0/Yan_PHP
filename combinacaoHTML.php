<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data com php</title>
</head>
<body>
    <?php
    //função usada para definir fuso horário padrão
    date_default_timezone_set('America/Los_Angeles');
    //Manipulando HTML e PHP
    $data_hoje = date("d/m/y", time());
    ?>
    <p align="center">Hoje é dia <?php echo $data_hoje; ?></p>
    <center>
        <address>
            Yan Carlos de Oliveira - Estudante - Desenvolvimento de sistemas
        </address>
    </center>
    
</body>
</html>