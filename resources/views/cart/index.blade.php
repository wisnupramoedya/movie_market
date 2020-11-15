@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-start">
        <div class="col-4">
            <a href="{{ route('home') }}" class="mr-3">Kembali</a>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-4">
            @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
            @endif
            @if(session()->has('error'))
            <div class="alert alert-danger">
                {{ session()->get('error') }}
            </div>
            @endif
        </div>
    </div>
    <div id="cart" class="row my-4">
        <h3>
            My Carts
        </h3>
    </div>
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Price</th>
                    <th scope="col">Option</th>
                    @if (Auth::user()->role == 'admin')
                        <th scope="col">Profile</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($carted as $key => $cart)
                <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>{{$cart->movie->name}}</td>
                    <td>{{$cart->movie->price}}</td>
                    <td>
                        <a type="submit" href="/cart/cancel/{{$cart->id}}" class="btn text-white btn-danger ml-2"><i class="fa fa-close" style="color: white"></i> Cancel</a>
                        @if (Auth::user()->id == $cart->user_id)
                        <a type="submit" href="/cart/upgrade/{{$cart->id}}" class="btn text-black btn-warning"><i class="fa fa-credit-card"></i> Buy</a>
                        @endif
                    </td>
                    @if (Auth::user()->role == 'admin')
                        <td>{{$cart->user->name}}</td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div id="buy" class="row my-4">
        <h3>
            Purchased
        </h3>
    </div>
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    @if (Auth::user()->role == 'admin')
                        <th scope="col">Profile</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($purchased as $key => $cart)
                <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>{{$cart->movie->name}}</td>
                    @if (Auth::user()->role == 'admin')
                        <td>{{$cart->user->name}}</td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection