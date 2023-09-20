<!DOCTYPE html>
<html>
<head>
    <title>Cifrando Digitos</title>
</head>
<body>
    <h1>Cifrado Digitos</h1>
    <form method="post">
        <label for="numero">Ingrese cuatro digitos:</label>
        <input type="text" name="numero" id="numero">
        <button type="submit">Cifrar</button>
    </form>

    <?php
    function cifrardigitos($numero) {
        $dig1 = ($numero % 10 + 7) % 10;
        $dig2 = ((int)($numero / 10) % 10 + 7) % 10;
        $dig3 = ((int)($numero / 100) % 10 + 7) % 10;
        $dig4 = ((int)($numero / 1000) + 7) % 10;

        $numero_cifrado = $dig3 * 1000 + $dig4 * 100 + $dig1 * 10 + $dig2;

        return $numero_cifrado;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $entrada = $_POST["numero"];

        if (strlen($entrada) == 4 && is_numeric($entrada)) {
            $numero = (int)$entrada;
            $numero_cifrado = cifrardigitos($numero);
            echo "Número cifrado: $numero_cifrado";
        } else {
            echo "Ingrese cuatro digitos numericos.";
        }
    }
    ?>
</body>
</html>
