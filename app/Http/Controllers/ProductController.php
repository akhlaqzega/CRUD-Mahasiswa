<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index() {
        $product = Product::all(); // menampilkan semua data product
        return view('product.product', compact('product'));
    }

    public function create () {
        return view('product.create');
    }

    public function store (Request $request) {
        $request->validate([
            'nama' => 'required|max:45',
            'jenis' => 'required|max:45',
            'harga_jual' => 'required|numeric',
            'harga_beli' => 'required|numeric',
            'foto' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ],
        [
            'nama.required' => 'Nama wajib diisi',
            'nama.max' => 'Nama maksimal 45 karakter',
            'jenis.required' => 'jenis wajib diisi',
            'jenis.max' => 'jenis maksimal 45 karakter',
            'foto.max' => 'Foto maksimal 2 MB',
            'foto.mimes' => 'File ekstensi hanya bisa jpg,png,jpeg,gif, svg',
            'foto.image' => 'File harus berbentuk image'
        ]);
        
        //jika file foto ada yang terupload
        if(!empty($request->foto)){
            //maka proses berikut yang dijalankan
            $fileName = 'foto-'.uniqid().'.'.$request->foto->extension();
            //setelah tau fotonya sudah masuk maka tempatkan ke public
            $request->foto->move(public_path('image'), $fileName);
        } else {
            $fileName = 'nophoto.jpg';
        }
        
        //tambah data produk
        DB::table('products')->insert([
            'nama'=>$request->nama,
            'jenis'=>$request->jenis,
            'harga_jual'=>$request->harga_jual,
            'harga_beli'=>$request->harga_beli,
            'deskripsi' => $request->deskripsi,
            'foto'=>$fileName,
        ]);
        
        return redirect()->route('product.product');
    
    }

    
    public function show(string $id)
    {
        // Mengambil data produk berdasarkan ID
        $product = Product::findOrFail($id);
        
        // Mengirim data produk ke view 'product.show'
        return view('product.show', compact('product'));
    }

    public function edit(Product $id){
    //
    return view('product.edit', compact('id'));
}

public function update(Request $request, string $id)
{
    // validasi data
    $request->validate([
        'nama' => 'required|max:45',
        'jenis' => 'required|max:45',
        'harga_jual' => 'required|numeric',
        'harga_beli' => 'required|numeric',
        'foto' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
 
    ],
    [
        'nama.required' => 'Nama wajib diisi',
        'nama.max' => 'Nama maksimal 45 karakter',
        'jenis.required' => 'jenis wajib diisi',
        'jenis.max' => 'jenis maksimal 45 karakter',
        'foto.max' => 'Foto maksimal 2 MB',
        'foto.mimes' => 'File ekstensi hanya bisa jpg,png,jpeg,gif, svg',
        'foto.image' => 'File harus berbentuk image'
    ]);
 
 
    //foto lama
    $fotoLama = DB::table('products')->select('foto')->where('id',$id)->get();
    foreach($fotoLama as $f1){
        $fotoLama = $f1->foto;
    }
 
    //jika foto sudah ada yang terupload
    if(!empty($request->foto)){
        //maka proses selanjutnya
        if(!empty($fotoLama->foto)) unlink(public_path('image'.$fotoLama->foto));
        //proses ganti foto
        $fileName = 'foto-'.$request->id.'.'.$request->foto->extension();
        //setelah tau fotonya sudah masuk maka tempatkan ke public
        $request->foto->move(public_path('image'), $fileName);
    } else{
        $fileName = $fotoLama;
    }
 
    //update data produk
    DB::table('products')->where('id',$id)->update([
        'nama'=>$request->nama,
        'jenis'=>$request->jenis,
        'harga_jual'=>$request->harga_jual,
        'harga_beli'=>$request->harga_beli,
        'deskripsi' => $request->deskripsi,
        'foto'=>$fileName,
    ]);
            
    return redirect()->route('product.product');
}

public function destroy(Product $id)
{
    $id->delete();
    
    return redirect()->route('product.product')
            ->with('success','Data berhasil di hapus' );
}
}