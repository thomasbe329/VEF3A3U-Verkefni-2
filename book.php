<?php

class Book {

    protected $title;
    protected $price;

    public function __construct($title, $price) {
        $this->title = $title;
        $this->price = $price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getTitle() {
        return $this->title;
    }
}

class ExtendedBook extends Book{

    protected $publisher;

    public function __construct($title, $price, $publisher)
    {
        parent::__construct($title, $price);
        $this->publisher = $publisher;
    }

    function setPublisher($publisher) {
        $this->publisher = $publisher;
    }

    function getPublisher() {
        return $this->publisher;
    }
}

$efnafreadi = new Book('Efnafræði 101', 3600);
$staerdfraedi = new Book('STÆ 603', 5799);
$islenska = new ExtendedBook('Brennu-Njáls Saga', 2500, 'M%N');

var_dump($efnafreadi);
var_dump($staerdfraedi);
var_dump($islenska);