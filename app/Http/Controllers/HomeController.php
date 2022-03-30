<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;


class HomeController extends Controller
{

    public function index() {

        // SELECT * from books;
        $books = Book::all();

        //SELECT * FROM books where rating >= 6;
        //$books = Book::where('rating', '>=', 6)->get();

        //SELECT * FROM books where rating = 10;
        //$books = Book::where('rating', 10)->get();

        //SELECT * FROM books WHERE rating >= 4 ORDER BY title ASC
        //$books = Book::where('rating', '>=', 4)->orderBy('title')->limit(2)->get();


        //$book = Book::find(3); equivale a

        //$book = Book::where('id', 3)->first();

        //dd($book);


        // per creare un nuovo libro

        /*
        $book = new Book();
        $book->author = 'mario rossi';
        $book->title = 'Italia oggi';
        $book->description = '';
        $book->rating = 6;
        $book->save();
        */

        // per aggiornare un libro esistente

        /*
        $book = Book::where('id', 3)->first();
        $book->title = 'nuovo titolo';
        $book->save();
        */

        return view('home', compact('books'));


    }

    public function contactUs() {
        return view('contatti');
    }

}
