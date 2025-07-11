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
    $length = strlen($name); //tamanho
    $cmp = strcmp($name, "Brian Le"); //comparador em ordem alfabetica
    $index = strpos($name, "e")
    $first = substr($name, 9, 5); //pega apartir da 9 letra e pega as seguintes 5 letras
    $name = strtoupper($name);

    echo "Tamanho: $length<br>";
    echo "Comparador(cmp): $cmp<br>";
    echo "Index(posição da letra 'e'): $index<br>";
    echo "Primeira letra: $first<br>";
    echo "Nome Maiusculo: $name";
    

    ?>

    <center>
        <address>
            Yan Carlos de Oliveira - Estudante - Desenvolvimento de sistemas
        </address>
    </center>
    
</body>
</html>