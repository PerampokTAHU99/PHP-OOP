<?php
    class PrintInfoProduct
    {
        public $productList = array();
    
        public function addProduct(Product $product)
        {
            $this->productList[] = $product;
        }
    
        public function print()
        {
            $str = "PRODUCT LIST : <br>";
    
            foreach ($this->productList as $p) {
                $str .= "- {$p->getInfoProduct()} <br>";
            }
            return $str;
        }
    }
?>