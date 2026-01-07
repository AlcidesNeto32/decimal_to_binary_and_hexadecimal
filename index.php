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
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["option"]) && isset($_POST["value"])) {
                $option = $_POST["option"];
                $value = $_POST["value"];
                $result = $option === "binary" ? decimalToBinary($value) : decimalToHexaDecimal($value);
                echo "<div class='result-box success'>Resultado: $result</div>";
            } else {
                echo "<div class='result-box error'>Por favor, preencha todos os campos!</div>";
            }
        }

        function decimalToBinary(int $number):string
        {
            if ($number === 0) {
                return 0;
            }
            ;
            $binary = [];
            while ($number != 0) {
                array_push($binary, $number % 2);
                $number = (int) ($number / 2);
            }
            return implode(array_reverse($binary));
        }

        function decimalToHexaDecimal(int $number):string
        {
            if ($number === 0) {
                return 0;
            }

            $array = [];
            $count = 0;
            $hexadecimal = "";
            while ($number != 0) {
                array_push($array, $number % 16);
                $number = (int) ($number / 16);
                if ($array[$count] < 10) {
                    $hexadecimal .= $array[$count];
                } else {
                    switch ($array[$count]) {
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
                $count++;
            }
            return strRev($hexadecimal);
        }
        ?>
    </div>

</body>

</html>