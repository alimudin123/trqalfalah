@extends('layouts.app1')

@section('title', 'Data Prestasi')

@section('page-title', 'Data Prestasi')


@push('style')
<style>

.table-card {

    background:#ffffff;
    border:1px solid #ead7c2;
    border-radius:26px;
    box-shadow:0 12px 32px rgba(124,45,18,.10);
    overflow:hidden;

}


.table-header {

    background:linear-gradient(135deg,#fffaf3,#ffedd5);
    padding:32px 38px;
    border-bottom:1px solid #ead7c2;

}



.table-header h3 {

    font-size:32px;
    font-weight:800;
    color:#7c2d12;

}



.table-header p {

    color:#8a6f5a;

}



.table-body {

    padding:38px;

}



.btn-add {

    background:linear-gradient(135deg,#b45309,#d97706);
    border:none;
    color:white;
    border-radius:14px;
    padding:12px 22px;
    font-weight:700;
    text-decoration:none;

}



.btn-add:hover {

    color:white;
    background:linear-gradient(135deg,#7c2d12,#b45309);

}



.table {

    border-color:#ead7c2;

}



.table thead th {

    background:#fff7ed;
    color:#7c2d12;
    font-weight:700;

}



.table tbody td {

    color:#3b2414;
    vertical-align:middle;

}



.img-preview {

    width:90px;
    height:70px;
    object-fit:cover;
    border-radius:12px;

}



.video-preview {

    width:90px;
    height:70px;
    border-radius:12px;
    background:#3b2414;
    color:white;
    display:flex;
    align-items:center;
    justify-content:center;

}



.action-btn {

    border-radius:12px;
    padding:8px 12px;

}


</style>
@endpush





@section('content')


<div class="table-card">



<div class="table-header">


<div class="d-flex justify-content-between align-items-center">


<div>

<h3>
Data Prestasi
</h3>


<p>
Kelola daftar prestasi Rumah Tahfidz Qur'an Al-Falah.
</p>


</div>




<a href="{{ route('prestasi.create') }}"
class="btn-add">


<i class="fa-solid fa-plus me-1"></i>

Tambah Prestasi


</a>



</div>


</div>





<div class="table-body">



@if(session('success'))

<div class="alert alert-success">

{{ session('success') }}

</div>

@endif






<div class="table-responsive">


<table class="table table-bordered align-middle">


<thead>

<tr>

<th width="5%">
No
</th>


<th width="15%">
Media
</th>


<th>
Judul Prestasi
</th>


<th>
Deskripsi
</th>


<th width="20%">
Aksi
</th>


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

$mediaPertama = $item->media->first();

@endphp




@if($mediaPertama)



@if($mediaPertama->tipe == 'foto')


<img 
src="{{ asset('storage/'.$mediaPertama->file) }}"
class="img-preview">



@else


<div class="video-preview">

<i class="fa-solid fa-video"></i>

</div>



@endif





@else


<span class="text-muted">

Tidak ada media

</span>


@endif



</td>







<td>


<strong>

{{ $item->judul }}

</strong>



<br>


<small class="text-muted">

{{ $item->media->count() }} file

</small>


</td>







<td>


{{ Str::limit($item->deskripsi,100) }}


</td>








<td>



<a href="{{ route('prestasi.show',$item->id) }}"
class="btn btn-info action-btn">


<i class="fa-solid fa-eye"></i>


</a>





<a href="{{ route('prestasi.edit',$item->id) }}"
class="btn btn-warning action-btn">


<i class="fa-solid fa-pen"></i>


</a>







<form action="{{ route('prestasi.destroy',$item->id) }}"
method="POST"
class="d-inline">


@csrf

@method('DELETE')



<button
class="btn btn-danger action-btn"
onclick="return confirm('Hapus prestasi ini?')">


<i class="fa-solid fa-trash"></i>


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



@endsection