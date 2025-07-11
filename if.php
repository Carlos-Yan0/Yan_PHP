<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF em PHP</title>
</head>
<body>
    <?php
    $nome = (string) "Xenia";
    $nome = NULL;
    //isset serve para verificar se uma variavel tem algum dado, se for nula não executa
    if (isset($nome)){
        print "This line isn't going to be reached";
    }
    ?>

<center>
        <address>
            Yan Carlos de Oliveira - Estudante - Desenvolvimento de sistemas
        </address>
    </center>
    
</body>
</html>