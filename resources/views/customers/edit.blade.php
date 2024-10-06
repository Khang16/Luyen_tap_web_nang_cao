<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa thông tin khách hàng</title>
</head>

<body>
    <h1>Chỉnh sửa thông tin khách hàng</h1>
    
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('customers.update', $customer->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Fullname -->
        <label for="fullname">Fullname:</label>
        <input type="text" id="fullname" name="fullname" value="{{ old('fullname', $customer->fullname) }}" required>
        @error('fullname')
            <div>{{ $message }}</div>
        @enderror

        <!-- Email -->
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ old('email', $customer->email) }}" required>
        @error('email')
            <div>{{ $message }}</div>
        @enderror

        <!-- Phone -->
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" value="{{ old('phone', $customer->phone) }}">
        @error('phone')
            <div>{{ $message }}</div>
        @enderror

        <!-- Image Upload -->
        <label for="image">Image:</label>
        <input type="file" id="image" name="image">
        @error('image')
            <div>{{ $message }}</div>
        @enderror
        <p>Current image: {{ $customer->image }}</p>

        <button type="submit">Update</button>
    </form>
</body>

</html>
