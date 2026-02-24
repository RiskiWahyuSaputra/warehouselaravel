@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="h3 mb-0 text-gray-800 fw-bold">Persediaan produk</h2>
                <a href="{{ route('products.create') }}" class="btn btn-primary shadow-sm">
                    <i class="bi bi-plus-lg me-1"></i> Tambah produk baru
                </a>
            </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show shadow-sm border-0 mb-4" role="alert">
                    <i class="bi bi-check-circle me-2"></i>
                    {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="card shadow border-0">
                <div class="card-header bg-white py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Daftar barang</h6>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="ps-4">No</th>
                                    <th>Nama produk</th>
                                    <th>Kategori</th>
                                    <th>Stok</th>
                                    <th>Harga</th>
                                    <th class="text-center pe-4">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($products as $product)
                                <tr>
                                    <td class="ps-4 text-muted">{{ $loop->iteration }}</td>
                                    <td>
                                        <div class="fw-bold text-dark">{{ $product->name }}</div>
                                    </td>
                                    <td>
                                        <span class="badge bg-info-soft text-info border border-info border-opacity-25 py-2 px-3">
                                            {{ $product->category->name ?? 'Uncategorized' }}
                                        </span>
                                    </td>
                                    <td>
                                        @if($product->stock <= $product->low_stock_threshold)
                                            <span class="badge bg-danger-soft text-danger border border-danger border-opacity-25 py-2 px-3" title="Low Stock!">
                                                <i class="bi bi-exclamation-triangle-fill me-1"></i> {{ $product->stock }}
                                            </span>
                                        @else
                                            <span class="badge bg-primary-soft text-primary border border-primary border-opacity-25 py-2 px-3">
                                                {{ $product->stock }}
                                            </span>
                                        @endif
                                    </td>
                                    <td>
                                        <span class="badge bg-success-soft text-success border border-success border-opacity-25 py-2 px-3">
                                            Rp {{ number_format($product->price, 2) }}
                                        </span>
                                    </td>
                                    <td class="text-center pe-4">
                                        <div class="btn-group" role="group">
                                            <a class="btn btn-outline-info btn-sm" href="{{ route('products.show', $product->id) }}" title="View Detail">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                            <a class="btn btn-outline-primary btn-sm" href="{{ route('products.edit', $product->id) }}" title="Edit Product">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are you sure you want to delete this product?')" title="Delete Product">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="text-center py-5">
                                        <div class="text-muted">
                                            <i class="bi bi-inbox h1 d-block mb-3 opacity-25"></i>
                                            No products found in the database.
                                        </div>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer bg-white py-3 text-muted small">
                    Showing {{ $products->count() }} items in inventory.
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .bg-success-soft {
        background-color: rgba(25, 135, 84, 0.1);
    }
    .bg-info-soft {
        background-color: rgba(13, 202, 240, 0.1);
    }
    .bg-danger-soft {
        background-color: rgba(220, 53, 69, 0.1);
    }
    .bg-primary-soft {
        background-color: rgba(13, 110, 253, 0.1);
    }
    .table-hover tbody tr:hover {
        background-color: rgba(0, 123, 255, 0.03);
    }
    .btn-group .btn {
        padding: 0.25rem 0.6rem;
    }
</style>
@endsection
