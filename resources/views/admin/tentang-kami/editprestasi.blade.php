@extends('layouts.app1')


@section('title','Edit Prestasi')


@section('page-title','Edit Prestasi')



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



.form-control:focus {

    border-color:#d97706;

    box-shadow:
    0 0 0 .2rem rgba(217,119,6,.18);

}




textarea.form-control {

    min-height:200px;

}




.media-box {

    display:flex;
    flex-wrap:wrap;
    gap:15px;

}



.preview-image {

    width:150px;
    height:110px;
    object-fit:cover;
    border-radius:16px;

}



.preview-video {

    width:200px;
    height:120px;
    border-radius:16px;

}




.upload-box {

    background:#fffaf3;
    border:1px dashed #d97706;
    border-radius:18px;
    padding:20px;

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

Edit Prestasi

</h3>


<p>

Perbarui data prestasi Rumah Tahfidz Qur'an Al-Falah.

</p>


</div>







<div class="form-body">



@if(session('success'))
<div class="alert alert-success">
{{ session('success') }}
</div>
@endif

@if($errors->any())
<div class="alert alert-danger">
<ul class="mb-0">
@foreach($errors->all() as $error)
<li>
{{ $error }}
</li>
@endforeach
</ul>
</div>
@endif







<form

action="{{ route('tentang-kami.prestasi.update',$prestasi->id) }}"

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

Deskripsi

</label>



<textarea

name="deskripsi"

class="form-control">{{ old('deskripsi',$prestasi->deskripsi) }}</textarea>


</div>









<div class="mb-4">


<label class="form-label">

Media Saat Ini

</label>




<div class="media-box">

@forelse($prestasi->media as $media)

<div class="media-item d-flex flex-column align-items-center bg-light p-2 rounded-3 border">
@if($media->tipe == 'foto')
<img
src="{{ asset('storage/'.$media->file) }}"
class="preview-image mb-2">
@elseif($media->tipe == 'video')
<video
class="preview-video mb-2"
controls>
<source
src="{{ asset('storage/'.$media->file) }}">
</video>
@endif
<button type="button" class="btn btn-danger btn-sm py-1 px-3" onclick="if(confirm('Hapus media ini?')) { document.getElementById('delete-prestasi-media-form-{{ $media->id }}').submit(); }">
<i class="fa-solid fa-trash me-1"></i> Hapus
</button>
</div>

@empty

<p class="text-muted">
Belum ada media.
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


<small class="text-muted">

Bisa menambahkan lebih dari satu foto atau video.

</small>


</div>


</div>









<div class="btn-wrapper">


<a

href="{{ route('tentang-kami.index') }}"

class="btn-back">


Kembali


</a>






<button

type="submit"

class="btn-submit">


<i class="fa-solid fa-save me-1"></i>

Update Prestasi


</button>



</div>






</form>

@if($prestasi->media && $prestasi->media->count() > 0)
@foreach($prestasi->media as $media)
<form id="delete-prestasi-media-form-{{ $media->id }}" action="{{ route('tentang-kami.prestasi.media.destroy', $media->id) }}" method="POST" class="d-none">
@csrf
@method('DELETE')
</form>
@endforeach
@endif

</div>


</div>




@endsection