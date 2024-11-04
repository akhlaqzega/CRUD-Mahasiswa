@extends('layout')

@section('konten')
<div class="container  mt-5 fade-in">
    <h2 class="text-center text-black mb-4">Fitur Aplikasi</h2>

    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card text-center">
                <div class="card-body">
                    <i class="fas fa-users fa-3x mb-3"></i>
                    <h5 class="card-title">Manajemen Siswa</h5>
                    <p class="card-text">Kelola data siswa dengan mudah dan efisien. Tambah, edit, dan hapus data siswa kapan saja.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card text-center">
                <div class="card-body">
                    <i class="fas fa-search fa-3x mb-3"></i>
                    <h5 class="card-title">Pencarian Data</h5>
                    <p class="card-text">Fasilitas pencarian yang cepat untuk menemukan data siswa berdasarkan NIS, nama, atau informasi lainnya.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card text-center">
                <div class="card-body">
                    <i class="fas fa-chart-line fa-3x mb-3"></i>
                    <h5 class="card-title">Laporan dan Statistik</h5>
                    <p class="card-text">Dapatkan laporan dan statistik mengenai data siswa untuk membantu analisis dan pengambilan keputusan.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card text-center">
                <div class="card-body">
                    <i class="fas fa-lock fa-3x mb-3"></i>
                    <h5 class="card-title">Keamanan Data</h5>
                    <p class="card-text">Data siswa aman dan terlindungi dengan sistem autentikasi dan otorisasi yang kuat.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card text-center">
                <div class="card-body">
                    <i class="fas fa-mobile-alt fa-3x mb-3"></i>
                    <h5 class="card-title">Akses Mobile</h5>
                    <p class="card-text">Aplikasi dapat diakses melalui perangkat mobile sehingga Anda bisa mengelola data siswa kapan saja dan di mana saja.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card text-center">
                <div class="card-body">
                    <i class="fas fa-comments fa-3x mb-3"></i>
                    <h5 class="card-title">Dukungan Pelanggan</h5>
                    <p class="card-text">Tim dukungan pelanggan siap membantu Anda dengan segala pertanyaan dan masalah yang Anda hadapi.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
