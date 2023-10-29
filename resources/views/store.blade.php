@php
    $pageName = 'store';
    $store = 'netcom';
@endphp
@include('layouts.header')
<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
</head>
<body>
    <h1>Product List</h1>

    <div class="product-list">
        @php
            $count = 0;
        @endphp

        @foreach ($products as $product)
            @if ($count % 4 == 0)
                <div class="product-row">
            @endif

            <div class="product">
                <img src="{{ $product->image_link }}" alt="{{ $product->name }}">
                <h2>{{ $product->name }}</h2>
                <p>Store ID: {{ $product->store_id }}</p>
                <p>Price: ${{ $product->price }}</p>
            </div>

            @if ($count % 4 == 3)
                </div>
            @endif

            @php
                $count++;
            @endphp
        @endforeach

        {{-- Close any open row --}}
        @if ($count % 4 !== 0)
            </div>
        @endif
    </div>

</body>
</html>
@include('layouts.footer')
