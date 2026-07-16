<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Prestasi;
use App\Models\PrestasiMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class PrestasiController extends Controller
{

    /**
     * Menampilkan semua data prestasi
     */
    public function index()
    {

        $prestasi = Prestasi::with('media')
            ->latest()
            ->get();


        return view(
            'admin.prestasi.index',
            compact('prestasi')
        );

    }





    /**
     * Form tambah prestasi
     */
    public function create()
    {

        return view(
            'admin.prestasi.create'
        );

    }





    /**
     * Simpan prestasi baru
     */
    public function store(Request $request)
    {


        $request->validate([

            'judul'
            => 'required|string|max:255',


            'deskripsi'
            => 'nullable|string',


            'media.*'
            => 'nullable|file|mimes:jpg,jpeg,png,webp,mp4,mov|max:10240',

        ]);





        // Simpan data utama

        $prestasi = Prestasi::create([

            'judul' => $request->judul,

            'deskripsi' => $request->deskripsi,

        ]);







        // Simpan banyak foto/video

        if($request->hasFile('media')){


            foreach($request->file('media') as $file){



                $path = $file->store(
                    'prestasi',
                    'public'
                );



                $tipe = str_contains(
                    $file->getMimeType(),
                    'video'
                )
                ? 'video'
                : 'foto';






                PrestasiMedia::create([

                    'prestasi_id'
                    => $prestasi->id,


                    'file'
                    => $path,


                    'tipe'
                    => $tipe,

                ]);



            }


        }





        return redirect()

            ->route('prestasi.index')

            ->with(
                'success',
                'Prestasi berhasil ditambahkan.'
            );


    }







    /**
     * Detail prestasi
     */
    public function show(Prestasi $prestasi)
    {


        $prestasi->load('media');



        return view(
            'admin.prestasi.show',
            compact('prestasi')
        );


    }








    /**
     * Form edit
     */
    public function edit(Prestasi $prestasi)
    {


        $prestasi->load('media');



        return view(
            'admin.prestasi.edit',
            compact('prestasi')
        );


    }








    /**
     * Update prestasi
     */
    public function update(
        Request $request,
        Prestasi $prestasi
    )
    {


        $request->validate([

            'judul'
            => 'required|string|max:255',


            'deskripsi'
            => 'nullable|string',


            'media.*'
            => 'nullable|file|mimes:jpg,jpeg,png,webp,mp4,mov|max:10240',

        ]);





        $prestasi->update([

            'judul'
            => $request->judul,


            'deskripsi'
            => $request->deskripsi,

        ]);







        // Tambahkan media baru jika ada

        if($request->hasFile('media')){


            foreach($request->file('media') as $file){



                $path = $file->store(
                    'prestasi',
                    'public'
                );



                $tipe = str_contains(
                    $file->getMimeType(),
                    'video'
                )
                ? 'video'
                : 'foto';





                PrestasiMedia::create([

                    'prestasi_id'
                    => $prestasi->id,


                    'file'
                    => $path,


                    'tipe'
                    => $tipe,

                ]);



            }

        }





        return redirect()

            ->route('prestasi.index')

            ->with(
                'success',
                'Prestasi berhasil diperbarui.'
            );


    }









    /**
     * Hapus prestasi
     */
    public function destroy(Prestasi $prestasi)
    {


        foreach($prestasi->media as $media){


            if(
                Storage::disk('public')
                ->exists($media->file)
            ){

                Storage::disk('public')
                    ->delete($media->file);

            }


        }





        $prestasi->delete();





        return redirect()

            ->route('prestasi.index')

            ->with(
                'success',
                'Prestasi berhasil dihapus.'
            );


    }


}