<?php

function index()
{

    $model = new Model;
    $data = $model->data();
    // var_dump($data);

    require './view/index.php';
}

function daerah(){

    require './view/daerah/daerah.php';
}

function daerahStore($data){

    echo $data;
}