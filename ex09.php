<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu primeiro formulário</title>
</head>

<body>
    <form action="ex09.php" method="GET">
        <fieldset>
            <legend>Exemplo de Formulário</legend>
            <p>
                <label>Nome:</label>
                <input type="text" name="nome">
                <br>
                <label>Sobrenome:</label>
                <input type="text" name="sobrenome">
                <br>
                <label>Idade:</label>
                <input type="number" name="idade">
            </p>
            <p>
                <input type="radio" name="sexo" value="Masculino"> Masculino <br>
                <input type="radio" name="sexo" value="Feminino"> Feminino <br>
            </p>
            <p>
                <label>Login:</label>
                <input type="text" name="login"><br>
                <label>Senha:</label>
                <input type="password" name="senha">
            </p>
            <p>
                <label>Onde estuda:</label><br>
                <input type="radio" name="onde_estuda" value="IFRN"> IFRN <br>
                <input type="radio" name="onde_estuda" value="UFRN"> UFRN<br>
                <input type="radio" name="onde_estuda" value="UERN"> UERN <br>
                <br>
                <label>Cidade:</label>
                <select name="cidade">
                    <option> Nova Cruz </option>
                    <option> Serrinha </option>
                    <option> Montanhas </option>
                    <option> Brejinho</option>
                    <option> Monte Alegre</option>
                    <option> Natal</option>
                </select>
                <br>
            </p>
            <p>
                Observações <br>
                <textarea name="observacoes" rows="4" cols="20"></textarea>
                <br>
                <input type="submit" value="Enviar">
                <button type="reset">Limpar</button>
            </p>
        </fieldset>
    </form>
</body>

</html>

<br>

<?php 
    if (isset($_GET['nome']) && isset($_GET['sobrenome']) && isset($_GET['sexo']) && isset($_GET['onde_estuda']) && isset($_GET['cidade'])) {
        $nome = htmlspecialchars($_GET['nome']);
        $sobrenome = htmlspecialchars($_GET['sobrenome']);
        $idade = htmlspecialchars($_GET['idade']);
        $sexo = htmlspecialchars($_GET['sexo']);
        $onde_estuda = htmlspecialchars($_GET['onde_estuda']);
        $cidade = htmlspecialchars($_GET['cidade']);
        
        echo "Olá $nome $sobrenome, você tem $idade anos e é do sexo $sexo. Você cursou faculdade na: $onde_estuda e reside em $cidade.";
    }
?>