<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções PHP</title>
</head>
<body>  
    <?php

    $name = "Stefanie Hatcher";
    echo "Nome: $name <br>";
    $length = strlen($name);
    $cmp = strcmp($name, "Brian Le");
    $index = strpos($name, "e");
    $first = substr($name, 9, 5);
    $name = strtoupper($name);

    echo "Tamanho: $length<br>";
    echo "Comparador: $cmp<br>";
    echo "Index(posição da letra 'e'): $index<br>";
    echo "Primeira letra: $first<br>";
    echo "Nome Maiusculo: $name";
    



    ?>
    
</body>
</html>