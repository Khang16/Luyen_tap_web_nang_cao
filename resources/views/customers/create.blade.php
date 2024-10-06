@extends('layouts.app')

@section('title', 'Them khach hang moi1')

@section('content')
<h1>Them khach hang moi</h1>
<form action="{{route('customers.store')}}" method="post">
    @csrf
    <div>
        <label for="fullname">Họ và tên</label>
        <input type="text" name="fullname" id="fullname" value="{{old('fullname')}}" required>
        @error('fullname')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>

    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{old('email')}}" required>
        @error('email')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>

    <div>
        <label for="phone">Số điện thoại</label>
        <input type="number" name="phone" id="phone" value="{{old('phone')}}" required>
        @error('phone')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>

    <div>
        <label for="image">Hình ảnh (URL)</label>
        <input type="text" name="image" id="image" value="{{old('phone')}}" required>
        @error('phone')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>

    <button type="submit">Thêm khách hàng</button>
</form>


@endsection