<?php 
require_once("models/Book.php");

class Books {
    public static $books = [];
    public static $notInitalized = true;
    
    public static function init()
    {
        if(self::$notInitalized) {
            self::$books = [
                new Book("The Old Man and The Sea", "Ernest Hemingway", 30),
                new Book("War And Peace", "Lev Tolstoy", 30),
                new Book("Harry Potter", "Joanne Rowling", 25),
                new Book("Code The Hidden Language of Computer Hardware and Software", "Charles Petzold", 30)
            ];
        }
    }
    
    public static function getBookById($id) {
        foreach(self::$books as $book) {
            if($book->id == $id) {
                return $book;
            }
        }
        return false;
    }

    public static function getAll() {
        return self::$books;
    }
}

?>