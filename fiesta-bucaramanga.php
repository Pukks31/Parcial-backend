<!DOCTYPE html>
<html>
<head>
    <title>Registro de Edades</title>
</head>
<body>
    <h1>Registro de Edades</h1>
    <form method="post">
        Ingrese una edad (0 para finalizar): 
        <input type="number" name="edad" min="0">
        <br>
        <br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    session_start(); 

    if (!isset($_SESSION['edades'])) {
        $_SESSION['edades'] = array();
    }


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $edad = intval($_POST["edad"]);

        if ($edad === 0) {
            if (count($_SESSION['edades']) > 0) {
                echo "";
                echo "Cantidad de edades ingresadas: " . count($_SESSION['edades']) . "<br>";
                echo "Promedio de edades: " . (array_sum($_SESSION['edades']) / count($_SESSION['edades'])) . "<br>";
                echo "Edad mínima: " . min($_SESSION['edades']) . "<br>";
                $_SESSION['edades'] = array();
            } else {
                echo "<h2>No se ingresaron edades.</h2>";
            }
        } elseif ($edad >= 18) {
            $_SESSION['edades'][] = $edad;
        } else {
            echo "<p>Ingrese una edad válida (mayor o igual a 18) o 0 para finalizar.</p>";
        }
    }
    ?>

</body>
</html>
