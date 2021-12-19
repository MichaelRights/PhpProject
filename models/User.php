<?php

class User {
    public static $count = 0;
    public $id;
    public $firstName;
    public $lastName;
    public $age;
    public $email;
    public $cart;
    public $books;
    private $password;
    
    public function __construct($email, $password, $firstName, $lastName, $age){
        $this->id = ++self::$count;
        $this->email = $email;
        $this->password = $password;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->cart = [];
        $this->books = [];
    }


    public function getFullName() {
        return $this->firstName." ". $this->lastName;
    }

    public function checkPassword($password) {
        return $this->password == $password;
    }

    public function addToCart($book) {
        foreach ($this->cart as $b) {
            if($b->id == $book->id){
                $b->count++;
                return true;
            }
        }
        array_push($this->cart, $book);
        return true;
    }

    public function addBooks() {
        $newBooks = [];
        foreach($this->cart as $newBook) {
            $notFound = true;
            foreach($this->books as $book) {
                if($book->id == $newBook->id)
                {
                    $book->count += $newBook->count;
                    $notFound = false;
                    break;
                }
            }
            if($notFound) {
                array_push($newBooks, $newBook);
            }
        }
        $this->cart = [];
        $this->books = array_merge($this->books, $newBooks);
    }
}

?>