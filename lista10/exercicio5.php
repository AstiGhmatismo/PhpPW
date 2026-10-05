<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 5 - Planetas</title>
</head>
<body>
    <h1>Exercício 5 – Planetas</h1>

    <form action="" method="post">
        <label for="numero">Digite um número de 1 a 8:</label>
        <input type="number" id="numero" name="numero" min="1" max="8" required>
        <button type="submit">Descobrir</button>
    </form>

    <?php
    $planetas = [
        1 => "Mercúrio",
        2 => "Vênus",
        3 => "Terra",
        4 => "Marte",
        5 => "Júpiter",
        6 => "Saturno",
        7 => "Urano",
        8 => "Netuno"
    ];

    if (isset($_POST["numero"])) {
        $numero = $_POST["numero"];

        if (filter_var($numero, FILTER_VALIDATE_INT) !== false && isset($planetas[(int) $numero])) {
            $numero = (int) $numero;
            echo "<p>O planeta número $numero é <strong>{$planetas[$numero]}</strong>.</p>";
        } else {
            echo "<p>Número inválido. Digite um número inteiro de 1 a 8.</p>";
        }
    }
    ?>
</body>
</html>
