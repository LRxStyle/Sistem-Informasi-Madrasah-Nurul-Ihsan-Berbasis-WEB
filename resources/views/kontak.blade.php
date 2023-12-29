@extends('layouts.app')

@section('title', 'Data Kontak')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if ($message = Session::get('message'))
                <div class="alert alert-success">
                    <strong>Berhasil</strong>
                    <p>{{$message}}</p>
                </div>
            @endif
            <form action="/admin/kontaks/{{ $kontak->id }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" name="name" placeholder="Nama" value="{{ $kontak->name }}">
                </div>
                @error('name')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi">{{ $kontak->description }}</textarea>
                </div>
                @error('description')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="{{ $kontak->alamat }}">
                </div>
                @error('alamat')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Email" value="{{ $kontak->email }}">
                </div>
                @error('email')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Telepon</label>
                    <input type="text" class="form-control" name="telepon" placeholder="Telepon" value="{{ $kontak->telepon }}">
                </div>
                @error('telepon')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Maps Embed</label>
                    <textarea name="maps_embed" id="" cols="30" rows="10" class="form-control" placeholder="Maps Embed">{{ $kontak->maps_embed }}</textarea>
                </div>
                @error('maps_embed')
                <small style="color:red">{{$message}}</small>
                @enderror
                <label for="">Gambar</label>
                <div class="form-group" style="position: relative; border: 1px solid #ced4da;
                    overflow: hidden; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                    <img id="imagePreview" src="/image/{{ $kontak->logo }}" alt="" style="max-width:1000px; min-height:50px; display: block; margin: auto;">
                    <input type="file" class="form-control" name="logo" id="imageInput" accept="image/*" style="opacity: 0; position: absolute; width: 100%; height: 55%;" onchange="previewImage()">
                    <button type="button" onclick="resetImage()">
                        Reset<img src="reset-image-url" alt="">
                    </button>
                </div>
                @error('image')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function previewImage() {
      var fileInput = document.getElementById('imageInput');
      var imgPreview = document.getElementById('imagePreview');
      imgPreview.src = URL.createObjectURL(fileInput.files[0]);
    }

    function resetImage() {
      document.getElementById('imageInput').value = '';
      document.getElementById('imagePreview').src = '';
    }
</script>

@endsection
