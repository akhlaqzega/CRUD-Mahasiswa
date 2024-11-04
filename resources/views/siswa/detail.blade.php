@extends('layout')

@section('konten')
<div class="container mt-5 fade-in">
    <h2 class="text-center mb-4">Detail Siswa: <strong>{{ $siswa->nama }}</strong></h2>
    <div class="card shadow-lg border-0">
        <div class="card-header bg-primary text-white text-center">
            <h5 class="mb-0">Biodata Lengkap</h5>
        </div>
        <div class="card-body mt-5 fade-in">
            <div class="row">
                <div class="col-md-4 text-center mt-5 fade-in">
                    @if($siswa->foto)
                        <img src="{{ asset('images/' . $siswa->foto) }}" alt="Foto Siswa" width="150" class="rounded-circle border border-primary p-1 mb-3">
                    @else
                        <div class="text-muted fst-italic">Tidak ada foto</div>
                    @endif
                </div>
                <div class="col-md-8  fade-in">
                    <p><strong>NIS:</strong> {{ $siswa->nis }}</p>
                    <p><strong>Nama:</strong> {{ $siswa->nama }}</p>
                    <p><strong>Alamat:</strong> {{ $siswa->alamat }}</p>
                    <p><strong>No HP:</strong> {{ $siswa->no_hp }}</p>
                    <p><strong>Jenis Kelamin:</strong> {{ $siswa->jenis_kelamin }}</p>
                    <p><strong>Hobi:</strong> {{ $siswa->hobi }}</p>
                    <p><strong>Tanggal Lahir:</strong> {{ $siswa->tanggal_lahir }}</p> <!-- Kolom baru -->
                    <p><strong>Agama:</strong> {{ $siswa->agama }}</p> <!-- Kolom baru -->
                </div>
            </div>
            <div class="text-center mt-4 ">
                <a href="{{ route('siswa.tampil') }}" class="btn btn-secondary px-4 py-2">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection
