<?php

namespace App\Http\Controllers;

use App\Models\book_genre;
use App\Http\Requests\Storebook_genreRequest;
use App\Http\Requests\Updatebook_genreRequest;

class BookGenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storebook_genreRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(book_genre $book_genre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(book_genre $book_genre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatebook_genreRequest $request, book_genre $book_genre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(book_genre $book_genre)
    {
        //
    }
}
