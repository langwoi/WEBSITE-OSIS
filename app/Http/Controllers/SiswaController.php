<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search', '');
        $siswas = Siswa::when($search, function($query, $search){
            return $query->where('nama_siswa', 'like', "%$search%")
                         ->orWhere('missions', 'like', "%$search%");
        })->orderBy('id','desc')->paginate(10);

        return view('siswa.index', compact('siswas', 'search'));
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_siswa' => 'required|string|max:255',
            'missions' => 'required|string|max:255',
        ]);

        Siswa::create($request->only('nama_siswa','missions'));

        return redirect()->route('siswa.index')->with('success','Data berhasil disimpan!');
    }

    public function edit(Siswa $siswa)
    {
        return view('siswa.edit', compact('siswa'));
    }

    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([
            'nama_siswa' => 'required|string|max:255',
            'missions' => 'required|string|max:255',
        ]);

        $siswa->update($request->only('nama_siswa','missions'));

        return redirect()->route('siswa.index')->with('success','Data berhasil diperbarui!');
    }

    public function destroy(Siswa $siswa)
    {
        $siswa->delete();
        return redirect()->route('siswa.index')->with('success','Data berhasil dihapus!');
    }
}
