<?php
ini_set ("display_errors", "On");

ini_set ("max_execution_time", '5');

ini_set('include_path',ini_get('include_path').':/your_include_dir:');



//Get
//Obtiene el valor de la opción que se va a configurar

echo 'display_errors = ' . ini_get('display_errors') . "\n";
echo 'register_globals = ' . ini_get('register_globals') . "\n";
echo 'post_max_size = ' . ini_get('post_max_size') . "\n";
echo 'post_max_size+1 = ' . (ini_get('post_max_size')+3) . "\n";

