<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array em PHP</title>
</head>
<body>

    <?php
    $dias = array('domingo', 'segunda', 'terça', 'quarta','quinta', 'sexta', 'sabado');
    echo $dias[1]."<br/><br/>";
    print_r($dias); //traz os indices da lista
    echo "<br/><br/>";
    var_dump($dias); //quantidade de itens da lista
    ?>
    
</body>
</html>