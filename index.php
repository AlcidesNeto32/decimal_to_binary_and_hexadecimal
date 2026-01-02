<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor Simples</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="box">
        <h3>Decimal -> Binário</h3>
        <form method="post">
            <label>Número Decimal:</label>
            <input type="number" name="valor">
            <input type="submit" value="Calcular" name="calcular">
        </form>

        <?php
        if (isset($_POST["calcular"])) {
            $valor = $_POST["valor"];
            if ($valor !== "" && $valor >= 0) {
                echo "<div class='resultado'>";
                echo "<strong>Binário:</strong> " . binario($valor);
                echo "</div>";
            } else {
                echo "<p class='msg-erro'>⚠️ Por favor, insira um número positivo!</p>";
            }
        }

        function binario($numero)
        {
            if ($numero === 0)
                return 0;
            $array = [];
            while ($numero !== 0) {
                $array[] = $numero % 2;
                $numero = (int) ($numero / 2);
            }
            return implode( array_reverse($array));
        }
        ?>
    </div>

</body>

</html>