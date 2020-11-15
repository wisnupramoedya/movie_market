@extends('layouts.app')

@section('content')
<div class="container p-3">
    <div class="row justify-content-between">
        <div class="col-4">
            <div class="row">
                <div class="col-2">
                    <a href="{{ route('home') }}" class="mr-3">Kembali</a>
                </div>
                <div class="col-10">
                    <h2>
                        Movie
                    </h2>
                </div>
            </div>
        </div>
        <div class="col-4 d-flex justify-content-end">
            @if(Auth::user()->role == 'admin')
            <a type="submit" href="/movie/edit/{{$movie->id}}" class="btn text-white" style="background-color: #02132D;">Update</a>
            <a type="submit" href="/movie/delete/{{$movie->id}}" class="btn text-white btn-danger ml-2">Delete</a>
            @endif
        </div>
    </div>
    <div class="row justify-content-around">
        <div class="col-lg-12 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                    <div class="container">
                        <div class="controls">
                            <div class="row mb-3">
                                <div class="col-6">
                                    <ul class="list-group">
                                        <li class="list-group-item font-weight-bold" >Title</li>
                                        <li class="list-group-item">{{ $movie->name }}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <ul class="list-group">
                                        <li class="list-group-item font-weight-bold">Year</li>
                                        <li class="list-group-item">{{ $movie->year }}</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-group">
                                        <li class="list-group-item font-weight-bold">Genre</li>
                                        <li class="list-group-item">{{ $movie->genre }}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <ul class="list-group">
                                        <li class="list-group-item font-weight-bold">Price</li>
                                        <li class="list-group-item">{{ $movie->price }}</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-group">
                                        <li class="list-group-item font-weight-bold">Rating</li>
                                        <li class="list-group-item">{{ $movie->rating }}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <ul class="list-group" role="alert">
                                        <li class="list-group-item font-weight-bold">Description</li>
                                        <li class="list-group-item">{{ $movie->description }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-3">
        <div class="col-4">
            <a type="submit" href="/cart/create/{{$movie->id}}" class="btn text-white btn-danger ml-2"><i class="fa fa-shopping-cart" style="color: white"></i> Cart</a>
            <a type="submit" href="/cart/buy/{{$movie->id}}" class="btn text-black btn-warning"><i class="fa fa-credit-card"></i> Buy</a>
        </div>
    </div>
</div>
@endsection