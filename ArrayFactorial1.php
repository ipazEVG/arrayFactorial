<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Define el conjunto de caracteres utilizado en el documento -->
    <meta charset="UTF-8">
    <!-- Título que aparece en la pestaña del navegador -->
    <title>ArrayFactorial1</title>
    <!-- Enlaza una hoja de estilos CSS externa para dar estilo a la tabla -->
    <link rel="stylesheet" href="CssArrayFactorial1.css">
</head>
<body>
    <!-- Inicio de la tabla -->
    <table>
        <!-- Encabezado de la tabla que ocupa dos columnas -->
        <th colspan="2">TABLA DE FACTORIALES DEL 1 AL 10</th>
        <!-- Fila de encabezado con los nombres de las columnas -->
        <tr>
            <td>Número</td> <!-- Columna para el número -->
            <td>Factorial</td> <!-- Columna para el valor factorial -->
        </tr>
        <?php
        // Inicializa la variable para el número
        $num = 1;
        // Inicializa la variable para el factorial
        $factorial = 1;
        
        // Bucle para calcular el factorial de los números del 0 al 10
        for ($num; $num <= 10; $num++){
            // Bucle para calcular el factorial de un número específico
            for($i = 1; $i <= $num; $i++){
                // Multiplica el factorial acumulado por el número actual
                $factorial = $factorial * $i;
            }
            // Imprime una nueva fila en la tabla con el número y su factorial
            echo "<tr><td>$num</td><td>$factorial</td></tr>";
            // Resetea el factorial a 1 para el siguiente número
            $factorial = 1;
        }
        ?>
        <!-- Fila final que muestra el nombre del autor -->
        <tr><td colspan="2">Ismael Paz Bernal</td></tr>
    </table>
</body>
</html>
