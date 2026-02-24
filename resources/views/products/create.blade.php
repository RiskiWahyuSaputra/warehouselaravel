@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between bg-dark text-white" >
                    <span>Tambah produk baru</span>
                    <a href="{{ route('products.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
                </div>

                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('products.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama:</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                        </div>
                        <div class="mb-3">
                            <label for="category_id" class="form-label">Kategori:</label>
                            <select name="category_id" id="category_id" class="form-control" required>
                                <option value="">-- Pilih kategori --</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Deskripsi:</label>
                            <textarea class="form-control" name="description" id="description" rows="3" placeholder="Description"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Harga:</label>
                            <input type="number" step="0.01" name="price" class="form-control" id="price" placeholder="Price" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="stock" class="form-label">Stok awal:</label>
                                <input type="number" name="stock" class="form-control" id="stock" value="0" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="low_stock_threshold" class="form-label">Batas Stok Rendah:</label>
                                <input type="number" name="low_stock_threshold" class="form-control" id="low_stock_threshold" value="10" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
