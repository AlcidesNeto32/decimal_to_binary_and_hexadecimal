<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base Converter</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="container">
        <h2>Numeric Converter</h2>

        <form action="index.php" method="post">
            <p>Choose the conversion type:</p>
            <div class="radio-group">
                <label class="radio-option">
                    <input type="radio" name="option" value="binary" checked> Binary
                </label>
                <label class="radio-option">
                    <input type="radio" name="option" value="hexadecimal"> Hexadecimal
                </label>
            </div>

            <label for="value">Decimal Value:</label>
            <input type="number" name="value" id="value" placeholder="Ex: 25" required>

            <input type="submit" name="calculate" value="Convert Now">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["option"]) && isset($_POST["value"])) {
                $option = $_POST["option"];
                $value = $_POST["value"];
                $result = $option === "binary" ? decimalToBinary($value) : decimalToHexaDecimal($value);
                echo "<div class='result-box success'>Result: $result</div>";
            } else {
                echo "<div class='result-box error'>Please fill in all fields!</div>";
            }
        }

        function decimalToBinary(int $number): string
        {
            if ($number === 0) {
                return 0;
            }

            $binary = '';
            while ($number != 0) {
                $binary = $number % 2 . $binary;
                $number = intdiv($number, 2);
            }
            return $binary;
        }

        function decimalToHexaDecimal(int $number): string
        {
            if ($number === 0) {
                return 0;
            }

            $hexChars = '0123456789ABCDEF';
            $hexadecimal = '';
            while ($number > 0) {
                $hexadecimal = $hexChars[$number % 16] . $hexadecimal;
                $number = intdiv($number, 16);
            }

            return $hexadecimal;
        }
        ?>
    </div>

</body>

</html>