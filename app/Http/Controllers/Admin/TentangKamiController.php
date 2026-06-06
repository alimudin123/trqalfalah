<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TentangKami;
use App\Models\Fasilitas;
use App\Models\Pengajar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TentangKamiController extends Controller
{
    public function index()
    {
        return view('admin.tentang-kami.index', [
            'tentang' => TentangKami::first(),
            'fasilitas' => Fasilitas::latest()->get(),
            'pengajar' => Pengajar::latest()->get(),
        ]);
    }

    public function storeTentang(Request $request)
    {
        $validated = $request->validate([
            'sejarah' => 'nullable|string',
            'visi_misi' => 'nullable|string',
        ]);

        TentangKami::updateOrCreate(
            ['id' => 1],
            [
                'sejarah' => $validated['sejarah'] ?? null,
                'visi_misi' => $validated['visi_misi'] ?? null,
            ]
        );

        return redirect()
            ->route('tentang-kami.index')
            ->with('success', 'Data Profil berhasil disimpan.');
    }

    public function storeFasilitas(Request $request)
    {
        $validated = $request->validate([
            'deskripsi' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $validated['foto'] = $this->uploadFile($request, 'foto', 'fasilitas');

        Fasilitas::create($validated);

        return redirect()
            ->route('tentang-kami.index')
            ->with('success', 'Data fasilitas berhasil ditambahkan.')
            ->with('active_tab', 'fasilitas');
    }

    public function updateFasilitas(Request $request, $id)
    {
        $fasilitas = Fasilitas::findOrFail($id);

        $validated = $request->validate([
            'deskripsi' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $this->deleteFile($fasilitas->foto);
            $validated['foto'] = $this->uploadFile($request, 'foto', 'fasilitas');
        }

        $fasilitas->update($validated);

        return redirect()
            ->route('tentang-kami.index')
            ->with('success', 'Data fasilitas berhasil diperbarui.')
            ->with('active_tab', 'fasilitas');
    }

    public function destroyFasilitas($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);

        $this->deleteFile($fasilitas->foto);
        $fasilitas->delete();

        return redirect()
            ->route('tentang-kami.index')
            ->with('success', 'Data fasilitas berhasil dihapus.')
            ->with('active_tab', 'fasilitas');
    }

    public function storePengajar(Request $request)
    {
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'no_telepon' => 'nullable|string|max:20',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $validated['foto'] = $this->uploadFile($request, 'foto', 'pengajar');

        Pengajar::create($validated);

        return redirect()
            ->route('tentang-kami.index')
            ->with('success', 'Data pengajar berhasil ditambahkan.')
            ->with('active_tab', 'pengajar');
    }

    public function updatePengajar(Request $request, $id)
    {
        $pengajar = Pengajar::findOrFail($id);

        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'no_telepon' => 'nullable|string|max:20',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $this->deleteFile($pengajar->foto);
            $validated['foto'] = $this->uploadFile($request, 'foto', 'pengajar');
        }

        $pengajar->update($validated);

        return redirect()
            ->route('tentang-kami.index')
            ->with('success', 'Data pengajar berhasil diperbarui.')
            ->with('active_tab', 'pengajar');
    }

    public function destroyPengajar($id)
    {
        $pengajar = Pengajar::findOrFail($id);

        $this->deleteFile($pengajar->foto);
        $pengajar->delete();

        return redirect()
            ->route('tentang-kami.index')
            ->with('success', 'Data pengajar berhasil dihapus.')
            ->with('active_tab', 'pengajar');
    }

    private function uploadFile(Request $request, string $field, string $folder): ?string
    {
        if (!$request->hasFile($field)) {
            return null;
        }

        return $request->file($field)->store($folder, 'public');
    }

    private function deleteFile(?string $path): void
    {
        if ($path && Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path);
        }
    }
}