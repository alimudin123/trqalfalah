<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Kegiatan;
use App\Models\Prestasi;
use App\Models\Pengajar;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $totalBerita = Berita::count();
        $totalKegiatan = Kegiatan::count();
        $totalPrestasi = Prestasi::count();
        $totalPengajar = Pengajar::count();

        $kontenTerbaru = Berita::latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'totalBerita',
            'totalKegiatan',
            'totalPrestasi',
            'totalPengajar',
            'kontenTerbaru'
        ));
    }
}