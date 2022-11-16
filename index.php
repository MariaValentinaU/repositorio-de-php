

<?php

include 'vendor/autoload.php';

//ARRAY NORMAL
$uno=array(1,2,3,4);
d($uno);


//array
$num=array('uno','dos','tres','cuatro');
d($num[2]) ;






echo '<br>';
//ARRAY COMBINE
$a = array('avocado', 'apple', 'banana');
$b = array('Aguacate', 'Manzana', 'Banana');
$combine = array_combine($a, $b);
d($combine);





echo '<br>';

//Realiza una función mediante devolución de llamada
function Myfunction($val)
{
    return($val*$val);
}

$map=array(1,2,3,4,5);
d(array_map("Myfunction",$map));
echo '<br>';



//Combina los arrrays
$a1=array("red","green");
$a2=array("blue","yellow");
d(array_merge($a1,$a2));
echo '<br>';



//Muestra el resultado diferente entre arrays
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

$diff=array_diff($a1,$a2);
d($diff);
echo '<br>';



//Cuenta los valores del array
    $cars=array("Volvo","BMW","Toyota");
 d(count($cars)) ;
echo '<br>';




//Muestra solo el primer valor del array

    $colores=array('a'=>'rojo','b'=>'verde','c'=>'azul');
echo array_shift($colores);
d($colores);
echo '<br>';



//Divide la matriz en 2

$Col=array('Azul','Rojo','Verde','Morado','Negro','Amarillo');
d(array_chunk($Col,2));
echo '<br>';



//Elimima el ultimo elemento de la matriz
$pop=array("Rojo","Verde","Azul");
array_pop($pop);
d($pop);
echo '<br>';




//muestra el array por medio de una cadena definida por el usuario
function MyfunctionDos($v1,$v2)
{
    return $v1 . "-" . $v2;
}
$anim=array("Perros","Gatos","Caballos");
d(array_reduce($anim,"MyfunctionDos"));
echo '<br>';




//Busca la posicion en la que se encuentra el valor
$a=array("a"=>"Rojo","b"=>"Verde","c"=>"Azul");
echo array_search("Rojo",$a);
echo '<br>';

//array filter filtra los valores que deseemos

function test_odd($var)
{
    return($var & 1);
}

$a1=array(1,3,2,3,4,6);
d(array_filter($a1,"test_odd"));
echo '<br>';

