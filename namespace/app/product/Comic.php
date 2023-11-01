<?php
class Comic extends Product implements infoProduct
{
    public $page;

    public function __construct($titleC = '-', $authorC = '-', $publisherC = '-', $priceC = 0, $pageC = 0)
    {
        parent::__construct($titleC, $authorC, $publisherC, $priceC);

        $this->page = $pageC;
    }
    public function getInfo()
    {
        $str = "{$this->title} | {$this->getLabel()} (Rp.{$this->price})";
        return $str;
    }

    public function getInfoProduct()
    {
        $str = "Comic : " . $this->getInfo() . " - {$this->page} Pages";

        return $str;
    }
}
?>