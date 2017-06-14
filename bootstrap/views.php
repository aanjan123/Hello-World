<?php
class views{
    public function render($name){
        require_once'view/'.$name.'.php';
    }
}