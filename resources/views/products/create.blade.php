@extends('layouts.product')

@section('title', 'Them san pham1')

@section('content')
<h1>Them san pham</h1>
<form action="{{route('products.store')}}" method="post">
    @csrf
    <div>
        <label for="name">Ten san pham</label>
        <input type="text" name="name" id="name" value="{{old('name')}}" >
        @error('name')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>

    <div>
        <label for="price">Price</label>
        <input type="text" name="price" id="price" value="{{old('price')}}" >
        @error('price')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>

    <div>
        <label for="quantity">Quantity</label>
        <input type="text" name="quantity" id="quantity" value="{{old('quantity')}}" >
        @error('quantity')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>

    <div>
        <label for="description">Description</label>
        <input type="text" name="description" id="description" value="{{old('description')}}" >
        @error('description')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>

    <button type="submit">Thêm san pham</button>
</form>


@endsection