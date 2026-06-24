@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Produk Ikan Cupang</h2>

    <a href="{{ route('products.create') }}">
        Tambah Produk
    </a>

    <table border="1" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Nama Ikan</th>
            <th>Jenis</th>
            <th>Stok</th>
            <th>Harga</th>
        </tr>

        @foreach($products as $key => $product)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $product->nama_ikan }}</td>
            <td>{{ $product->jenis }}</td>
            <td>{{ $product->stok }}</td>
            <td>{{ $product->harga }}</td>
        </tr>
        @endforeach

    </table>
</div>
@endsection