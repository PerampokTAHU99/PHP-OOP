<?php
class Game extends Product implements infoProduct
{
    public $esDuration;

    public function __construct($titleC = '-', $authorC = '-', $publisherC = '-', $priceC = 0, $esDurationC = 0)
    {
        parent::__construct($titleC, $authorC, $publisherC, $priceC);

        $this->esDuration = $esDurationC;
    }
    public function getInfo()
    {
        $str = "{$this->title} | {$this->getLabel()} (Rp.{$this->price})";
        return $str;
    }
    public function getInfoProduct()
    {
        $str = "Game : " . $this->getInfo() . " ~ {$this->esDuration} Hours Duration";

        return $str;
    }



}
?>