<?php
function __autoload($class){
    require_once'bootstrap/'.$class.'.php';
}
$app=new bootstrap();
?>