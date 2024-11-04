<?php
namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    function tampil(Request $request)
    {
        $query = Siswa::query();

        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('nis', 'LIKE', "%{$search}%")
                  ->orWhere('nama', 'LIKE', "%{$search}%")
                  ->orWhere('alamat', 'LIKE', "%{$search}%")
                  ->orWhere('no_hp', 'LIKE', "%{$search}%")
                  ->orWhere('jenis_kelamin', 'LIKE', "%{$search}%")
                  ->orWhere('hobi', 'LIKE', "%{$search}%");
            });
        }

        $siswa = $query->paginate(10);
        
        return view('siswa.tampil', compact('siswa'));
    }

    function tambah()
    {
        return view('siswa.tambah');
    }

    function submit(Request $request)
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'tanggal_lahir' => 'required|date',
            'hobi' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $siswa = new Siswa();
        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->alamat = $request->alamat;
        $siswa->no_hp = $request->no_hp;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->hobi = $request->hobi;
        $siswa->agama = $request->agama; // Tambahkan ini
        $siswa->tanggal_lahir = $request->tanggal_lahir; // Tambahkan ini

        // Proses upload foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename);
            $siswa->foto = $filename;
        }

        $siswa->save();

        return redirect()->route('siswa.tampil')->with('success', 'Data siswa telah berhasil ditambah😍');
    }

    function edit($id)
    {
        $siswa = Siswa::find($id);
        return view('siswa.edit', compact('siswa'));
    }

    function update(Request $request, $id)
    {
        $siswa = Siswa::find($id);
        
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'jenis_kelamin' => 'required',
            'hobi' => 'required',
            'agama' => 'required',
            'tanggal_lahir' => 'required|date',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->alamat = $request->alamat;
        $siswa->no_hp = $request->no_hp;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->hobi = $request->hobi;
        $siswa->agama = $request->agama; // Tambahkan ini
        $siswa->tanggal_lahir = $request->tanggal_lahir; 

        // Proses upload foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename);
            $siswa->foto = $filename; // Update field foto di model
        }

        $siswa->save();

        return redirect()->route('siswa.tampil')->with('success', 'Data siswa telah berhasil diperbarui😍');
    }

    public function destroy($id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();

        return redirect()->route('siswa.tampil')->with('success', 'Data siswa telah berhasil dihapus😍');
    }

    public function show($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('siswa.detail', compact('siswa'));
    }
}
