<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada com arrays e for!</title>
</head>
<body>
    <!-- Em um contexto real não vejo pq utilizar esse metodo de tabuada, ele é ineficiente -->
    <?php
        $numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
        foreach($numeros as $num){
            for($i = 0; $i <= 10; $i++){
                echo "$num X $i = ". $num * $i. "<br>";
            }
            echo "<br>";

        }
        echo "<br><br><br>"
        $numbers = array(
            array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10),
            array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10),
        );

        for($linha = 0; $linha < 2; $linha++){

        }

    ?>

<center>
        <address>
            Yan Carlos de Oliveira - Estudante - Desenvolvimento de sistemas
        </address>
    </center>
    
</body>
</html>