@extends('layout')

@section('konten')
    <h4>Tambah Siswa</h4>

    <form action="{{ route('siswa.submit') }}" method="post" enctype="multipart/form-data">
        @csrf

        <label>NIS</label>
        <input type="number" name="nis" class="form-control mb-2" required>

        <label>Nama</label>
        <input type="text" name="nama" class="form-control mb-2" required>

        <label>Alamat</label>
        <input type="text" name="alamat" class="form-control mb-2" required>

        <label>No HP</label>
        <input type="text" name="no_hp" class="form-control mb-2" required>

        <label>Jenis Kelamin</label>
        <select name="jenis_kelamin" class="form-control mb-2" required>
            <option value=""></option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>

        <label>Hobi</label>
        <input type="text" name="hobi" class="form-control mb-2" required>

        <label>Agama</label>
        <input type="text" name="agama" class="form-control mb-2" required>

        <label>Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" class="form-control mb-2" required>

        <label>Foto</label>
        <input type="file" name="foto" class="form-control mb-2">

        <button class="btn btn-primary">Tambah</button>
    </form>
@endsection
