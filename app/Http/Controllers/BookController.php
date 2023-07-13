<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\ResponseEvent;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $book = Book::All();
        return response()->json([
            'data' => $book
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $book = Book::create([
            'isbn' => $request->isbn,
            'title' => $request->title,
            'subtitel' => $request->subtitel,
            'author' => $request->author,
            'publisher' => $request->publisher,
            'page' => $request->page,
            'description' => $request->description,
            'website' => $request->website
        ]);
        return response()->json([
            'data' => $book
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return response()->json([
            'data' => $book
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $book->isbn = $request->isbn;
        $book->title = $request->title;
        $book->subtitel = $request->subtitel;
        $book->author = $request->author;
        $book->publisher = $request->publisher;
        $book->page = $request->page;
        $book->description = $request->description;
        $book->website = $request->website;
        $book->save();

        return response()->json([
            'data' => $book
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return response()->json([
            'message' => 'List Book Delete'
        ]);
    }
}
