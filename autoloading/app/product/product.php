<?php
abstract class Product
{
    protected $title,
    $author,
    $publisher,
    $price,
    $discount = 0;
    public function __construct($titleC = '-', $authorC = '-', $publisherC = '-', $priceC = 0)
    {
        $this->title = $titleC;
        $this->author = $authorC;
        $this->publisher = $publisherC;
        $this->price = $priceC;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function getAuthor()
    {
        return $this->author;
    }
    public function setPublisher($publisher)
    {
        $this->title = $publisher;
    }
    public function getPublisher()
    {
        return $this->publisher;
    }
    public function getLabel()
    {
        return "$this->author, $this->publisher";
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function getPrice()
    {
        return $this->price - ($this->price * $this->discount / 100);
    }
    public function setDiscount($discount)
    {
        return $this->discount = $discount;
    }
    public function getDiscount()
    {
        return $this->discount;
    }

    abstract public function getInfo();

}
?>