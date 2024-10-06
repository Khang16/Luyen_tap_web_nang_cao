@extends('layouts.product')

@section('title', 'Danh sách san pham')

@section('content')
<h1>Danh sách san pham</h1>

@if (session('success'))
    <div>{{ session('success') }}</div>
@endif

<ul>

    <div class="container">
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body" style="border: 4px solid red">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">Giá: {{ $product->price }}</p>
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary btn-sm">Chi tiết</a>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="phan_trang">
            <div class="col-12">
                <div class="icon_phan_trang">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>

</ul>
<style>
    .icon_phan_trang svg {
        width: 16px;
        height: 16px;
    }

    .row {
        display: grid;
        grid-template-columns: repeat(5, 0.5fr);
        align-items: center;
        justify-content: center;
        gap: 20px;
        text-align: center;
    }
    .phan_trang{
        padding-top: 10px;
        text-align: center;
    }
</style>
@endsection