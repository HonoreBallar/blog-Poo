<?php

spl_autoload_register(function($className){
    //className = Controllers\Article
    // on veut require = libraries/Controllers/Article.php;
    // var_dump($className);

    $className = str_replace("\\","/",$className);//replace \ en / dans className
    require_once("src/$className.php");
});