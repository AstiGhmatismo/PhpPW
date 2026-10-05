<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 6 - Calculadora</title>
</head>
<body>
    <h1>Exercício 6 – Calculadora</h1>

    <form action="" method="post">
        <label for="num1">Número 1:</label>
        <input type="number" id="num1" name="num1" step="any" required>

        <label for="operacao">Operação:</label>
        <select id="operacao" name="operacao" required>
            <option value="soma">Soma</option>
            <option value="subtracao">Subtração</option>
            <option value="multiplicacao">Multiplicação</option>
            <option value="divisao">Divisão</option>
        </select>

        <label for="num2">Número 2:</label>
        <input type="number" id="num2" name="num2" step="any" required>

        <button type="submit">Calcular</button>
    </form>

    <?php
    if (isset($_POST["num1"]) && isset($_POST["num2"]) && isset($_POST["operacao"])) {
        if (is_numeric($_POST["num1"]) && is_numeric($_POST["num2"])) {
            $num1 = (float) $_POST["num1"];
            $num2 = (float) $_POST["num2"];
            $operacao = $_POST["operacao"];
            $resultado = null;

            if ($operacao == "soma") {
                $resultado = $num1 + $num2;
            } elseif ($operacao == "subtracao") {
                $resultado = $num1 - $num2;
            } elseif ($operacao == "multiplicacao") {
                $resultado = $num1 * $num2;
            } elseif ($operacao == "divisao") {
                if ($num2 == 0) {
                    echo "<p>Erro: não é possível dividir por zero.</p>";
                } else {
                    $resultado = $num1 / $num2;
                }
            } else {
                echo "<p>Operação inválida.</p>";
            }

            if ($resultado !== null) {
                echo "<p>Resultado: <strong>$resultado</strong></p>";
            }
        } else {
            echo "<p>Informe dois números válidos.</p>";
        }
    }
    ?>
</body>
</html>
