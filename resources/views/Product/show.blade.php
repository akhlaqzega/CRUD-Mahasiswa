@extends("layout.main")

@section("content")
<div class="container-fluid px-4">
    <h1 class="mt-4">Detail Produk</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('product.product') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Detail Produk</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-box"></i>
            Detail Produk
        </div>
        <div class="card-body">
            <p><strong>Nama Produk:</strong> {{ $product->nama }}</p>
            <p><strong>Jenis Produk:</strong> {{ $product->jenis }}</p>
            <p><strong>Harga Jual:</strong> Rp. {{ number_format($product->harga_jual, 0, ',', '.') }}</p>
            <p><strong>Harga Beli:</strong> Rp. {{ number_format($product->harga_beli, 0, ',', '.') }}</p>
            <p><strong>Deskripsi:</strong> {{ $product->deskripsi }}</p>
            <p><strong>Foto Produk:</strong></p>
            @if ($product->foto == 'nophoto.jpg')
                <img src="{{ url('image/nophoto.jpg') }}" alt="Foto Produk" style="width: 200px;">
            @else
                <img src="{{ url('image/'.$product->foto) }}" alt="Foto Produk" style="width: 200px;">
            @endif
        </div>
    </div>
    <a href="{{ route('product.product') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
