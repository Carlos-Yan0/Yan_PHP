<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Atividade 02 - tabelas/formularios</title>
</head>
<body>
    <center>
        <table border="1" cellpadding="10" cellspacing="0">
            <form method="GET" action="externo.php" id="formFuncionarios">
                <tr>
                    <td rowspan="2"><img src="image/Mokele.png" alt="Mokele Img" width="100px"></td>
                    <th colspan="4">Cadastro de Funcionarios</th>
                </tr>
                <tr>
                    <td>Nome:</td>
                    <td colspan="3"><Input type="text" placeholder="Digite seu nome" name="nomeCampo"></Input></td>
                </tr>
                <tr>
                    <td>Numero:</td>
                    <td><input type="text" placeholder="Digite seu número" maxlength="15" name="numCampo"></td>
                    <td>Email:</td>
                    <td><input type="email" placeholder="Digite seu Email" name="emailCampo"></td>
                </tr>
                <tr>
                    <td>CPF:</td>
                    <td><input type="text" placeholder="Digite seu CPF" maxlength="11" name="cpfCampo"></td>
                    <td>Data de Nascimento:</td>
                    <td><input type="date" name="nascimentoCampo"></td>
                </tr>
                <tr>
                    <td>Data de admissão:</td>
                    <td><input type="date" name="admissaoCampo"></td>
                    <td>Cargo:</td>
                    <td>
                        <select name="cargoCampo">
                            <option value="administrador">administrador</option>
                            <option value="Analista de Vendas">Analista de Vendas</option>
                            <option value="Controlador de Estoque">Controlador de Estoque</option>
                            <option value="Caixa">Caixa</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="reset" value="reset"></td>
                    <td colspan="2" align="center"><input type="submit" value="submit"></td>
                </tr>
            </form>
        </table>

        <address>
            Yan Carlos de Oliveira - Estudante - Desenvolvimento de sistemas
        </address>
    </center>

    <script src="validacao.js"></script>
</body>
</html>