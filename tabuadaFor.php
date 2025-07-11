<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada com For em PHP</title>
</head>
<body>
    <?php

    for($i = 1; $i <= 10; $i++){

        for($j = 1; $j <= 10; $j++){
            echo "$i X $j = ". $i * $j ."<br/>";
        }
        echo "<br/>";
    }


    ?>

<center>
        <address>
            Yan Carlos de Oliveira - Estudante - Desenvolvimento de sistemas
        </address>
    </center>
</body>
</html>