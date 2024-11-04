@extends('layout')

@section('konten')
@if (session('login_success'))
    <div class="alert alert-success">
        {{ session('login_success') }}
    </div>
@endif
@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="container mt-5 fade-in">
    <div class="d-flex justify-content-between align-items-center mb-3">
        @auth
        <a class="btn btn-primary rounded-pill px-4 shadow-sm d-flex align-items-center" href="{{ route('siswa.tambah') }}">
            <i class="fas fa-user-plus me-2"></i> Tambah Siswa
        </a>
        @endauth
        <form class="d-flex shadow-sm" action="{{ route('siswa.tampil') }}" method="GET">
            <input class="form-control me-2 rounded-start" type="search" name="search" placeholder="Cari Siswa 🔍" aria-label="Search" value="{{ request('search') }}">
            <button class="btn btn-primary rounded-end" type="submit">Cari</button>
        </form>
    </div>

    <div class="table-responsive container mt-20 fade-in">
        <table class="table table-hover align-middle text-dark border">
            <thead class="table-primary text-center">
                <tr>
                    <th scope="col" style="width: 5%;">No</th>
                    <th scope="col" style="width: 45%;">Nama</th>
                    <th scope="col" style="width: 25%;">Foto</th>
                    <th scope="col" style="width: 25%;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswa as $no => $data)
                <tr class="text-center {{ $no % 2 == 0 ? 'table-light' : 'table-info' }}">
                    <td>{{ ($siswa->currentPage() - 1) * $siswa->perPage() + $no + 1 }}</td>
                    <td>{{ $data->nama }}</td>
                    <td>
                        @if($data->foto)
                            <img src="{{ asset('images/' . $data->foto) }}" alt="Foto Siswa" width="80" height="80" class="rounded-circle shadow-sm">
                        @else
                            <span class="text-muted fst-italic">Tidak ada foto</span>
                        @endif
                    </td>
                    <td>
                        <div class="btn-group" role="group">
                            <a class="btn btn-outline-info btn-sm" href="{{ route('siswa.show', $data->id) }}">
                                <i class="fas fa-eye"></i> Detail
                            </a>
                            @auth
                            <a class="btn btn-outline-warning btn-sm" href="{{ route('siswa.edit', $data->id) }}">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('siswa.destroy', $data->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">
                                    <i class="fas fa-trash-alt"></i> Hapus
                                </button>
                            </form>
                            @endauth
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <nav aria-label="Page navigation">
        <ul class="pagination pagination-sm justify-content-center mt-4">
            <li class="page-item {{ $siswa->onFirstPage() ? 'disabled' : '' }}">
                <a class="page-link" href="{{ $siswa->previousPageUrl() }}" aria-label="Previous">
                    <span aria-hidden="true">&laquo; Sebelumnya</span>
                </a>
            </li>
            @foreach ($siswa->getUrlRange(1, $siswa->lastPage()) as $page => $url)
                <li class="page-item {{ $page == $siswa->currentPage() ? 'active' : '' }}">
                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                </li>
            @endforeach
            <li class="page-item {{ $siswa->hasMorePages() ? '' : 'disabled' }}">
                <a class="page-link" href="{{ $siswa->nextPageUrl() }}" aria-label="Next">
                    <span aria-hidden="true">Berikutnya &raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
</div>
@endsection
