@extends('layouts.app')

@section('content')
<div class="container p-3">
    <div class="row justify-content-center">
        <div class="col-sm-4">
            @if(session()->has('error'))
            <div class="alert alert-danger">
                {{ session()->get('error') }}
            </div>
            @elseif(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
            @endif
        </div>
    </div>
    <div class="row justify-content-between">
        <div class="col-4">
            <h2>
                List Movies
            </h2>
        </div>
        <div class="col-4 d-flex justify-content-end">
            @if(Auth::user()->role == 'admin')
            <a class="btn text-white" href="/movie/create" style="background-color: #02132D;">Create New Movie</a>
            @endif
        </div>
    </div>
    <div class="row justify-content-start">
        @foreach ($movies as $movie)
        <div class="card m-2" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $movie->name }}</h5>
                <p class="card-text">{{ $movie->description }}</p>
                <a href="/movie/{{$movie->id}}" class="btn btn-primary">Read More</a>
            </div>
        </div>
        @endforeach
    </div>
    {{$movies->appends(['sort' => 'votes'])->links()}}
</div>
@endsection
