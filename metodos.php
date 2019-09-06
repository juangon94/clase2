<?php
$a = 10;
$b = 55;
function sumar ($numero1,$numero2){
    echo $numero1+$numero2;
}
function resta ($numero1,$numero2){
    echo $numero1-$numero2;
}
function multiplicacion ($numero1,$numero2){
    echo $numero1*$numero2;
}
function division ($numero1,$numero2){
    echo $numero1/$numero2;
}
echo "suma:<br>";

echo sumar($a,$b);
echo "<br>";
echo sumar(10,20);
echo "<br>";
echo sumar(230,399);
echo "<br>resta<br>";
echo resta (20,40);
echo "<br>";
echo resta (30,10);
echo "<br>";
echo "multiplicacion:<br>";
echo multiplicacion ($a,$b);
echo "<br>";
echo multiplicacion (20,100);
echo "<br>division:<br>";
echo division ($a,$b);
echo "<br>";
echo division (400,20);


?>