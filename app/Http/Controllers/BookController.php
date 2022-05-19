<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookRequest;
use App\Models\Book;

class BookController extends Controller
{
    public function displayBook()
    {
        $books = Book::orderBy('book_id')->get();
        return view('books-gride-view', compact('books'));
    }

    public function index()
    {
        $books = BookRequest::orderBy('id')->paginate(10);
        $approved = false;
        return view('admin.pages.borrowReq', compact('books'));
    }
    public function unapproved()
    {
        $books = BookRequest::orderBy('id' )->where('is_approved', 0)->get();
        $approved = false;
        return view('admin.pages.borrowReq', compact('books', 'approved'));
    }

    public function approved()
    {
        $books = BookRequest::orderBy('id')->where('is_approved', 1)->get();
        $approved = true;
        return view('admin.pages.borrowReq', compact('books', 'approved'));
    }
    
       
    public function approve($id)
    {
        
        $book = BookRequest::find($id);
        if (!is_null($book)) {
            $book->is_approved = 1;
            $book->save();
        }

        session()->flash('success', 'Book has been approved !!');
        return back();
    }    

       
    public function unapprove($id)
    {
        
        $book = BookRequest::find($id);
        if (!is_null($book)) {
            $book->is_approved = 0;
            $book->save();
        }

        session()->flash('success', 'Book has been unapproved !!');
        return back();
    }
}
