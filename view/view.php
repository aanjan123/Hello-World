<?php
class view{
    public $model,$index;
    public function __construct($model,$index)
    
    {
      $this->model=$model;
      $this->index=$index;
    }
    public function output(){
        echo $this->model->string;
    }
}
?>