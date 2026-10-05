<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 3 - Maioridade</title>
</head>
<body>
    <h1>Exercício 3 – Maioridade</h1>

    <form action="" method="post">
        <label for="idade">Informe sua idade:</label>
        <input type="number" id="idade" name="idade" min="0" required>
        <button type="submit">Verificar</button>
    </form>

    <?php
    if (isset($_POST["idade"])) {
        if (is_numeric($_POST["idade"]) && $_POST["idade"] >= 0) {
            $idade = (int) $_POST["idade"];

            if ($idade >= 18) {
                echo "<p>Você tem $idade anos: é maior de idade.</p>";
            } else {
                echo "<p>Você tem $idade anos: é menor de idade.</p>";
            }
        } else {
            echo "<p>Informe uma idade válida.</p>";
        }
    }
    ?>
</body>
</html>
