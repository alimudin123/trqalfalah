@extends('layouts.app1')

@section('title', 'Edit Prestasi')

@section('page-title', 'Edit Prestasi')


@push('style')
<style>

.form-card {

    background:#ffffff;
    border:1px solid #ead7c2;
    border-radius:26px;
    box-shadow:0 12px 32px rgba(124,45,18,.10);
    overflow:hidden;

}



.form-header {

    background:linear-gradient(135deg,#fffaf3,#ffedd5);
    padding:32px 38px;
    border-bottom:1px solid #ead7c2;

}



.form-header h3 {

    font-size:32px;
    font-weight:800;
    color:#7c2d12;

}



.form-header p {

    color:#8a6f5a;

}



.form-body {

    padding:38px;

}



.form-label {

    font-weight:700;
    color:#3b2414;

}



.form-control {

    border:1px solid #ead7c2;
    border-radius:16px;
    padding:14px 18px;
    background:#fffaf3;

}



textarea.form-control {

    min-height:220px;

}



.upload-box {

    background:#fffaf3;
    border:1px dashed #d97706;
    border-radius:18px;
    padding:20px;

}



.media-grid {

    display:flex;
    flex-wrap:wrap;
    gap:15px;

}



.media-item {

    width:180px;
    height:130px;
    border-radius:16px;
    overflow:hidden;
    border:1px solid #ead7c2;

}



.media-item img,
.media-item video {

    width:100%;
    height:100%;
    object-fit:cover;

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



.btn-submit {

    background:linear-gradient(135deg,#b45309,#d97706);
    border:none;
    color:white;
    border-radius:14px;
    padding:12px 24px;
    font-weight:700;

}

</style>
@endpush





@section('content')


<div class="form-card">



<div class="form-header">

<h3>
Form Edit Prestasi
</h3>


<p>
Perbarui informasi prestasi Rumah Tahfidz Qur'an Al-Falah.
</p>

</div>







<div class="form-body">



@if($errors->any())

<div class="alert alert-danger">

<strong>
Terjadi kesalahan!
</strong>


<ul class="mb-0 mt-2">

@foreach($errors->all() as $error)

<li>
{{ $error }}
</li>

@endforeach

</ul>

</div>

@endif







<form action="{{ route('prestasi.update',$prestasi->id) }}"
method="POST"
enctype="multipart/form-data">


@csrf

@method('PUT')







<div class="mb-4">

<label class="form-label">
Judul Prestasi
</label>


<input
type="text"
name="judul"
class="form-control"
value="{{ old('judul',$prestasi->judul) }}"
required>

</div>







<div class="mb-4">

<label class="form-label">
Deskripsi Prestasi
</label>


<textarea
name="deskripsi"
class="form-control">{{ old('deskripsi',$prestasi->deskripsi) }}</textarea>

</div>









<div class="mb-4">

<label class="form-label">
Dokumentasi Saat Ini
</label>



<div class="media-grid">


@forelse($prestasi->media as $media)



<div class="media-item">


@if($media->tipe == 'foto')


<img src="{{ asset('storage/'.$media->file) }}">



@else


<video controls>

<source src="{{ asset('storage/'.$media->file) }}">

</video>


@endif


</div>



@empty


<p class="text-muted">
Belum ada dokumentasi.
</p>


@endforelse



</div>


</div>









<div class="mb-4">


<label class="form-label">
Tambah Foto / Video Baru
</label>



<div class="upload-box">


<input
type="file"
name="media[]"
class="form-control"
multiple
accept="image/*,video/*">



<small class="text-muted d-block mt-2">

Upload tambahan foto atau video dokumentasi.

</small>


</div>


</div>









<div class="btn-wrapper">


<a href="{{ route('prestasi.index') }}"
class="btn-back">

Kembali

</a>





<button type="submit"
class="btn-submit">

<i class="fa-solid fa-save me-1"></i>

Update Prestasi

</button>



</div>






</form>



</div>



</div>



@endsection