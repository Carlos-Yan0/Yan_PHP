<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dicionarios em PHP</title>
</head>
<body>
    <?php
        echo "<br>";
        $amazonProducts = array(
            array("codigo" => "Livro", "descrição" => "Livros", "preços" => 50),
            array("codigo" => "DVDs", "descrição" => "Filmes", "preços" => 15),
            array("codigo" => "CDs", "descrição" => "Música", "preços" => 20));
        for($linha = 0; $linha < 3; $linha++){ ?>
             <p>|<?= $amazonProducts[$linha]["codigo"] ?>
                |<?= $amazonProducts[$linha]["descrição"] ?>
                |<?= $amazonProducts[$linha]["preços"] ?>
            </p>

            <?php
        }
    ?>

<center>
        <address>
            Yan Carlos de Oliveira - Estudante - Desenvolvimento de sistemas
        </address>
    </center>
    
</body>
</html>