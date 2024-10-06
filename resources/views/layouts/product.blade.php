<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <header>
            <h1>He thong quan ly san pham</h1>
            <nav>
                <ul>
                    <li><a href="{{route('products.index')}}">Danh sach san pham</a></li>
                </ul>
            </nav>
        </header>

        @if(session('success'))
            <div>
                {{session('success')}}
            </div>
        @endif

        @if(session('error'))
            <div>
                {{session('error')}}
            </div>
        @endif

        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>