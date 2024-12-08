@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Detail Produk</h1>

    <table class="table table-bordered">
        <tr>
            <th>Nama</th>
            <td>{{ $product->name }}</td>
        </tr>
        <tr>
            <th>Harga</th>
            <td>{{ $product->price }}</td>
        </tr>
        <tr>
            <th>Stok</th>
            <td>{{ $product->stock }}</td>
        </tr>
    </table>

    <a href="{{ route('products.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
