@extends('layouts.app')

@section('content')
	<div class="container">
		<h2>CheckOut</h2>

		<h4>Shipping information</h4>

		<form action="{{ route('orders.store') }}" method="POST">
			@csrf

			<div class="form-group">
				<label>Full name</label>
				<input type="text" name="shipping_fullname" id="" class="form-control">
			</div>

			<div class="form-group">
				<label>State</label>
				<input type="text" name="shipping_state" id="" class="form-control">
			</div>			

			<div class="form-group">
				<label>City</label>
				<input type="text" name="shipping_city" id="" class="form-control">
			</div>

			<div class="form-group">
				<label>Zip</label>
				<input type="text" name="shipping_zipcode" id="" class="form-control">
			</div>

			<div class="form-group">
				<label>Address</label>
				<input type="text" name="shipping_address" id="" class="form-control">
			</div>

			<div class="form-group">
				<label>Mobile</label>
				<input type="text" name="shipping_phone" id="" class="form-control">
			</div>

			<button type="submit" class="btn btn-primary">Place order</button>
		</form>
	</div>
	
@endsection