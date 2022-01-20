<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h2> Variables y constantes </h2>";
        $ciudad="Madrid";
        define("DATO","un dato de ejemplo");
        echo " la constante DATO es ".DATO;
        $numero=5;
        $numero++;
        echo "<p>el numero es ".$numero."</p>";//el valor es 6 en vez de 5 por el incremento
        echo " El número es ".$numero++."</p>";//el valor es 6 pero la variable número adquiere el valor de 7
        echo "<p> EL NÜMERO ES ".$numero."</p>";
        echo "<h2> Operadores</h2>";
        $numero1=10;
        $numero2=15;
        if ($numero1>=$numero2){//operador de comparación 
            echo "<p> El primer número es mayor</p>";
        }
        else{
            echo "<p> el primer número es menor </p>";
        }
        $aprobado=true;
        if ($aprobado){
            echo "<p> has aprobado </p>";
        }
        else{
            echo "<p> NA: no apto  </p>";
        }
        $nota="8";
        if($nota==8){//ejercicio de examen diferencia == a ===
            echo "<p> tu nota es un 8 </p>";
        }
        else{
            echo "<p> tu nota no es 8 </p>";
        }
        echo "<h2> Estructuras de control</h2>";
        for($i=0;$i<=10;$i++);{
            echo $i;
            "<br>";
        }
        $i=0;
        while($i<=10){
            echo $i++ ."-->";
        }
    ?>
</body>
</html>