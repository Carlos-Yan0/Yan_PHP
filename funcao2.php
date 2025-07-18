<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções PHP</title>
</head>
<body>
    <?php
        //rand - Gera um inteiro super aleatorio
        $sorteio = rand(0, 5);
        echo "Sorteado: $sorteio <hr>";
        //array_merge = Combina 1 ou mais arrays
        //range - Cria um array contendo uma faixa de elementos(inicio/fim/Passo)
        $vetor = array_merge( range(0, 10),
        range($sorteio, 10, 2),
        array($sorteio)
);
print_r($vetor);
echo "<br><hr><br><br>";
//embaralha
shuffle($vetor);
print_r($vetor);
echo "<hr>";
    ?>
    <center>
        <address>
            Yan Carlos de Oliveira - Estudante - Desenvolvimento de sistemas
        </address>
    </center>
</body>
</html>