@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Your cart</h2>
        @if ($count > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cartItems as $cartItem)
                    <tr>
                        <td scope="row">{{ $cartItem->name }}</td>
                        <td>
                            {{ \Cart::session(auth()->id())->get($cartItem->id)->getPriceSum() }}
                        </td>
                        <td>
                            <form action="{{ route('cart.update', $cartItem->id) }}">
                                <input name="quantity" type="number" value="{{ $cartItem->quantity }}">
                                <button class="btn btn-primary btn-sm mx-1">Save</button>
                            </form>
                        </td>
                        <td>
                            <a name="quantity" href="{{ route('cart.destroy', $cartItem->id) }}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @else
            <p>
                Currently, You don't have any item in your cart.
            </p>
        @endif

        <h3>
            Total Price: $ {{ \Cart::session(auth()->id())->getTotal() }}
        </h3>

        <a href="#" class="btn btn-primary mt-2" role="button">Proceed to checkout</a>
    </div>
@endsection










