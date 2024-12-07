@extends('base')

@section('title', 'Product')

@section('content')
    <h1>{{ $product->name }}</h1>
    <p>{{ $product->description }}</p>
    <p>Price: {{ $product->price }} uah</p>
    @if($product->image_url)
        <img src="{{ $product->image_url }}" alt="{{ $product->name }}" />
    @else
        <p>No image available</p>
    @endif
@endsection