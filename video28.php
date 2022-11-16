<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<div>
    <?php
    //init set nos permite modiificar los valores que estan predeterminados mientras que el svrip se ejecuta
var_dump(ini_get('diplay_errors'));
ini_set('max_execution_time',3);
sleep(5);

echo 'Hello world';
echo $h=array(3);
//memory_limit
    var_dump(ini_set('memory_limit'));




        ?>

</div>
</body>
</html>
