<?php
class main extends controller{
    public function __construct(){
        parent::__construct();
        $this->view->render('output');
    }
}