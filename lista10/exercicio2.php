<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 2 </title>
</head>
<body>
    <h1>Exercício 2</h1>

    <form action="" method="get">
        <label for="num1">Número 1:</label>
        <input type="number" id="num1" name="num1" step="any" required>

        <label for="num2">Número 2:</label>
        <input type="number" id="num2" name="num2" step="any" required>

        <button type="submit">Calcular</button>
    </form>

    <?php
    if (isset($_GET["num1"]) && isset($_GET["num2"])) {
        if (is_numeric($_GET["num1"]) && is_numeric($_GET["num2"])) {
            $num1 = (float) $_GET["num1"];
            $num2 = (float) $_GET["num2"];
            $soma = $num1 + $num2;

            echo "<p>$num1 + $num2 = <strong>$soma</strong></p>";
        } else {
            echo "<p>Informe dois números válidos.</p>";
        }
    }
    ?>
</body>
</html>
