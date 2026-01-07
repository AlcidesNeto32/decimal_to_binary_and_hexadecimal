<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Bases</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="container">
        <h2>Conversor Numérico</h2>

        <form action="index.php" method="post">
            <p>Escolha o tipo de conversão:</p>
            <div class="radio-group">
                <label class="radio-option">
                    <input type="radio" name="option" value="binary"> Binário
                </label>
                <label class="radio-option">
                    <input type="radio" name="option" value="hexadecimal"> Hexadecimal
                </label>
            </div>

            <label for="value">Valor Decimal:</label>
            <input type="number" name="value" id="value" placeholder="Ex: 25" required>

            <input type="submit" name="calculate" value="Converter Agora">
        </form>

        <?php
        // Processamento PHP
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["option"]) && isset($_POST["value"])) {
                $option = $_POST["option"];
                $value = $_POST["value"];

                if ($option === "binary") {
                    $result = decimalToBinary($value);
                } else {
                    $result = decimalToHexaDecimal($value);
                }
                echo "<div class='result-box success'>Resultado: $result</div>";
            } else {
                echo "<div class='result-box error'>Por favor, prasdencha todos os campos!</div>";
            }
        }

        function decimalToBinary($numero) {
            if ($numero == 0){
                return 0;
            };
            $array = [];
            while ($numero != 0) {
                $array[] = $numero % 2;
                $numero = (int) ($numero / 2);
            }
            return implode(array_reverse($array));
        }

        function decimalToHexaDecimal($number) {
            if ($number == 0) {
                return 0;
            };
            $array = [];
            $hexadecimal = "";
            while ($number != 0) {
                array_push($array, $number % 16);
                $number = (int) ($number / 16);
            }
            foreach ($array as $value) {
                if ($value < 10) {
                    $hexadecimal .= $value;
                } else {
                    switch ($value) {
                        case 10:
                    $hexadecimal .= 'A';
                    break;
                case 11:
                    $hexadecimal .= 'B';
                    break;
                case 12:
                    $hexadecimal .= 'C';
                    break;
                case 13:
                    $hexadecimal .= 'D';
                    break;
                case 14:
                    $hexadecimal .= 'E';
                    break;
                case 15:
                    $hexadecimal .= 'F';
                    break;
                    }
                }
            }
            return strrev($hexadecimal);
        }
        ?>
    </div>

</body>

</html>