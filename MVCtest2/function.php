<?php
    function C($name, $method){
        require_once('/libs/controller/' . $name . 'Controller.class.php');
        //$testController = new testController();
        //testController -> show();
        $class = $name . 'Controller';
        $obj = new $class();
        $obj -> $method();
    }
    
    function M($name){
        require_once('/libs/model/' . $name . 'Model.class.php');
        $class = $name . 'Model';
        $obj = new $class();
        return $obj;
    }

    function V($name){
        require_once('/libs/view/' . $name . 'View.class.php');
        $class = $name . 'View';
        $obj = new $class();
        return $obj;
    }

    function daddslashes($str){
        return (!get_magic_quotes_gpc())?addslashes($str):$str;

    }
?>