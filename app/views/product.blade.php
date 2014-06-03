@extends('item')
@section('price')
	@foreach($products as $product)
		<h4 class="pull-right">${{ $product->price }} </h4>
@stop
@section('name')
    <h4><a href="#">{{ $product->product_name }}</a>
@stop
@section('description')
<p>{{ $product->description }}</p>
@endforeach
@stop