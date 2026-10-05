<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 4 - Cálculo de Frete por CEP</title>
</head>
<body>
    <h1>Exercício 4 – Cálculo de Frete por CEP</h1>

    <form action="" method="post">
        <label for="cep">CEP de destino (somente números):</label>
        <input type="text" id="cep" name="cep" maxlength="9" placeholder="88490000" required>
        <button type="submit">Calcular frete</button>
    </form>

    <?php
    $fretes = [
        "88490" => ["municipio" => "Paulo Lopes", "valor" => 10.00],
        "88495" => ["municipio" => "Garopaba",    "valor" => 12.00],
        "88780" => ["municipio" => "Imbituba",    "valor" => 14.00],
        "88790" => ["municipio" => "Laguna",      "valor" => 16.00]
    ];

    if (isset($_POST["cep"])) {
        $cep = preg_replace("/[^0-9]/", "", $_POST["cep"]);

        if (strlen($cep) != 8) {
            echo "<p>CEP inválido. Digite um CEP com 8 números.</p>";
        } else {
            $prefixo = substr($cep, 0, 5);

            if (isset($fretes[$prefixo])) {
                $municipio = $fretes[$prefixo]["municipio"];
                $valor = number_format($fretes[$prefixo]["valor"], 2, ",", ".");

                echo "<p>Município: <strong>$municipio</strong></p>";
                echo "<p>Valor do frete: <strong>R$ $valor</strong></p>";
            } else {
                echo "<p>Desculpe, não entregamos para este CEP.</p>";
            }
        }
    }
    ?>

    <h3>CEPs de exemplo (valores fictícios)</h3>
    <ul>
        <li>88490-000 – Paulo Lopes – R$ 10,00</li>
        <li>88495-000 – Garopaba – R$ 12,00</li>
        <li>88780-000 – Imbituba – R$ 14,00</li>
        <li>88790-000 – Laguna – R$ 16,00</li>
    </ul>
</body>
</html>
