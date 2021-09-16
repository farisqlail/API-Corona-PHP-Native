<?php

require_once './controller/controller.php';
require_once './model/model.php';
 
spl_autoload_register(function($class){
    require_once $class . '.php';
});
 
new Controller;

