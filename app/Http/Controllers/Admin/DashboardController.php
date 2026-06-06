<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Program;
use App\Models\Pengajar;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $totalBerita = Berita::count();

        $totalProgram = Program::count();

        $totalSantri = Program::sum('jumlah_santri');

        $totalPengajar = Pengajar::count();

        return view('admin.dashboard', compact(
            'totalBerita',
            'totalProgram',
            'totalSantri',
            'totalPengajar'
        ));
    }
}