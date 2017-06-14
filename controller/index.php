<?php
class index extends controller {
    public $model;
    public function __construct($model){
       parent::__construct();
        $this->model=$model;
    }
}
?>