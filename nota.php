<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota PHP</title>
</head>
<body>

    <?php
        $nota = (float) 10;
        if($nota >= 7){
            echo "Você esta aprovadissimo!";
        }elseif ($nota >= 6){
            echo "Você esta de Recuperação";
        }
        else{
            echo "Reprovado, Bobo";
        }



    ?>


<center>
        <address>
            Yan Carlos de Oliveira - Estudante - Desenvolvimento de sistemas
        </address>
    </center>
    
</body>
</html>