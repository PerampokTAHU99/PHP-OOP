<?php
    class Product{
        public $title, 
            $author,
            $publisher,
            $price;

        public function __construct($titleC = '-', $authorC = '-',  $publisherC = '-', $priceC = 0)
        {
            $this->title = $titleC;
            $this->author = $authorC;
            $this->publisher = $publisherC;
            $this->price = $priceC;

        }

        public function getLabel(){
            return "$this->author, $this->publisher";
        }
    }

    $product1 = new Product("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
    $product2 = new Product("Uncharted", "Neil Druckman", "Sony Computer", 2500000);
    $product3 = new Product("DragonBall");
  
    echo "Comic : ".$product1->getLabel();
    echo "<br>";
    echo "Game : ".$product2->getLabel();
    echo "<br>";
    var_dump($product3);

?>