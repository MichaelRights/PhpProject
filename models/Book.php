<?php
    class Book {
        public static $counter = 0;
        public $id;
        public $name;
        public $author;
        public $price;
        public $count;
        
        public function __construct($name, $author, $price){
            $this->id = ++self::$counter;
            $this->name = $name;
            $this->author = $author;
            $this->price = $price;
            $this->count = 1;
        }
    }
?>