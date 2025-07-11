<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exeplo booleano</title>
</head>
<body>
    <?php
    //declara variavel numerica
    $umidade = (int) 91;
    //Testa se a $umidade maior que 90. Retorna um boolean
    $vaiChover = ($umidade > 90);
    //Testa se $vaiChover é verdadeiro
    if($vaiChover){
        echo "Vai chover com toda certeza absoluta da Terra!";
    }


    ?>

<center>
        <address>
            Yan Carlos de Oliveira - Estudante - Desenvolvimento de sistemas
        </address>
    </center>
    
</body>
</html>