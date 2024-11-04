@extends('layout')

@section('konten')
    <h4>Edit Siswa</h4>

    <form action="{{ route('siswa.update', $siswa->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <label>Nis</label>
        <input type="number" name="nis" value="{{ $siswa->nis }}" class="form-control mb-2">
        
        <label>Nama</label>
        <input type="text" name="nama" value="{{ $siswa->nama }}" class="form-control mb-2">
        
        <label>Alamat</label>
        <input type="text" name="alamat" value="{{ $siswa->alamat }}" class="form-control mb-2">
        
        <label>No Hp</label>
        <input type="text" name="no_hp" value="{{ $siswa->no_hp }}" class="form-control mb-2">
        
        <label>Jenis Kelamin</label>
        <input type="text" name="jenis_kelamin" value="{{ $siswa->jenis_kelamin }}" class="form-control mb-2">
        
        <label>Hobi</label>
        <input type="text" name="hobi" value="{{ $siswa->hobi }}" class="form-control mb-2">

        <label>Agama</label>
        <input type="text" name="agama" value="{{ $siswa->agama }}" class="form-control mb-2">

        <label>Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" value="{{ $siswa->tanggal_lahir }}" class="form-control mb-2">

        <label>Foto</label>
        <input type="file" name="foto" class="form-control mb-2">
        @if ($siswa->foto)
            <img src="{{ asset('storage/' . $siswa->foto) }}" alt="Foto Siswa" width="100" class="mt-2">
        @endif

        <button class="btn btn-primary">Perbarui</button>
    </form>
@endsection
