<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\BookRequest;
use App\Models\User;



class dashboardController extends Controller
{

    public function requestBook(Request  $request)
    {
        $books = Book::where('book_id', $request->book_id)->first();
       
        if (!is_null($books )) {
            $book_request = new BookRequest();
            $book_request->book_id = $books->book_id;
            $book_request->book_name = $books->book_name;
            $book_request->user_id = '1';
            $book_request->user_name = 'randyula';
            $book_request->user_message = 'I want to borrow this book';
            $book_request->save();
            
            session()->flash('success', 'Book Request successfully sent !!');
            return redirect()->back();
        }else{
            session()->flash('error', 'No book found !!');
            return "error";
        }
        
    }

    

   
}
