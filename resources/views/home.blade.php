@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h2>Products</h2>

    <div class="row">
        @foreach($products as $product)
            <div class="col-4 p-2">
                <div class="card p-2">
                    <img class="card-img-top" src="{{ asset('default-product.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">{{ $product->name }}</h4>
                        <p class="card-text">{{ $product->description }}</p>
                    </div>
                    <div class="card-body">
                        <a href="#" class="card-link">Add to cart</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
