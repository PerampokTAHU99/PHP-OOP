<?php
    require_once ('app/init.php');

    $product1 = new Comic("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
    $product2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 2500000, 50);
    
    $printProduct = new PrintInfoProduct();
    $printProduct->addProduct($product1);
    $printProduct->addProduct($product2);
    echo $printProduct->print();
    echo "<hr>";
    new test();
?>