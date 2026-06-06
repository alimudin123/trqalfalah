<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::latest()->get();

        return view('admin.berita.index', compact('berita'));
    }

    public function create()
    {
        return view('admin.berita.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'required|image'
        ]);

        $gambar = $request->file('gambar')->store('berita', 'public');

        Berita::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar' => $gambar,
            'tanggal' => now()
        ]);

        return redirect()->route('berita.index')
            ->with('success', 'Berita berhasil ditambahkan');
    }

    public function show($id)
    {
        $berita = Berita::findOrFail($id);

        return view('admin.berita.show', compact('berita'));
    }

    public function edit($id)
    {
        $berita = Berita::findOrFail($id);

        return view('admin.berita.edit', compact('berita'));
    }

    public function update(Request $request, $id)
    {
        $berita = Berita::findOrFail($id);

        $data = [
            'judul' => $request->judul,
            'isi' => $request->isi,
        ];

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar')->store('berita', 'public');

            $data['gambar'] = $gambar;
        }

        $berita->update($data);

        return redirect()->route('berita.index')
            ->with('success', 'Berita berhasil diupdate');
    }

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);

        $berita->delete();

        return redirect()->route('berita.index')
            ->with('success', 'Berita berhasil dihapus');
    }
}
