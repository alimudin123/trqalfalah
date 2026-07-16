@extends('layouts.app1')

@section('title', 'Detail Prestasi')

@section('page-title', 'Detail Prestasi')


@push('style')
<style>

.detail-card {

    background:#ffffff;
    border:1px solid #ead7c2;
    border-radius:26px;
    box-shadow:0 12px 32px rgba(124,45,18,.10);
    overflow:hidden;

}



.detail-header {

    background:linear-gradient(135deg,#fffaf3,#ffedd5);
    padding:32px 38px;
    border-bottom:1px solid #ead7c2;

}



.detail-header h3 {

    font-size:32px;
    font-weight:800;
    color:#7c2d12;

}



.detail-header p {

    color:#8a6f5a;
    margin:0;

}



.detail-body {

    padding:38px;

}



.media-gallery {

    display:grid;
    grid-template-columns:repeat(auto-fill,minmax(220px,1fr));
    gap:20px;

}



.media-item {

    border:1px solid #ead7c2;
    border-radius:18px;
    overflow:hidden;
    background:#fffaf3;

}



.media-item img,
.media-item video {

    width:100%;
    height:220px;
    object-fit:cover;

}



.media-label {

    padding:12px;
    font-size:14px;
    font-weight:700;
    color:#7c2d12;

}



.title-prestasi {

    font-size:28px;
    font-weight:800;
    color:#7c2d12;
    margin-top:30px;

}



.description {

    color:#5b4636;
    line-height:1.8;
    font-size:16px;
    margin-top:15px;

}



.info-box {

    background:#fffaf3;
    border-radius:18px;
    padding:20px;
    border:1px solid #ead7c2;
    margin-top:25px;

}



.info-label {

    color:#8a6f5a;
    font-weight:700;

}



.btn-wrapper {

    display:flex;
    justify-content:flex-end;
    gap:12px;
    margin-top:30px;

}



.btn-back {

    background:#fff7ed;
    border:1px solid #ead7c2;
    color:#7c2d12;
    border-radius:14px;
    padding:12px 22px;
    font-weight:700;
    text-decoration:none;

}



.btn-edit {

    background:linear-gradient(135deg,#b45309,#d97706);
    color:white;
    border-radius:14px;
    padding:12px 22px;
    font-weight:700;
    text-decoration:none;

}



.btn-edit:hover {

    color:white;

}


</style>
@endpush





@section('content')


<div class="detail-card">



<div class="detail-header">


<h3>
Detail Prestasi
</h3>


<p>
Informasi lengkap prestasi Rumah Tahfidz Qur'an Al-Falah.
</p>


</div>







<div class="detail-body">





@if($prestasi->media->count() > 0)



<div class="media-gallery">



@foreach($prestasi->media as $media)



<div class="media-item">



@if($media->tipe == 'foto')


<img 
src="{{ asset('storage/'.$media->file) }}">



<div class="media-label">

<i class="fa-solid fa-image me-1"></i>

Foto Dokumentasi

</div>



@elseif($media->tipe == 'video')


<video controls>


<source 
src="{{ asset('storage/'.$media->file) }}">


</video>



<div class="media-label">

<i class="fa-solid fa-video me-1"></i>

Video Dokumentasi

</div>



@endif



</div>



@endforeach



</div>




@else


<div class="alert alert-warning">

Belum ada dokumentasi prestasi.

</div>


@endif







<h2 class="title-prestasi">

{{ $prestasi->judul }}

</h2>







<div class="info-box">


<div class="info-label">

Deskripsi Prestasi

</div>



<p class="description">

{{ $prestasi->deskripsi ?? 'Tidak ada deskripsi.' }}

</p>



</div>







<div class="btn-wrapper">


<a href="{{ route('prestasi.index') }}"
class="btn-back">

<i class="fa-solid fa-arrow-left me-1"></i>

Kembali

</a>





<a href="{{ route('prestasi.edit',$prestasi->id) }}"
class="btn-edit">

<i class="fa-solid fa-pen me-1"></i>

Edit Prestasi

</a>



</div>





</div>


</div>



@endsection