<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Movie;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function all(){
        if(Auth::user()->role == 'user'){
            $carts = Cart::where('user_id', Auth::user()->id)->get();
        }
        else{
            $carts = Cart::all();
        }
        
        $purchased = array();
        $carted = array();
        foreach ($carts as $cart) {
            if($cart->status == 'buy'){
                array_push($purchased, $cart);
            }
            else{
                array_push($carted, $cart);
            }
        }

        return view('cart.index', [
            'carted' => $carted,
            'purchased' => $purchased
        ]);
    }

    public function isFound($movie_id){
        if(Cart::where([
            ['movie_id', '=', $movie_id],
            ['user_id', '=', Auth::user()->id]
        ])->count()){
            return true;
        }
        return false;
    }

    public function create($movie_id){
        if($this->isFound($movie_id)){
            return redirect('/cart')->with('error', 'You already have it');
        }

        
        Cart::create([
            'user_id' => Auth::user()->id,
    		'movie_id' => $movie_id,
    		'status' => 'cart'
        ]);
            
        return redirect('/cart/#cart');
    }

    public function upgrade($id){
        $cart = Cart::find($id);

        $cart->status = 'buy';
        $cart->save();

        return redirect('/cart/#buy')->with('message', 'Bought successfully');
    }

    public function buy($movie_id){
        if($this->isFound($movie_id)){
            return redirect('/cart')->with('error', 'You already have it');
        }
        Cart::create([
    		'user_id' => Auth::user()->id,
    		'movie_id' => $movie_id,
    		'status' => 'buy'
        ]);

        return redirect('/cart/#buy');
    }

    public function cancel($id){
        $cart = Cart::find($id);

        $cart->delete();
        return redirect('/cart')->with('message', 'Canceled successfully');
    }
}
