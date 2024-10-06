@extends('layouts.product')

@section('content')
    <h1>Danh sach san pham</h1>
    <p>Name: {{ $product->name }}</p>
    <p>Email: {{ $product->price }}</p>
    <p>Phone: {{ $product->quantity }}</p>
    <p>Image: {{ $product->description }}</p>
@endsection
