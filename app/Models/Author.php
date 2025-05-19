<?php
class Author {
    public $id;
    public $name;

    public function __construct($id, $name){
        $this->id = $id;
        $this->name = $name;
    }

    public static function all() {
        return [
            new Author(1, "J.K. Rowling"),
            new Author(2, "George Orwell"),
            new Author(3, "Isaac Asimov"),
            new Author(4, "Agatha Christie"),
            new Author(5, "Yuval Noah Harari"),
        ];
    }
}
