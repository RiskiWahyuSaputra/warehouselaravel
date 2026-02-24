@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <span>Tampilkan produk</span>
                    <a href="{{ route('products.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
                </div>

                <div class="card-body">
                    <div class="mb-3">
                        <strong>Nama:</strong>
                        {{ $product->name }}
                    </div>
                    <div class="mb-3">
                        <strong>Kategori:</strong>
                        {{ $product->category->name ?? 'Uncategorized' }}
                    </div>
                    <div class="mb-3">
                        <strong>Deskripsi:</strong>
                        {{ $product->description }}
                    </div>
                    <div class="mb-3">
                        <strong>Harga:</strong>
                        Rp {{ number_format($product->price, 2) }}
                    </div>
                    <div class="mb-3">
                        <strong>Stok:</strong>
                        <span class="badge {{ $product->stock <= $product->low_stock_threshold ? 'bg-danger' : 'bg-primary' }}">
                            {{ $product->stock }}
                        </span>
                    </div>
                    <div class="mb-3">
                        <strong>Batas stok terendah:</strong>
                        {{ $product->low_stock_threshold }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
