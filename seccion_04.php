<!DOCTYPE html>
<html>
<head>
    <title>Contador de Números Primos que Empiezan con 1</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Contador de Números Primos que Empiezan con 1</h1>
    
    <form method="post" action="">
        Ingrese un número:
        <input type="number" name="numero" required>
        <input type="submit" value="Calcular">
    </form>
    
    <?php
    function esPrimo($n) {
        if ($n <= 1) {
            return false;
        }
        for ($i = 2; $i * $i <= $n; $i++) {
            if ($n % $i == 0) {
                return false;
            }
        }
        return true;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $numero = $_POST['numero'];
        $count = 0;
        
        for ($i = 11; $i <= $numero; $i += 10) {
            if (esPrimo($i)) {
                $count++;
            }
        }
        
        echo "<p>Hay $count números primos que comienzan con 1 por debajo de $numero.</p>";
    }
    ?>
</body>
</html>
