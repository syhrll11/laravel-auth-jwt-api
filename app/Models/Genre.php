<?php
class Genre {
    public $id;
    public $name;

    public function __construct($id, $name){
        $this->id = $id;
        $this->name = $name;
    }

    public static function all() {
        return [
            new Genre(1, "Fiction"),
            new Genre(2, "Non-Fiction"),
            new Genre(3, "Science Fiction"),
            new Genre(4, "Fantasy"),
            new Genre(5, "Biography"),
        ];
    }
}
