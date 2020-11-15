<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function index($id){
        $movie = Movie::find($id);
        if(!$movie){
            return redirect('/home')->with('error', 'Could not find the id');
        }

        return view('movie.index', [
            'movie' => $movie
        ]);
    }

    public function create(){
        return view('movie.create');
    }

    public function store(Request $request){
        $this->validate($request, [
    		'name' => 'required',
    		'year' => 'required|integer|gte:1000|lte:2021',
    		'genre' => 'required',
    		'price' => 'required|integer',
    		'rating' => 'required|integer',
    		'description' => 'required'
        ]);
        
        Movie::create([
            'name' => $request->name,
    		'year' => $request->year,
    		'genre' => $request->genre,
    		'price' => $request->price,
    		'rating' => $request->rating,
    		'description' => $request->description
        ]);

        return redirect('/home');
    }

    public function edit($id){
        $movie = Movie::find($id);
        if(!$movie){
            return redirect('/home')->with('error', 'Could not find the id');
        }

        return view('movie.edit', [
            'movie' => $movie
        ]);
    }

    public function update($id, Request $request){
        $this->validate($request, [
    		'name' => 'required',
    		'year' => 'required|integer|gte:1000|lte:2021',
    		'genre' => 'required',
    		'price' => 'required|integer',
    		'rating' => 'required|integer',
    		'description' => 'required'
        ]);

        $movie = Movie::find($id);
        $movie->name = $request->name;
        $movie->year = $request->year;
        $movie->genre = $request->genre;
        $movie->price = $request->price;
        $movie->rating = $request->rating;
        $movie->description = $request->description;
        $movie->save();
        return redirect('movie/edit/'.$id)->with('message', 'Edited successfully');
    }

    public function delete($id){
        $movie = Movie::find($id);
        if(!$movie){
            return redirect('/home')->with('error', 'Could not find the id');
        }
        $movie->delete();

        return redirect('/home')->with('message', 'Deleted successfully');
    }
}
