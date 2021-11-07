<?php 
function loadModel($name){
    $name = ucfirst(strtolower($name));
    $pathModel = 'Models/'.$name.'.php';
    if(file_exists($pathModel)){
        include_once($pathModel);
        $modelclass = new $name;
        return $modelclass;
    }else return null;
}

//load module / teamplate
function loadModule($name){
    $pathModule = 'Views/modules/'.$name.'.php';
    if(file_exists($pathModule)){
        include($pathModule);       
    }
}

function loadTemplate($name){
    $pathTemplate = 'Views/template/'.$name.'.php';
    if(file_exists($pathTemplate)){
        include($pathTemplate);       
    }else{
        echo 'Template '.$name.' not exits';
    }
}

function loadComponent($name){
    $pathcom = 'Views/components/'.$name.'.php';
    if(isset($_REQUEST['option'])){
        $pathcom = $pathcom.$_REQUEST['option'].'/';
        if(isset($_REQUEST['id'])){
            $pathcom = $pathcom.'detail.php';
        }else{
            if(isset($_REQUEST['cat'])){
                $pathcom = $pathcom.'category.php';
            }else{
                $pathcom = $pathcom.'index.php';
            }
        }
    }else{
        $pathcom = $pathcom.'trangchu/index.php';
    }
    if(file_exists($pathcom)){
        include_once($pathcom);
    }else{
        echo $pathcom.' not exits';
    }
}
//load class
function loadClass($name){
    $name = ucfirst(strtolower($name));
    $pathClass = 'core/'.$name.'.php';
    if(file_exists($pathClass)){
        include_once($pathClass);
        $nameclass = new $name;
        return $nameclass;
    }else return null;
}