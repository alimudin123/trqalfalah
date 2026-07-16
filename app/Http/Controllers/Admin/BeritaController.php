<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\BeritaMedia;
use Illuminate\Support\Facades\Storage;

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
            'gambar' => 'required|image',
            'media.*' => 'nullable|file|mimes:jpg,jpeg,png,webp,mp4,mov|max:10240',
        ]);

        $gambar = $request->file('gambar')->store('berita', 'public');

        $berita = Berita::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar' => $gambar,
            'tanggal' => now()
        ]);

        $this->saveMedia($request, $berita->id);

        return redirect()->route('berita.index')
            ->with('success', 'Berita berhasil ditambahkan');
    }

    public function show($id)
    {
        $berita = Berita::with('media')->findOrFail($id);

        return view('admin.berita.show', compact('berita'));
    }

    public function edit($id)
    {
        $berita = Berita::with('media')->findOrFail($id);

        return view('admin.berita.edit', compact('berita'));
    }

    public function update(Request $request, $id)
    {
        $berita = Berita::findOrFail($id);

        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'nullable|image',
            'media.*' => 'nullable|file|mimes:jpg,jpeg,png,webp,mp4,mov|max:10240',
        ]);

        $data = [
            'judul' => $request->judul,
            'isi' => $request->isi,
        ];

        if ($request->hasFile('gambar')) {
            // Delete old cover image if it exists
            if ($berita->gambar && Storage::disk('public')->exists($berita->gambar)) {
                Storage::disk('public')->delete($berita->gambar);
            }
            
            $gambar = $request->file('gambar')->store('berita', 'public');
            $data['gambar'] = $gambar;
        }

        $berita->update($data);

        $this->saveMedia($request, $berita->id);

        return redirect()->route('berita.index')
            ->with('success', 'Berita berhasil diupdate');
    }

    public function destroy($id)
    {
        $berita = Berita::with('media')->findOrFail($id);

        // Delete cover image
        if ($berita->gambar && Storage::disk('public')->exists($berita->gambar)) {
            Storage::disk('public')->delete($berita->gambar);
        }

        // Delete associated media files
        foreach ($berita->media as $media) {
            if ($media->file && Storage::disk('public')->exists($media->file)) {
                Storage::disk('public')->delete($media->file);
            }
            $media->delete();
        }

        $berita->delete();

        return redirect()->route('berita.index')
            ->with('success', 'Berita berhasil dihapus');
    }

    public function destroyMedia($id)
    {
        $media = BeritaMedia::findOrFail($id);

        if ($media->file && Storage::disk('public')->exists($media->file)) {
            Storage::disk('public')->delete($media->file);
        }

        $media->delete();

        return back()->with('success', 'Media berita berhasil dihapus.');
    }

    private function saveMedia(Request $request, $beritaId)
    {
        if (!$request->hasFile('media')) {
            return;
        }

        foreach ($request->file('media') as $file) {
            $path = $file->store('berita', 'public');

            BeritaMedia::create([
                'berita_id' => $beritaId,
                'file' => $path,
                'tipe' => str_contains($file->getMimeType(), 'video') ? 'video' : 'foto',
            ]);
        }
    }
}
