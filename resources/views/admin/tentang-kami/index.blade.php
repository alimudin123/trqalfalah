@extends('layouts.app1')

@section('title', 'Tentang Kami')

@section('page-title', 'Tentang Kami')


@section('content')


@if(session('success'))

<div class="alert alert-success mb-4">

    {{ session('success') }}

</div>

@endif



@php

$activeTab = session('active_tab','sejarah');

@endphp






<div class="row g-4">





{{-- MENU KIRI --}}

<div class="col-lg-3 col-md-4">


<div class="card">


<div class="card-body">



<div class="nav flex-column nav-pills gap-3">





<button
class="nav-link text-start {{ $activeTab=='sejarah'?'active':'' }}"
data-bs-toggle="pill"
data-bs-target="#sejarah">


<i class="fa-solid fa-pen me-2"></i>

Sejarah


</button>







<button
class="nav-link text-start {{ $activeTab=='visi-misi'?'active':'' }}"
data-bs-toggle="pill"
data-bs-target="#visi-misi">


<i class="fa-solid fa-bullseye me-2"></i>

Visi & Misi


</button>







<button
class="nav-link text-start {{ $activeTab=='fasilitas'?'active':'' }}"
data-bs-toggle="pill"
data-bs-target="#fasilitas">


<i class="fa-solid fa-building me-2"></i>

Fasilitas


</button>








<button
class="nav-link text-start {{ $activeTab=='pengajar'?'active':'' }}"
data-bs-toggle="pill"
data-bs-target="#pengajar">


<i class="fa-solid fa-user me-2"></i>

Pengajar


</button>








<button
class="nav-link text-start {{ $activeTab=='prestasi'?'active':'' }}"
data-bs-toggle="pill"
data-bs-target="#prestasi">


<i class="fa-solid fa-trophy me-2"></i>

Prestasi


</button>





</div>


</div>


</div>


</div>










{{-- KONTEN --}}

<div class="col-lg-9 col-md-8">


<div class="tab-content">







{{-- SEJARAH --}}

<div
class="tab-pane fade {{ $activeTab=='sejarah'?'show active':'' }}"
id="sejarah">


<div class="card">


<div class="card-header">

<h5>
Sejarah
</h5>

</div>




<div class="card-body">



<form action="{{ route('tentang-kami.store') }}"
method="POST">


@csrf



<textarea
name="sejarah"
class="form-control"
rows="12">{{ $tentang->sejarah ?? '' }}</textarea>



<input type="hidden"
name="visi_misi"
value="{{ $tentang->visi_misi ?? '' }}">



<div class="text-end mt-3">


<button class="btn btn-primary">

Simpan

</button>


</div>



</form>



</div>


</div>


</div>









{{-- VISI MISI --}}

<div
class="tab-pane fade {{ $activeTab=='visi-misi'?'show active':'' }}"
id="visi-misi">


<div class="card">


<div class="card-header">

<h5>
Visi & Misi
</h5>


</div>




<div class="card-body">


<form action="{{ route('tentang-kami.store') }}"
method="POST">


@csrf



<textarea
name="visi_misi"
class="form-control"
rows="12">{{ $tentang->visi_misi ?? '' }}</textarea>



<input type="hidden"
name="sejarah"
value="{{ $tentang->sejarah ?? '' }}">



<div class="text-end mt-3">


<button class="btn btn-primary">

Simpan

</button>


</div>



</form>



</div>


</div>


</div>










{{-- FASILITAS --}}

<div
class="tab-pane fade {{ $activeTab=='fasilitas'?'show active':'' }}"
id="fasilitas">





<div class="card mb-4">


<div class="card-header">

<h5>
Tambah Fasilitas
</h5>

</div>





<div class="card-body">


<form action="{{ route('fasilitas.store') }}"
method="POST"
enctype="multipart/form-data">


@csrf




<input
type="text"
name="deskripsi"
class="form-control mb-3"
placeholder="Deskripsi fasilitas">





<input
type="file"
name="foto"
class="form-control mb-3">





<button class="btn btn-primary">

Tambah

</button>



</form>


</div>


</div>








<div class="card">


<div class="card-header">

<h5>
Data Fasilitas
</h5>


</div>





<div class="card-body">


<table class="table table-bordered">


<thead>

<tr>

<th>No</th>
<th>Foto</th>
<th>Deskripsi</th>
<th>Aksi</th>

</tr>


</thead>





<tbody>


@forelse($fasilitas as $item)



<tr>


<td>
{{ $loop->iteration }}
</td>



<td>


@if($item->foto)


<img
src="{{ asset('storage/'.$item->foto) }}"
width="80">


@endif


</td>




<td>

{{ $item->deskripsi }}

</td>





<td>


<form
action="{{ route('fasilitas.destroy',$item->id) }}"
method="POST">


@csrf

@method('DELETE')

<button class="btn btn-danger btn-sm">

Hapus

</button>


</form>


</td>


</tr>



@empty


<tr>

<td colspan="4"
class="text-center">

Belum ada data

</td>

</tr>


@endforelse



</tbody>


</table>



</div>


</div>



</div>
{{-- PENGAJAR --}}

<div
class="tab-pane fade {{ $activeTab=='pengajar'?'show active':'' }}"
id="pengajar">



<div class="card mb-4">


<div class="card-header">

<h5>
Tambah Pengajar
</h5>

</div>




<div class="card-body">


<form action="{{ route('pengajar.store') }}"
method="POST"
enctype="multipart/form-data">


@csrf



<input
type="text"
name="nama_lengkap"
class="form-control mb-3"
placeholder="Nama lengkap"
required>




<input
type="text"
name="jabatan"
class="form-control mb-3"
placeholder="Jabatan"
required>




<input
type="text"
name="no_telepon"
class="form-control mb-3"
placeholder="No Telepon">





<input
type="file"
name="foto"
class="form-control mb-3">





<button class="btn btn-primary">

Tambah Pengajar

</button>



</form>



</div>


</div>









<div class="card">


<div class="card-header">

<h5>
Data Pengajar
</h5>

</div>





<div class="card-body">



<table class="table table-bordered">


<thead>

<tr>

<th>No</th>
<th>Foto</th>
<th>Nama</th>
<th>Jabatan</th>
<th>No Telepon</th>
<th>Aksi</th>


</tr>

</thead>





<tbody>



@forelse($pengajar as $item)



<tr>


<td>

{{ $loop->iteration }}

</td>




<td>


@if($item->foto)


<img
src="{{ asset('storage/'.$item->foto) }}"
width="80"
class="rounded">


@endif


</td>




<td>

{{ $item->nama_lengkap }}

</td>




<td>

{{ $item->jabatan }}

</td>




<td>

{{ $item->no_telepon }}

</td>





<td>



<form

action="{{ route('pengajar.destroy',$item->id) }}"

method="POST">


@csrf

@method('DELETE')



<button class="btn btn-danger btn-sm">


<i class="fa-solid fa-trash"></i>


Hapus


</button>



</form>



</td>




</tr>




@empty



<tr>

<td colspan="6"
class="text-center">

Belum ada data pengajar

</td>


</tr>



@endforelse




</tbody>



</table>



</div>


</div>



</div>












{{-- PRESTASI --}}


<div
class="tab-pane fade {{ $activeTab=='prestasi'?'show active':'' }}"
id="prestasi">







<div class="card mb-4">



<div class="card-header">

<h5>
Tambah Prestasi
</h5>


</div>






<div class="card-body">



<form

action="{{ route('tentang-kami.prestasi.store') }}"

method="POST"

enctype="multipart/form-data">


@csrf





<div class="mb-3">


<label class="form-label">

Judul Prestasi

</label>


<input

type="text"

name="judul"

class="form-control"

placeholder="Masukkan judul prestasi"

required>


</div>








<div class="mb-3">


<label class="form-label">

Deskripsi

</label>


<textarea

name="deskripsi"

class="form-control"

rows="5"

placeholder="Deskripsi prestasi"></textarea>


</div>







<div class="mb-3">


<label class="form-label">

Foto / Video Dokumentasi

</label>



<input

type="file"

name="media[]"

class="form-control"

multiple

accept="image/*,video/*">


<small class="text-muted">

Bisa upload beberapa foto dan video.

</small>



</div>







<div class="text-end">


<button class="btn btn-primary">


<i class="fa-solid fa-plus me-2"></i>


Tambah Prestasi


</button>



</div>





</form>





</div>




</div>









<div class="card">



<div class="card-header">

<h5>
Data Prestasi
</h5>


</div>






<div class="card-body">



<table class="table table-bordered align-middle">


<thead>


<tr>

<th>No</th>

<th>Media</th>

<th>Judul</th>

<th>Deskripsi</th>

<th>Aksi</th>


</tr>


</thead>







<tbody>




@forelse($prestasi as $item)





<tr>


<td>

{{ $loop->iteration }}

</td>







<td>



@php
    $media = optional($item->media)->first();
@endphp





@if($media)



@if($media->tipe == 'foto')



<img

src="{{ asset('storage/'.$media->file) }}"

width="80"

height="60"

class="rounded"

style="object-fit:cover">





@elseif($media->tipe == 'video')



<video

width="80"

height="60"

controls>


<source src="{{ asset('storage/'.$media->file) }}">


</video>



@endif





@else


<span class="text-muted">

Tidak ada media

</span>


@endif



</td>









<td>

{{ $item->judul }}

</td>







<td>

{{ $item->deskripsi ?? '-' }}

</td>








<td>



<form

action="{{ route('tentang-kami.prestasi.destroy',$item->id) }}"

method="POST"

onsubmit="return confirm('Hapus prestasi ini?')">


@csrf

@method('DELETE')



<button

class="btn btn-danger btn-sm">


<i class="fa-solid fa-trash"></i>

Hapus


</button>



</form>



</td>




</tr>





@empty




<tr>

<td colspan="5"

class="text-center">

Belum ada data prestasi

</td>


</tr>





@endforelse





</tbody>


</table>




</div>


</div>




</div>







</div>

</div>

</div>



@endsection