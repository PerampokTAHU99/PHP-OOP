<?php
    class Product{
        public $title, 
            $author,
            $publisher,
            $price;
        public function getLable(){
            return "$this->author, $this->publisher";
        }
    }

    // $product1 = new Product();
    // $product1-> title = "Naruto";
    // var_dump($product1);

    // $product2 = new Product();
    // $product2->title = "Uncharted";
    // $product2->addProperty = "Adding Property automatically";
    // var_dump($product2);

    $product3 = new Product();
    $product3 -> title = "Naruto";
    $product3 -> author = "Masashi Kishimoto";
    $product3 -> publisher = "Shonen Jump";
    $product3 -> price = 30000;

    $product4 = new Product();
    $product4 -> title = "Uncharted";
    $product4 -> author = "Neil Druckman";
    $product4 -> publisher = "Sony Computer";
    $product4 -> price = 2500000;

    // echo "Komik: " . $product3->author . ", " . $product3->publisher;
    // echo $product3->getLable();
    echo "Comic : ".$product3->getLable();
    echo "<br>";
    echo "Game : ".$product4->getLable();

?>