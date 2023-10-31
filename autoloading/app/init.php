<?php
    // require_once ('product/infoProduct.php');
    require_once ('product/product.php');
    // require_once ('product/infoProduct.php');
    // require_once ('product/PrintInfoProduct.php');
    // require_once ('product/Game.php');
    // require_once ('product/Comic.php');

    spl_autoload_register(function ($class) {
        require_once __DIR__.'/product/' . $class . '.php';
    });
?>