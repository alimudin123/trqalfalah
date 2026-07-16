<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function index(Request $request)
    {
        $query = Pendaftaran::query();

        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('nama_santri', 'like', "%{$search}%")
                    ->orWhere('nik', 'like', "%{$search}%")
                    ->orWhere('nama_ayah', 'like', "%{$search}%")
                    ->orWhere('nama_ibu', 'like', "%{$search}%");
            });
        }

        $pendaftarans = $query->latest()->paginate(10)->withQueryString();

        return view('admin.pendaftaran.index', compact('pendaftarans'));
    }

    public function create()
    {
        return view('pendaftaran.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_santri' => 'required|max:255',
            'jenis_kelamin' => 'required|in:Laki-Laki,Perempuan',
            'nik' => 'required|digits:16|unique:pendaftarans,nik',
            'tempat_lahir' => 'required|max:100',
            'tanggal_lahir' => 'required|date',
            'asal_sekolah' => 'required|max:255',
            'nama_ayah' => 'required|max:255',
            'hp_ayah' => 'required|max:20',
            'pekerjaan_ayah' => 'required|max:255',
            'nama_ibu' => 'required|max:255',
            'hp_ibu' => 'required|max:20',
            'pekerjaan_ibu' => 'required|max:255',
            'alamat' => 'required',
            'nama_wali' => 'nullable|max:255',
            'kritik_saran' => 'nullable',
        ]);

        $validated['status'] = 'Menunggu';

        Pendaftaran::create($validated);

        return redirect()
            ->route('pendaftaran.create')
            ->with('success', 'Pendaftaran berhasil dikirim.');
    }

    public function show(Pendaftaran $pendaftaran)
    {
        return view('admin.pendaftaran.show', compact('pendaftaran'));
    }

    public function edit(Pendaftaran $pendaftaran)
    {
        return view('admin.pendaftaran.edit', compact('pendaftaran'));
    }

    public function update(Request $request, Pendaftaran $pendaftaran)
    {
        $validated = $request->validate([
            'nama_santri' => 'required|max:255',
            'jenis_kelamin' => 'required|in:Laki-Laki,Perempuan',
            'nik' => 'required|digits:16|unique:pendaftarans,nik,' . $pendaftaran->id,
            'tempat_lahir' => 'required|max:100',
            'tanggal_lahir' => 'required|date',
            'asal_sekolah' => 'required|max:255',
            'nama_ayah' => 'required|max:255',
            'hp_ayah' => 'required|max:20',
            'pekerjaan_ayah' => 'required|max:255',
            'nama_ibu' => 'required|max:255',
            'hp_ibu' => 'required|max:20',
            'pekerjaan_ibu' => 'required|max:255',
            'alamat' => 'required',
            'nama_wali' => 'nullable|max:255',
            'kritik_saran' => 'nullable',
            'status' => 'required|in:Menunggu,Diterima,Ditolak',
        ]);

        $pendaftaran->update($validated);

        return redirect()->route('admin.pendaftaran.index')
            ->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy(Pendaftaran $pendaftaran)
    {
        $pendaftaran->delete();

        return back()->with('success', 'Data berhasil dihapus.');
    }

    public function pdf(Request $request)
    {
        $query = Pendaftaran::query();

        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('nama_santri', 'like', "%{$search}%")
                    ->orWhere('nik', 'like', "%{$search}%")
                    ->orWhere('nama_ayah', 'like', "%{$search}%")
                    ->orWhere('nama_ibu', 'like', "%{$search}%");
            });
        }

        $pendaftarans = $query->latest()->get();
        return view('admin.pendaftaran.pdf', compact('pendaftarans'));
    }
}