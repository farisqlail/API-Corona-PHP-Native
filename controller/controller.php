<?php
 
class Controller {
 
    public function __construct() {

        $model = new Model;
        $data = $model->data();
        
        require_once './view/index.php';
    }
    
}