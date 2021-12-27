<?php 
require_once("models/User.php");
require_once("database/Books.php");

class Users {
    public static $users = [];
    public static $notInitalized = true;
    
    public static function init()
    {
        if(self::$notInitalized) {
            self::$users = [
                new User("a@gmail.com", "bardpass", "John", "Smith", 30),
                new User("lev@gmail.com", "12345678", "Levon", "Sarukhanyan", 80),
                new User("m@gmail.com", "telepuzik", "Poxos", "Petrosyan", 100)
            ];
        }
    }

    public static function getAll() {
        return self::$users;
    }
    public static function getUserByEmail($email){
        foreach(self::$users as $user){
            if($user->email == $email){
                return $user;
            }
        }
        return false;
    }

    public static function getUserById($id) {
        foreach(self::$users as $user) {
            if($user->id == $id) {
                return $user;
            }
        }
        return false;
    }

    public static function getCart($id) {
        $user = self::getUserById($id);
        return $user->cart;
    }

    public static function getBooksOfUser($id) {
        $books = [];
        $user = self::getUserById($id);
        foreach ($user->books as $bookId) {
            array_push($books,Books::getBookById($bookId));
        }
        return $books;
    }

    public static function addToCart($id, $bookId) {
        $user = self::getUserById($id);
        $book = clone Books::getBookById($bookId);
        $user->addToCart($book);
    }
}

?>