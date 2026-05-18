<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;

class ProgramController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | INDEX
    |--------------------------------------------------------------------------
    */

    public function index()
    {

        $program = Program::latest()->get();

        $totalProgram = Program::count();

        $totalSantri = Program::sum('jumlah_santri');

        return view('admin.program.index', compact(
            'program',
            'totalProgram',
            'totalSantri'
        ));
    }

    public function toggleStatus($id)
    {

        $program = Program::findOrFail($id);

        $program->status = $program->status == 'aktif'
            ? 'nonaktif'
            : 'aktif';

        $program->save();

        return redirect()->back();
    }







    /*
    |--------------------------------------------------------------------------
    | CREATE
    |--------------------------------------------------------------------------
    */

    public function create()
    {

        return view('admin.program.create');
    }







    /*
    |--------------------------------------------------------------------------
    | STORE
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {

        $request->validate([

            'nama_program' => 'required',
            'deskripsi'    => 'required',
            'durasi'       => 'required',
            'jumlah_santri' => 'required|numeric',
            'gambar'       => 'nullable|image|mimes:jpg,jpeg,png',

        ]);







        $gambar = null;

        if ($request->hasFile('gambar')) {

            $gambar = $request->file('gambar')
                ->store('program', 'public');
        }







        Program::create([

            'nama_program'  => $request->nama_program,
            'deskripsi'     => $request->deskripsi,
            'durasi'        => $request->durasi,
            'jumlah_santri' => $request->jumlah_santri,
            'gambar'        => $gambar,

        ]);







        return redirect()
            ->route('program.index')
            ->with('success', 'Program berhasil ditambahkan');
    }







    /*
    |--------------------------------------------------------------------------
    | EDIT
    |--------------------------------------------------------------------------
    */

    public function edit($id)
    {

        $program = Program::findOrFail($id);

        return view('admin.program.edit', compact('program'));
    }







    /*
    |--------------------------------------------------------------------------
    | UPDATE
    |--------------------------------------------------------------------------
    */

    public function update(Request $request, $id)
    {

        $request->validate([

            'nama_program' => 'required',
            'deskripsi'    => 'required',
            'durasi'       => 'required',
            'jumlah_santri' => 'required|numeric',

        ]);







        $program = Program::findOrFail($id);







        $gambar = $program->gambar;

        if ($request->hasFile('gambar')) {

            $gambar = $request->file('gambar')
                ->store('program', 'public');
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







    /*
    |--------------------------------------------------------------------------
    | DELETE
    |--------------------------------------------------------------------------
    */

    public function destroy($id)
    {

        $program = Program::findOrFail($id);

        $program->delete();

        return redirect()
            ->route('program.index')
            ->with('success', 'Program berhasil dihapus');
    }

    public function show($id)
{

    $program = Program::findOrFail($id);

    return view('admin.program.show', compact('program'));

}
}
