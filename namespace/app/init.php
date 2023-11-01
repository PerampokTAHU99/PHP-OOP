<?php
    require_once ('product/product.php');
    // require_once ('product/infoProduct.php');
    // require_once ('product/infoProduct.php');
    // require_once ('product/PrintInfoProduct.php');
    // require_once ('product/Game.php');
    // require_once ('product/Comic.php');
    // require_once ('product/Users.php');
    // require_once ('service/Users.php');

    spl_autoload_register(function ($class) {
        $class = explode('\\',$class);
        $class = end($class);
        require_once __DIR__.'/product/' . $class . '.php';
    });

    spl_autoload_register(function ($class) {
        $class = explode('\\',$class);
        $class = end($class);
        require_once __DIR__.'/service/' . $class . '.php';
    });
?>