<?php
    class Product{
        public $title, 
            $author,
            $publisher,
            $price,
            $page,
            $esDuration,
            $type;

        public function __construct($titleC = '-', $authorC = '-',  $publisherC = '-', $priceC = 0, $pageC ='-', $esDurationC='-',$typeC ='-')
        {
            $this->title = $titleC;
            $this->author = $authorC;
            $this->publisher = $publisherC;
            $this->price = $priceC;
            $this->page = $pageC;
            $this->esDuration = $esDurationC;
            $this->type = $typeC;

        }

        public function getLabel(){
            return "$this->author, $this->publisher";
        }

        public function getAllInfo(){
                $str = "{$this->type} : {$this->title} | {$this->getLabel()} (Rp.{$this->price})";
            if ($this->type == "Comic"){
                $str .=" {$this->page} Pages";
            }else if($this->type == "Game"){
                $str .=" {$this->esDuration} Hours Duration";
            }
            return $str;
        }
    }

    class PrintInfoProduct{
        public function print(product $product){
            $str = "{$product->title} |{$product->getLabel()} (Rp.$product->price)";
            return $str;
        }
    }

    $product1 = new Product("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100,0,"Comic");
    $product2 = new Product("Uncharted", "Neil Druckman", "Sony Computer", 2500000,0,50,"Game");
   
    echo $product1->getAllInfo();
    echo "<br>";
    echo $product2->getAllInfo();
?>