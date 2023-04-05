<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>formulario de cadastro</title>
</head>
<body>
<div class="container">
    <form action="formulario.php" method="POST">
        <h1>Faca o Cadastro</h1>
        <br><br>
        <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo" required>
        <br><br>
        <input type="tel" id="telefone" name="telefone" placeholder="Digite seu telefone" required>
        <br><br>
        <input type="date" id="data" name="data" required>
        <br><br>
        <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>
        <br><br>
        <input type="password" id="senha" name="password" placeholder="Crie uma senha" required>
        <br><br>
        <input class="botao" type="submit" value="Cadastrar" id="submit">
    </form>
    <?php
        include ('conexao.php');
    ?>
</div>
</body>
</html>