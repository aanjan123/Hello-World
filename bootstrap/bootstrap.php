<?php 
class bootstrap{
    public function __construct(){
        $url=isset($_GET['url'])?$_GET['url']:null;
        $url=rtrim($url,'/');
        $url=explode('/',$url);
        if(empty($url[0])){
            require'controller/help.php';
            $controller=new help();
            return FALSE;
        }else{
        $FILES='controller/'.$url[0].'.php';
        if(file_exists($FILES)){
            require_once $FILES;
            $controller=new $url[0];
            if(isset($url[2])){
                $controller->{$url[1]}($url[2]);
            }else{
                if(isset($url[1])){
                $controller->{$url[1]}();
                }
            }
        }else{
            echo $FILES."\tDonot Exists";
        }
    }
    }
}
?>