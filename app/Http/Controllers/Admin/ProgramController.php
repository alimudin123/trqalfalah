<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Program;
use Illuminate\Support\Facades\Storage;

class ProgramController extends Controller
{
    public function index()
    {
        $program = Program::orderBy('id', 'asc')->get();

        $totalProgram = $program->count();

        $totalSantri = Program::sum('jumlah_santri');

        return view('admin.program.index', compact(
            'program',
            'totalProgram',
            'totalSantri'
        ));
    }

    public function create()
    {
        return view('admin.program.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_program'  => 'required',
            'deskripsi'     => 'required',
            'durasi'        => 'required',
            'jumlah_santri' => 'required|numeric',
            'gambar'        => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $gambar = null;

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar')->store('program', 'public');
        }

        Program::create([
            'nama_program'  => $request->nama_program,
            'deskripsi'     => $request->deskripsi,
            'durasi'        => $request->durasi,
            'jumlah_santri' => $request->jumlah_santri,
            'gambar'        => $gambar,
            'status'        => 'aktif',
        ]);

        return redirect()
            ->route('program.index')
            ->with('success', 'Program berhasil ditambahkan');
    }

    public function show($id)
    {
        $program = Program::findOrFail($id);

        return view('admin.program.show', compact('program'));
    }

    public function edit($id)
    {
        $program = Program::findOrFail($id);

        return view('admin.program.edit', compact('program'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_program'  => 'required',
            'deskripsi'     => 'required',
            'durasi'        => 'required',
            'jumlah_santri' => 'required|numeric',
            'gambar'        => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $program = Program::findOrFail($id);

        $gambar = $program->gambar;

        if ($request->hasFile('gambar')) {
            if ($program->gambar && Storage::disk('public')->exists($program->gambar)) {
                Storage::disk('public')->delete($program->gambar);
            }

            $gambar = $request->file('gambar')->store('program', 'public');
        }

        $program->update([
            'nama_program'  => $request->nama_program,
            'deskripsi'     => $request->deskripsi,
            'durasi'        => $request->durasi,
            'jumlah_santri' => $request->jumlah_santri,
            'gambar'        => $gambar,
        ]);

        return redirect()
            ->route('program.index')
            ->with('success', 'Program berhasil diupdate');
    }

    public function toggleStatus($id)
    {
        $program = Program::findOrFail($id);

        if ($program->status == 'aktif') {
            $program->status = 'nonaktif';
        } else {
            $program->status = 'aktif';
        }

        $program->save();

        return redirect()
            ->route('program.index')
            ->with('success', 'Status program berhasil diubah');
    }

    public function destroy($id)
    {
        $program = Program::findOrFail($id);

        if ($program->gambar && Storage::disk('public')->exists($program->gambar)) {
            Storage::disk('public')->delete($program->gambar);
        }

        $program->delete();

        return redirect()
            ->route('program.index')
            ->with('success', 'Program berhasil dihapus');
    }
}
