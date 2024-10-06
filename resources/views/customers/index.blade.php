@extends('layouts.app')

@section('title', 'Danh sách khách hàng')

@section('content')
    <h1>Danh sách khách hàng</h1>

    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <ul>
        @foreach ($customers as $customer)
            <li>
                {{ $customer->fullname }} - {{ $customer->email }}
                <a href="{{ route('customers.show', $customer->id) }}">Chi tiết</a>
                <a href="{{ route('customers.edit', $customer->id) }}">Sửa</a>
                <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Xóa</button>
                </form><br>
                
            </li>
        @endforeach
    </ul>
    <button><a href="{{route('products.index')}}">Trang sản phẩm</a></button>
@endsection
