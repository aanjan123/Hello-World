<?php
require_once'model/model.php';
require_once'controller/index.php';
require_once'view/view.php';
$model=new model();
$controller = new index($model);
$view = new view($model,$controller);
$view->output();
?>