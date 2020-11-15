@extends('layouts.app')

@section('content')
<form class="container p-3" method="POST" action="/movie/update/{{ $movie->id }}">
    @csrf
    @method('PUT')
    <div class="row justify-content-center">
        <div class="col-sm-4">
            @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
            @endif
        </div>
    </div>
    <div class="row justify-content-between">
        <div class="col-4">
            <div class="row">
                <div class="col-2">
                    <a href="/movie/{{$movie->id}}" class="mr-3">Kembali</a>
                </div>
                <div class="col-10">
                    <h2>
                        Update List Movie
                    </h2>
                </div>
            </div>
        </div>
        <div class="col-4 d-flex justify-content-end">
            @if(Auth::user()->role == 'admin')
            <input type="submit" class="btn text-white" style="background-color: #02132D;" value="Update" />
            @endif
        </div>
      </div>
    <div class="row justify-content-around">
        <div class="col-lg-12 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                    <div class="container">
                        <div class="controls">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="form_title">Title *</label>
                                        <input id="form_title" type="text" name="name" class="form-control" placeholder="Please enter movie's title" required="required" data-error="Title is required." value="{{ $movie->name }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_year">Year *</label>
                                        <input id="form_year" type="text" name="year" class="form-control" placeholder="Please enter movie's year" required="required" data-error="Year is required." value="{{ $movie->year }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_genre">Genre *</label>
                                        <input id="form_genre" type="text" name="genre" class="form-control" placeholder="Please enter movie's genre" required="required" data-error="Genre is required." value="{{ $movie->genre }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_price">Price *</label>
                                        <input id="form_price" type="text" name="price" class="form-control" placeholder="Please enter movie's price" required="required" data-error="Price is required." value="{{ $movie->price }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_rating">Please specify your rating *</label>
                                        <select id="form_rating" name="rating" class="form-control" required="required" data-error="Please specify your rating.">
                                            <option value="">--Select Your Rating--</option>
                                            @foreach ([1.00, 2.00, 3.00, 4.00, 5.00] as $option)
                                                <option value="{{$option}}" 
                                                @if ($movie->rating == $option)
                                                    {{"selected"}}
                                                @endif
                                                >{{$option}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_description">Description *</label>
                                        <textarea id="form_description" name="description" class="form-control" placeholder="Write your description here." rows="4" required="required" data-error="Please, leave us a description.">{{ $movie->description }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection