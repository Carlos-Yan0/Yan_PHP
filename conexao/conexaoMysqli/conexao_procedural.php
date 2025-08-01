<?php
//Definição das credenciais de acesso ao banco de dados
$nomeservidor = "localhost";
$usuario = "root";
$senha = "";
$bd = "empresa";

//criação da conexão
$conn = mysqli_connect($nomeservidor, $usuario, $senha, $bd);

//Verificação da conexão
if(!$conn){
    //caso a conexão falhe, interrompe o script e exibe uma mensagem de erro
    die("Conexão falhou:".mysqli_connect_error());
}
//configuração do conjunto de caracteres para evitar problemas de acentuação
mysqli_set_charset($conn, "utf8mb4");

//Mensagem indicando que a conexão foi estabelecida corretamente
echo "Conexão bem-sucedida!<br>";

//consulta SQL para obter clientes
$sql ="SELECT id_cliente, nome, email FROM cliente";
$result = mysqli_query($conn, $sql);

//Verifica se há resultados na consulta
if(mysqli_num_rows($result) > 0){
    //itera sobre os resultados e exibe os dados
    while($linha = mysqli_fetch_assoc($result)){
        echo "ID:".$linha["id_cliente"]." - nome:".$linha["nome"]." - Email:".$linha["email"]."<br>";
    }
}else{
    echo "Nenhum resultado encontrado";
}
mysqli_close($conn);
?>