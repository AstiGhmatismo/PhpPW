<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 1 - Nome e Saudação</title>
</head>
<body>
    <h1>Exercício 1 – Nome e Saudação</h1>

    <form action="" method="get">
        <label for="nome">Digite seu nome:</label>
        <input type="text" id="nome" name="nome" required>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if (isset($_GET["nome"]) && trim($_GET["nome"]) !== "") {
        $nome = htmlspecialchars(trim($_GET["nome"]));
        echo "<p>Olá, $nome! Seja bem-vindo!</p>";
    }
    ?>
</body>
</html>
