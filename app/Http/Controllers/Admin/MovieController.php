<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Movie;
use App\Http\Controllers\Controller;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()->route('public.movie.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();



        $movie = new Movie();

        $movie->fill($data);

        $movie->save();

        $newMovie = Movie::orderBy('id', 'desc')->first();

        return redirect()->route('movie.show', $newMovie);



    }

    /**
     * Display the specified resource.
     *
     * @param  Movie $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        return redirect()->route('movie.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        return view('movie.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Movie $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        $data = $request->all();

        $movie->update($data);

        return redirect()->route('movie.show', compact('movie'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Movie $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();

        return redirect()->route('movie.index');
    }
}
