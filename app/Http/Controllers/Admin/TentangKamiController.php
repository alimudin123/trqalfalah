<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;


use App\Models\TentangKami;
use App\Models\Fasilitas;
use App\Models\Pengajar;
use App\Models\Prestasi;
use App\Models\PrestasiMedia;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;



class TentangKamiController extends Controller
{


    public function index()
    {

        return view(
            'admin.tentang-kami.index',
            [

                'tentang' => TentangKami::first(),


                'fasilitas' => Fasilitas::latest()
                    ->get(),



                'pengajar' => Pengajar::latest()
                    ->get(),



                'prestasi' => Prestasi::with('media')
                    ->latest()
                    ->get(),

            ]
        );

    }






    /*
    |--------------------------------------------------------------------------
    | Tentang Kami
    |--------------------------------------------------------------------------
    */


    public function storeTentang(Request $request)
    {


        $validated = $request->validate([

            'sejarah'
            => 'nullable|string',


            'visi_misi'
            => 'nullable|string',

        ]);




        TentangKami::updateOrCreate(

            [
                'id'=>1
            ],

            $validated

        );




        return $this->redirectTab(

            'sejarah',

            'Data profil berhasil disimpan.'

        );


    }









    /*
    |--------------------------------------------------------------------------
    | Fasilitas
    |--------------------------------------------------------------------------
    */


    public function storeFasilitas(Request $request)
    {


        $validated = $request->validate([


            'deskripsi'
            =>'required|string|max:255',


            'foto'
            =>'nullable|image|max:2048',


        ]);




        $validated['foto'] =
            $this->uploadFile(
                $request,
                'foto',
                'fasilitas'
            );




        Fasilitas::create($validated);




        return $this->redirectTab(

            'fasilitas',

            'Data fasilitas berhasil ditambahkan.'

        );


    }







    public function updateFasilitas(
        Request $request,
        $id
    )
    {


        $data =
            Fasilitas::findOrFail($id);



        $validated = $request->validate([


            'deskripsi'
            =>'required|string|max:255',


            'foto'
            =>'nullable|image|max:2048',


        ]);




        if($request->hasFile('foto')){


            $this->deleteFile(
                $data->foto
            );


            $validated['foto'] =
                $this->uploadFile(
                    $request,
                    'foto',
                    'fasilitas'
                );


        }





        $data->update($validated);



        return $this->redirectTab(

            'fasilitas',

            'Data fasilitas berhasil diperbarui.'

        );


    }








    public function destroyFasilitas($id)
    {


        $data =
            Fasilitas::findOrFail($id);



        $this->deleteFile(
            $data->foto
        );



        $data->delete();




        return $this->redirectTab(

            'fasilitas',

            'Data fasilitas berhasil dihapus.'

        );


    }









    /*
    |--------------------------------------------------------------------------
    | Pengajar
    |--------------------------------------------------------------------------
    */


    public function storePengajar(Request $request)
    {


        $validated = $request->validate([


            'nama_lengkap'
            =>'required|string|max:255',


            'jabatan'
            =>'required|string|max:255',


            'no_telepon'
            =>'nullable|string|max:20',


            'foto'
            =>'nullable|image|max:2048',


        ]);




        $validated['foto'] =
            $this->uploadFile(
                $request,
                'foto',
                'pengajar'
            );




        Pengajar::create($validated);




        return $this->redirectTab(

            'pengajar',

            'Data pengajar berhasil ditambahkan.'

        );


    }









    public function updatePengajar(
        Request $request,
        $id
    )
    {


        $data =
            Pengajar::findOrFail($id);



        $validated = $request->validate([


            'nama_lengkap'
            =>'required|string|max:255',


            'jabatan'
            =>'required|string|max:255',


            'no_telepon'
            =>'nullable|string|max:20',


            'foto'
            =>'nullable|image|max:2048',

        ]);





        if($request->hasFile('foto')){


            $this->deleteFile(
                $data->foto
            );



            $validated['foto'] =
                $this->uploadFile(
                    $request,
                    'foto',
                    'pengajar'
                );


        }





        $data->update($validated);




        return $this->redirectTab(

            'pengajar',

            'Data pengajar berhasil diperbarui.'

        );


    }







    public function destroyPengajar($id)
    {


        $data =
            Pengajar::findOrFail($id);



        $this->deleteFile(
            $data->foto
        );



        $data->delete();




        return $this->redirectTab(

            'pengajar',

            'Data pengajar berhasil dihapus.'

        );


    }









    /*
    |--------------------------------------------------------------------------
    | Prestasi Multi Foto / Video
    |--------------------------------------------------------------------------
    */


    public function storePrestasi(Request $request)
    {


        $request->validate([


            'judul'
            =>'required|string|max:255',


            'deskripsi'
            =>'nullable|string',



            'media.*'
            =>'nullable|file|mimes:jpg,jpeg,png,webp,mp4,mov|max:10240',


        ]);






        $prestasi = Prestasi::create([


            'judul'
            =>$request->judul,



            'deskripsi'
            =>$request->deskripsi,


        ]);








        if($request->hasFile('media')){


            foreach($request->file('media') as $file){



                $path =
                    $file->store(
                        'prestasi',
                        'public'
                    );




                $tipe =
                    str_contains(
                        $file->getMimeType(),
                        'video'
                    )
                    ?
                    'video'
                    :
                    'foto';





                PrestasiMedia::create([


                    'prestasi_id'
                    =>$prestasi->id,


                    'file'
                    =>$path,


                    'tipe'
                    =>$tipe,


                ]);



            }


        }






        return $this->redirectTab(

            'prestasi',

            'Data prestasi berhasil ditambahkan.'

        );


    }









    public function destroyPrestasi($id)
    {


        $prestasi =
            Prestasi::with('media')
            ->findOrFail($id);






        foreach($prestasi->media as $media){


            $this->deleteFile(
                $media->file
            );


        }





        $prestasi->delete();





        return $this->redirectTab(

            'prestasi',

            'Data prestasi berhasil dihapus.'

        );


    }









    /*
    |--------------------------------------------------------------------------
    | Helper
    |--------------------------------------------------------------------------
    */


    private function uploadFile(
        Request $request,
        string $field,
        string $folder
    )
    {


        if(!$request->hasFile($field)){

            return null;

        }



        return $request
            ->file($field)
            ->store(
                $folder,
                'public'
            );


    }







    private function deleteFile($file)
    {


        if(
            $file &&
            Storage::disk('public')
            ->exists($file)
        ){


            Storage::disk('public')
                ->delete($file);


        }


    }







    private function redirectTab(
        $tab,
        $message
    )
    {


        return redirect()

            ->route(
                'tentang-kami.index'
            )

            ->with(
                'success',
                $message
            )

            ->with(
                'active_tab',
                $tab
            );


    }



}