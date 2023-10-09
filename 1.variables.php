<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            echo "<h2> Longitud de una circunferencia de 12 centímetros de radio y área del círculo asociado. </h2>";
            $radio = 12;
            $lon = 2 * pi()*$radio;
            $area = pi()* pow($radio, 2);
            echo "Longitud: $lon <br>", "Area: $area <br><br>";
        ?>
        <?php
            echo "<h2> Resultados de la suma, la resta, el producto, la división, el módulo y la potencia de 7 y 4 </h2>";
            $var1 = 7;
            $var2 = 4;
            $suma = $var1 + $var2;
            $resta = $var1 - $var2;
            $producto = $var1 * $var2;
            $division = $var1 / $var2;
            $modulo = $var1 % $var2;
            $pow = pow($var1, $var2);
            echo "Suma: $suma", "<br>", "Resta: $resta", "<br>", "Producto: $producto", "<br>", "Division: $division", "<br>", "Módulo: $modulo", "<br>", "Potencia: $pow <br><br>";
        ?>
        <?php
            echo "<h2> Un saludo, utilizando dos variables, la primera contiene “Buenos” y la segunda “días”. </h2>";
            $part1 = "Buenos";
            $part2 = "días";
            echo $part1." ".$part2;
        ?>

    </body>
</html>
