<?php
    class Product{
        private $title, 
                $author,
                $publisher,
                $price,
                $discount = 0;
        public function __construct($titleC = '-', $authorC = '-',  $publisherC = '-', $priceC = 0)
        {
            $this->title = $titleC;
            $this->author = $authorC;
            $this->publisher = $publisherC;
            $this->price = $priceC;
        }

        public function setTitle($title){
            $this->title = $title;
        }

        public function getTitle(){
            return $this->title;
        }

        public function setAuthor($author){
            $this->author = $author;
        }

        public function getAuthor(){
            return $this->author;
        }
        public function setPublisher($publisher){
            $this->title = $publisher;
        }

        public function getPublisher(){
            return $this->publisher;
        }

        public function getLabel(){
            return "$this->author, $this->publisher";
        }

        public function getInfoProduct(){
                $str = "{$this->title} | {$this->getLabel()} (Rp.{$this->price})";
            
            return $str;
        }
        public function setPrice($price){
            $this->price = $price;
        }
        public function getPrice(){
            return $this->price -($this->price * $this->discount /100);
        }
        public function setDiscount($discount){
            return $this->discount = $discount;
        }
        public function getDiscount(){
            return $this->discount;
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
    echo "<hr>";
    $product1->setTitle("One Piece");
    echo $product1->getTitle();


?>