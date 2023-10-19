<?php
    class Product{
        public $title, 
            $author,
            $publisher,
            $price,
            $page,
            $esDuration;

        public function __construct($titleC = '-', $authorC = '-',  $publisherC = '-', $priceC = 0, $pageC ='-', $esDurationC='-')
        {
            $this->title = $titleC;
            $this->author = $authorC;
            $this->publisher = $publisherC;
            $this->price = $priceC;
            $this->page = $pageC;
            $this->esDuration = $esDurationC;
        }

        public function getLabel(){
            return "$this->author, $this->publisher";
        }

        public function getInfoProduct(){
                $str = "{$this->title} | {$this->getLabel()} (Rp.{$this->price})";
            
            return $str;
        }
    }

    class Comic extends Product{
        public function getInfoProduct()
        {
            $str = "Comic : {$this->title} | {$this->getLabel()} (Rp.{$this->price}) - {$this->page} Pages";

            return $str;
        }
    }

    class Game extends Product{
        public function getInfoProduct()
        {
            $str = "Game : {$this->title} | {$this->getLabel()} (Rp.{$this->price}) ~ {$this->esDuration} Hours Duration";

            return $str;
        }
    }


    class PrintInfoProduct{
        public function print(product $product){
            $str = "{$product->title} |{$product->getLabel()} (Rp.$product->price)";
            return $str;
        }
    }   

    $product1 = new Comic("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
    $product2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 2500000,0);
   
    echo $product1->getInfoProduct();
    echo "<br>";
    echo $product2->getInfoProduct();
?>