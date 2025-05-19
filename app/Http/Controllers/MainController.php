<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $genres = ["Fiction", "Non-Fiction", "Sci-Fi", "Fantasy", "Biography"];
        $authors = ["J.K. Rowling", "George Orwell", "Isaac Asimov", "Agatha Christie", "Yuval Noah Harari"];

        return view('home', compact('genres', 'authors'));
    }
}
