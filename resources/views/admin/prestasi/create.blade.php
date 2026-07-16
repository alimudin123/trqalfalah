@extends('layouts.app1')

@section('title', 'Tambah Prestasi')

@section('page-title', 'Tambah Prestasi')


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
    margin-bottom:8px;

}



.form-header p {

    color:#8a6f5a;
    margin:0;

}



.form-body {

    padding:38px;

}



.form-label {

    font-weight:700;
    color:#3b2414;
    margin-bottom:10px;

}



.form-control {

    border:1px solid #ead7c2;
    border-radius:16px;
    padding:14px 18px;
    font-size:15px;
    color:#3b2414;
    background:#fffaf3;

}



.form-control:focus {

    border-color:#d97706;

    box-shadow:
    0 0 0 .2rem rgba(217,119,6,.18);

    background:#ffffff;

}



textarea.form-control {

    min-height:230px;
    resize:vertical;

}



.upload-box {

    background:#fffaf3;
    border:1px dashed #d97706;
    border-radius:18px;
    padding:20px;

}



.media-preview {

    display:flex;
    flex-wrap:wrap;
    gap:15px;

}



.preview-item {

    width:150px;
    height:120px;
    border-radius:15px;
    overflow:hidden;
    border:1px solid #ead7c2;
    background:white;

}



.preview-item img,
.preview-item video {

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



.btn-back:hover {

    background:#ffedd5;
    color:#7c2d12;

}



.btn-submit {

    background:linear-gradient(135deg,#b45309,#d97706);
    border:none;
    color:white;
    border-radius:14px;
    padding:12px 24px;
    font-weight:700;

}



.btn-submit:hover {

    background:linear-gradient(135deg,#7c2d12,#b45309);
    color:white;

}



.alert-danger {

    border-radius:16px;

}



</style>

@endpush





@section('content')


<div class="form-card">



<div class="form-header">

<h3>
Form Tambah Prestasi
</h3>


<p>
Tambahkan prestasi terbaru Rumah Tahfidz Qur'an Al-Falah.
</p>


</div>





<div class="form-body">



@if ($errors->any())

<div class="alert alert-danger mb-4">

<strong>
Terjadi kesalahan!
</strong>


<ul class="mb-0 mt-2">

@foreach ($errors->all() as $error)

<li>
{{ $error }}
</li>

@endforeach

</ul>


</div>

@endif






<form action="{{ route('prestasi.store') }}"
method="POST"
enctype="multipart/form-data">


@csrf





<div class="mb-4">


<label class="form-label">

Judul Prestasi

</label>



<input
type="text"
name="judul"
class="form-control"
placeholder="Masukkan judul prestasi"
value="{{ old('judul') }}"
required>


</div>







<div class="mb-4">


<label class="form-label">

Deskripsi Prestasi

</label>



<textarea
name="deskripsi"
class="form-control"
placeholder="Masukkan deskripsi prestasi">{{ old('deskripsi') }}</textarea>



</div>








<div class="mb-4">


<label class="form-label">

Upload Foto / Video Dokumentasi

</label>




<div class="upload-box">



<input

type="file"

name="media[]"

id="media"

class="form-control"

multiple

accept="image/*,video/*"


>




<small class="text-muted d-block mt-2">

Bisa upload lebih dari satu file.

Foto:
JPG, PNG, WEBP

Video:
MP4, MOV

</small>





<div id="preview-media"
class="media-preview mt-3">

</div>



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

Simpan Prestasi


</button>



</div>





</form>



</div>



</div>



@endsection







@push('script')

<script>


const inputMedia =
document.getElementById('media');


const preview =
document.getElementById('preview-media');



inputMedia.addEventListener(
'change',
function(){


    preview.innerHTML = '';



    Array.from(this.files)
    .forEach(file => {



        const wrapper =
        document.createElement('div');


        wrapper.className =
        'preview-item';




        let element;



        if(file.type.startsWith('image')){


            element =
            document.createElement('img');


            element.src =
            URL.createObjectURL(file);



        }


        else if(file.type.startsWith('video')){


            element =
            document.createElement('video');


            element.src =
            URL.createObjectURL(file);


            element.controls = true;


        }



        wrapper.appendChild(element);


        preview.appendChild(wrapper);



    });



});



</script>

@endpush