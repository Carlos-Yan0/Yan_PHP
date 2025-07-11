<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch PHP</title>
</head>
<body>
    <?php
        $var = "lampada";
        switch($var){
            case "casa":
                print "A casa é amarela";
                break;
            case "arvore":
                print "a arvore é bonita";
                break;
            case "lampada":
                print "Joao apagou a lampada";
                break;
            default:
                print "Você não selecionou nadinha de nada";
                break;
        }

    ?>

<center>
        <address>
            Yan Carlos de Oliveira - Estudante - Desenvolvimento de sistemas
        </address>
    </center>
</body>
</html>