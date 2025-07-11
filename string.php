<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String</title>
</head>
<body>
    <?php
    $age = 16;
    print "You are ". $age ." Years old.<br>";
    print "You are $age years old.<br>"; 
    print 'You are $age years old.<br>'; 
    print "today is your $ageth birthday. <br>";
    print "today is your {$age}th birthday.";

    ?>

    <br><br><br><br><br>

    <?php
    $cidade = (string) "Curitiba";
    $estado = (string) "PR";
    $idade = (int) 325;
    $frase_capital = (string) "A cidade de $cidade é a capital do $estado";
    $frase_idade = (string) "$cidade tem mais de $idade anos";
    echo "<h3>$frase_capital</h3>";
    echo "<h4>$frase_idade</h4>"
    ?>

    <center>
        <address>
            Yan Carlos de Oliveira - Estudante - Desenvolvimento de sistemas
        </address>
    </center>
    
</body>
</html>