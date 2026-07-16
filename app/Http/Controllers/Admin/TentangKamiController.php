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
        return view('admin.tentang-kami.index', [
            'tentang' => TentangKami::first(),
            'fasilitas' => Fasilitas::latest()->get(),
            'pengajar' => Pengajar::latest()->get(),
            'prestasi' => Prestasi::with('media')->latest()->get(),
        ]);
    }


    public function storeTentang(Request $request)
    {
        TentangKami::updateOrCreate(
            ['id' => 1],
            $request->validate([
                'sejarah' => 'nullable|string',
                'visi_misi' => 'nullable|string',
            ])
        );

        return $this->redirectTab('sejarah','Data profil berhasil disimpan.');
    }



    public function storeFasilitas(Request $request)
    {
        $data = $request->validate([
            'deskripsi'=>'required|string|max:255',
            'foto'=>'nullable|image|max:2048',
        ]);

        $data['foto']=$this->uploadFile($request,'foto','fasilitas');

        Fasilitas::create($data);

        return $this->redirectTab('fasilitas','Data fasilitas berhasil ditambahkan.');
    }



    public function updateFasilitas(Request $request,$id)
    {
        $item=Fasilitas::findOrFail($id);

        $data=$request->validate([
            'deskripsi'=>'required|string|max:255',
            'foto'=>'nullable|image|max:2048',
        ]);

        if($request->hasFile('foto')){
            $this->deleteFile($item->foto);
            $data['foto']=$this->uploadFile($request,'foto','fasilitas');
        }

        $item->update($data);

        return $this->redirectTab('fasilitas','Data fasilitas berhasil diperbarui.');
    }



    public function destroyFasilitas($id)
    {
        $item=Fasilitas::findOrFail($id);

        $this->deleteFile($item->foto);

        $item->delete();

        return $this->redirectTab('fasilitas','Data fasilitas berhasil dihapus.');
    }




    public function storePengajar(Request $request)
    {
        $data=$request->validate([
            'nama_lengkap'=>'required|string|max:255',
            'jabatan'=>'required|string|max:255',
            'no_telepon'=>'nullable|string|max:20',
            'foto'=>'nullable|image|max:2048',
        ]);

        $data['foto']=$this->uploadFile($request,'foto','pengajar');

        Pengajar::create($data);

        return $this->redirectTab('pengajar','Data pengajar berhasil ditambahkan.');
    }



    public function updatePengajar(Request $request,$id)
    {
        $item=Pengajar::findOrFail($id);

        $data=$request->validate([
            'nama_lengkap'=>'required|string|max:255',
            'jabatan'=>'required|string|max:255',
            'no_telepon'=>'nullable|string|max:20',
            'foto'=>'nullable|image|max:2048',
        ]);

        if($request->hasFile('foto')){
            $this->deleteFile($item->foto);
            $data['foto']=$this->uploadFile($request,'foto','pengajar');
        }

        $item->update($data);

        return $this->redirectTab('pengajar','Data pengajar berhasil diperbarui.');
    }



    public function destroyPengajar($id)
    {
        $item=Pengajar::findOrFail($id);

        $this->deleteFile($item->foto);

        $item->delete();

        return $this->redirectTab('pengajar','Data pengajar berhasil dihapus.');
    }




    public function storePrestasi(Request $request)
    {
        $data=$request->validate([
            'judul'=>'required|string|max:255',
            'deskripsi'=>'nullable|string',
            'media.*'=>'nullable|file|mimes:jpg,jpeg,png,webp,mp4,mov|max:10240',
        ]);

        $prestasi=Prestasi::create([
            'judul'=>$data['judul'],
            'deskripsi'=>$data['deskripsi'] ?? null,
        ]);

        $this->saveMedia($request,$prestasi->id);

        return $this->redirectTab('prestasi','Data prestasi berhasil ditambahkan.');
    }




    public function editPrestasi($id)
    {
        $prestasi=Prestasi::with('media')->findOrFail($id);

        return view(
            'admin.tentang-kami.editprestasi',
            compact('prestasi')
        );
    }




    public function updatePrestasi(Request $request,$id)
    {
        $prestasi=Prestasi::findOrFail($id);

        $data=$request->validate([
            'judul'=>'required|string|max:255',
            'deskripsi'=>'nullable|string',
            'media.*'=>'nullable|file|mimes:jpg,jpeg,png,webp,mp4,mov|max:10240',
        ]);

        $prestasi->update([
            'judul'=>$data['judul'],
            'deskripsi'=>$data['deskripsi'] ?? null,
        ]);

        $this->saveMedia($request,$prestasi->id);

        return $this->redirectTab('prestasi','Data prestasi berhasil diperbarui.');
    }



    public function destroyPrestasi($id)
    {
        $prestasi=Prestasi::with('media')->findOrFail($id);

        foreach($prestasi->media as $media){
            $this->deleteFile($media->file);
            $media->delete();
        }

        $prestasi->delete();

        return $this->redirectTab('prestasi','Data prestasi berhasil dihapus.');
    }



    public function destroyMedia($id)
    {
        $media = PrestasiMedia::findOrFail($id);

        $this->deleteFile($media->file);
        $media->delete();

        return back()->with('success', 'Media prestasi berhasil dihapus.');
    }



    private function saveMedia(Request $request,$prestasiId)
    {
        if(!$request->hasFile('media')){
            return;
        }

        foreach($request->file('media') as $file){

            $path=$file->store('prestasi','public');

            PrestasiMedia::create([
                'prestasi_id'=>$prestasiId,
                'file'=>$path,
                'tipe'=>str_contains($file->getMimeType(),'video')
                    ? 'video'
                    : 'foto',
            ]);
        }
    }



    private function uploadFile(Request $request,$field,$folder)
    {
        return $request->hasFile($field)
            ? $request->file($field)->store($folder,'public')
            : null;
    }



    private function deleteFile($file)
    {
        if($file && Storage::disk('public')->exists($file)){
            Storage::disk('public')->delete($file);
        }
    }



    private function redirectTab($tab,$message)
    {
        return redirect()
            ->route('tentang-kami.index')
            ->with('active_tab',$tab)
            ->with('success',$message);
    }

}
