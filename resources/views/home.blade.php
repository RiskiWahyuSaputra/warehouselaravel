@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h2 class="mb-4 fw-bold">Dashboard</h2>
        </div>
    </div>
    
    <div class="row">
        <!-- Card Total Products -->
        <div class="col-md-4 mb-4">
            <div class="card border-left-primary shadow h-100 py-2 border-primary border-0 border-start" style="border-width: 5px !important;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Produk</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalProducts }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-box-seam h2 text-gray-300 opacity-50"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card Total Price Value -->
        <div class="col-md-4 mb-4">
            <div class="card border-left-success shadow h-100 py-2 border-success border-0 border-start" style="border-width: 5px !important;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Nilai inventaris</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp {{ number_format($totalValue, 2) }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-currency-dollar h2 text-gray-300 opacity-50"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card Welcome User -->
        <div class="col-md-4 mb-4">
            <div class="card border-left-info shadow h-100 py-2 border-info border-0 border-start" style="border-width: 5px !important;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Selamat datang kembali</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ Auth::user()->name }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-person h2 text-gray-300 opacity-50"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3 bg-dark">
                    <h6 class="m-0 font-weight-bold text-white">Aksi cepat</h6>
                </div>
                <div class="card-body">
                    <p>Selamat datang di sistem manajemen produk sederhana. Gunakan menu di sebelah kiri untuk menavigasi aplikasi atau gunakan tombol cepat di bawah ini.</p>
                    <a href="{{ route('products.create') }}" class="btn btn-primary">
                        <i class="bi bi-plus-circle me-1"></i> Tambah produk baru
                    </a>
                    <a href="{{ route('products.index') }}" class="btn btn-outline-secondary ms-2">
                        <i class="bi bi-list-task me-1"></i> Lihat inventaris
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
