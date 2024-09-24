@extends('layout.main')

@section('content')
    <div id="app">
        <div class="main-wrapper">
            <div class="main-content">
                <div class="container">
                    <div class="card mt-5">
                        <div class="card-header">
                            <h1 class="mt-4">Dashboard</h1>
                            <ol class="breadcrumb mb-4">
                                <li class="breadcrumb-item active">Data Product</li>
                                <li class="breadcrumb-item"><a href="{{ route('product.create') }}">Tambah Product</a></li>
                            </ol>
                        </div>
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                            @if (session('error'))
                                <div class="alert alert-danger">{{ session('error') }}</div>
                            @endif
                            <p>
                                <a class="btn btn-primary" href="{{ route('product.create') }}">New Product</a>
                            </p>
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>SKU</th>
                                        <th>Name</th>
                                        <th>Brand</th>
                                        <th>Categories</th>
                                        <th>Price</th>
                                        <th>Stock</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($product as $k)
                                        <tr>
                                            <td>{{ $k->id }}</td>
                                            <td>{{ $k->sku }}</td>
                                            <td>{{ $k->name }}</td>
                                            <td>{{ $k->brand != null ? $k->brand->name : '' }}</td>
                                            <td>{{ implode(', ', $k->categories->pluck('name')->toArray()) }}</td>
                                            <td>{{ $k->price }}</td>
                                            <td>{{ $k->stock }}</td>
                                            <td>
                                                <a href="{{ route('product.edit', ['id' => $k->id]) }}"
                                                    class="btn btn-secondary btn-sm">edit</a>
                                                <a href="#" class="btn btn-sm btn-danger"
                                                    onclick="
                        event.preventDefault();
                        if (confirm('Do you want to remove this?')) {
                          document.getElementById('delete-row-{{ $k->id }}').submit();
                        }">
                                                    delete
                                                </a>
                                                <form id="delete-row-{{ $k->id }}"
                                                    action="{{ route('product.destroy', ['id' => $k->id]) }}"
                                                    method="POST">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    @csrf
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="8">
                                                No record found!
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="container-fluid px-4">
  <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Data Product</li>
            <li class="breadcrumb-item"><a href="{{ route('product.create') }}">Tambah Product</a></li>
        </ol>

    <!-- Table content here -->
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable Example
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis</th>
                        <th>Harga Jual</th>
                        <th>Harga Beli</th>
                        <th>Foto</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis</th>
                        <th>Harga Jual</th>
                        <th>Harga Beli</th>
                        <th>Foto</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($product as $k)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $k->nama }}</td>
                        <td>{{ $k->jenis }}</td>
                        <td>{{ $k->harga_jual }}</td>
                        <td>{{ $k->harga_beli }}</td>
                        <td>
                            @empty($k->foto)
                            <img src="{{url('image/nophoto.jpg')}}" alt="project-image" class="rounded" style="width: 100%; max-width: 100px; height: auto;">
                            @else
                            <img src="{{url('image')}}/{{$k->foto}}" alt="project-image" class="rounded" style="width: 100%; max-width: 100px; height: auto;">
                            @endempty
                        </td>
                        <td>
                            <a href="{{ route('product.show', $k->id) }}" class="btn btn-sm btn-secondary">show</a>
                            <a href="{{ route('product.edit', $k->id) }}" class="btn btn-sm btn-warning">edit</a>
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{$k->id}}">
                                hapus
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div> --}}

    {{-- <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{$k->id}}">
    Hapus
    </button> --}}

    <!-- Modal -->
    {{-- <div class="modal fade" id="exampleModal{{$k->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Produk</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Apakah anda yakin akan menghapus data {{$k->nama}}
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    
            <form action="{{ route('index.destroy', $k->id) }}" method="POST" style="display:inline;">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">Delete</button>
            </form>
    
          </div>
        </div>
      </div>
    </div> --}}
@endsection
