<?php
    abstract class Product{
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
        abstract public function getInfoProduct();
        public function getInfo(){
                $str = "{$this->title} | {$this->getLabel()} (Rp.{$this->price})";
            return $str;
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
            $str = "Comic : ".$this->getInfo()." - {$this->page} Pages";

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
            $str = "Game : ".$this->getInfo()." ~ {$this->esDuration} Hours Duration";
    
            return $str;
        }

        

    }


    class PrintInfoProduct{
        public $productList = array();
        
        public function addProduct(Product $product){
            $this->productList[] = $product;
        }

        public function print(){
            $str = "PRODUCT LIST : <br>";

            foreach($this->productList as $p){
                $str .="- {$p->getInfoProduct()} <br>";
            }
            return $str;
        }
    }   

    $product1 = new Comic("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
    $product2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 2500000,50);

    $printProduct = new PrintInfoProduct();
    $printProduct->addProduct($product1);
    $printProduct->addProduct($product2);
    echo $printProduct->print();
   

?>