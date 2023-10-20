<?php
    class Product{
        public $title, 
            $author,
            $publisher;
            
        private $price;
        protected $discount = 0;

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

        public function getInfoProduct(){
                $str = "{$this->title} | {$this->getLabel()} (Rp.{$this->price})";
            
            return $str;
        }

        public function getPrice(){
            return $this->price -($this->price * $this->discount /100);
        }
    }

    class Comic extends Product{
        public $page;

        public function __construct($titleC = '-', $authorC = '-',  $publisherC = '-', $priceC = 0, $pageC = 0){
            parent::__construct($titleC, $authorC,  $publisherC, $priceC);

            $this->page = $pageC;
        }

        public function getInfoProduct()
        {
            $str = "Comic : ".parent::getInfoProduct()." - {$this->page} Pages";

            return $str;
        }
    }

    class Game extends Product{
        public $esDuration;
    
        public function __construct($titleC = '-', $authorC = '-',  $publisherC = '-', $priceC = 0, $esDurationC = 0){
            parent::__construct($titleC, $authorC, $publisherC, $priceC);
    
            $this->esDuration = $esDurationC;
        }

        public function setDiscount($discount){
            return $this->discount = $discount;
        }
    
        public function getInfoProduct()
        {
            $str = "Game : ".parent::getInfoProduct()." ~ {$this->esDuration} Hours Duration";
    
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
    $product2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 2500000,50);
   
    echo $product1->getInfoProduct();
    echo "<br>";
    echo $product2->getInfoProduct();
    echo "<hr>";
    $product2->setDiscount(50);
    echo $product2->getPrice();
?>