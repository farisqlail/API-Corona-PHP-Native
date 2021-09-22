<?php

require_once './controller/Controller.php';
require_once './model/Model.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if('/mvc/index.php' === $uri) {
	index();

} elseif('/mvc/index.php/daerah' === $uri){
    daerah();

} elseif('/mvc/index.php/daerahStore' ===  $uri && isset($_POST['daerah'])){
    daerahStore($_POST['daerah']);

} else {
	header('HTTP/1.1 404 Not Found');
}
 
// spl_autoload_register(function($class){
//     require_once $class . '.php';
// });
 
// new Controller;

