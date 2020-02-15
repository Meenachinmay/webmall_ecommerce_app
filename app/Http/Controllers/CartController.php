<?php

namespace App\Http\Controllers;
use App\Product;

use Darryldecode\Cart\Cart;

class CartController extends Controller
{
    public function add_item(Product $product){
        
        // adding an item to the cart
        \Cart::session(auth()->id())->add(array(
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 4,
            'attributes' => array(),
            'associatedModel' => $product,
        ));

        return redirect()->route('cart.index');

    }

    public function index(){
        $cartItems = \Cart::session(auth()->id())->getContent();
        $count = \Cart::session(auth()->id())->getTotal();

        return view('cart.index', compact(['cartItems', 'count']));
    }

    public function update($cartItemId){
        \Cart::session(auth()->id())->update($cartItemId, [
           'quantity' => array(
               'relative' => false,
               'value' => request('quantity')
           )
        ]);

        return back();
    }

    public function delete($cartItemId){
        \Cart::session(auth()->id())->remove($cartItemId);

        return back();
    }

    public function checkOut(){
        return view('cart.checkOut');
    }
}
