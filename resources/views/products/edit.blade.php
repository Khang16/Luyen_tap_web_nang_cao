<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa thông tin san pham</title>
</head>

<body>
    <h1>Chỉnh sửa thông tin san pham</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $product->name }}" required>
        <input type="text" name="price" value="{{ $product->price }}" required>
        <input type="text" name="quantity" value="{{ $product->quantity }}">
        <input type="text" name="description" value="{{ $product->description }}">
        <button type="submit">Update</button>
    </form>
</body>

</html>