<!DOCTYPE html>
<html>

<head>
    <title>Seccion 3</title>
</head>

<body>

    <h1>Seccion 3</h1>
    <form action="Seccion3.php" method="post">


        Reglas:
        <br>
        1. Todos los numeros deben ser positivos menos el de litros que pierde, ese puede ser cero.
        <br>
        2. El numero de litros de el balde debe ser mayor a el numero de litros que pierde la piscina
        <br>
        3. Usa valores enteros
        <br>
        
        <br>

        Ingrese los siguientes datos:

        <br>
        <br>


        Mis datos:

        <br>
        Ingrese el número de litros de la piscina:
        <input type="number" name="piscina" required>
        <br>

        Ingrese el número de litros de el balde :
        <input type="number" name="balde" required>
        <br>

        Ingrese el número de litros que pierde la piscina :
        <input type="number" name="pierde" required>
        <br>
        <br>
        <br>
        <br>




        Datos de el vecino
        <br>
        Ingrese el número de litros de la piscina:
        <input type="number" name="piscina2" required>
        <br>

        Ingrese el número de litros de el balde :
        <input type="number" name="balde2" required>
        <br>

        Ingrese el número de litros que pierde la piscina :
        <input type="number" name="pierde2" required>
        <br>


        <input type="submit" value="Quien gana?">
        <br><br>


    </form>





    <?php


    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $piscina = $_POST["piscina"];
        $balde = $_POST["balde"];
        $pierde = $_POST["pierde"];
        $piscina2 = $_POST["piscina2"];
        $balde2 = $_POST["balde2"];
        $pierde2 = $_POST["pierde2"];

        $actual = 0;
        $actual2 = 0;
        $vuelta = 0;

        
 
        

            while ($actual < $piscina || $actual2 < $piscina2) {
                $vuelta = $vuelta + 1;
                $actual = $actual + $balde - $pierde;
                $actual2 = $actual2 + $balde2 - $pierde2;


                if ($piscina <0 || $balde < 0){
                    echo "<h3> Incumples la regla 1  </h3>";
                    break;
        
                }
                elseif ($pierde <0 || $pierde2 <0 ) {
                    
                    echo "<h3> Incumples la regla 1 </h3>";
                    break;
                }
        
                elseif ($balde <= $pierde || $balde2 <= $pierde2 ){
                    echo "<h3> Incumples la regla 2 </h3>";
                    break;
                }
    
                if ($actual >= $piscina && $actual2 >= $piscina2) {
    
                    $resultado = 'Han empatado en ' . $vuelta . ' vueltas.';
    
                    echo "<h3> $resultado </h3>";
                    break;
                }
    
                if ($actual >= $piscina) {
                    $resultado = 'Tu ganas en ' . $vuelta . ' vueltas.';
    
                    echo "<h3> $resultado </h3>";
                    break;
                }
    
                if ($actual2 >= $piscina2) {
                    $resultado = 'El vecino gana en ' . $vuelta . ' vueltas.';
    
                    echo "<h3> $resultado </h3>";
                    break;
                }
                
            }






        
       


        
        



        

        
    }



    ?>
</body>

</html>